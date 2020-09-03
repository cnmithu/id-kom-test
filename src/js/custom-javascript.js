
(function ($) {

    $('#home-hero').on('slide.bs.carousel', function (event) {
        $(this).find('.custom-carousel-indicators li[data-slide-to="' + event.from + '"]').removeClass('active');
        $(this).find('.custom-carousel-indicators li[data-slide-to="' + event.to + '"]').addClass('active');

    });

    /*
	Register form custom validation
	*/

    let registerFormValidate = false;

    $(".register-form").bind('input', function (e) {
        registerFormValidate = true;

        $(this).find('input').each(function (index, input) {
            let inputTpye = $(this).attr('type');
            let inputValue = $(this).val().trim();
            let isvalid = false;

            switch (inputTpye) {
                case 'text':
                    if (inputValue.length) isvalid = true;
                    break;

                case 'email':
                    if (/\S+@\S+\.\S+/.test(inputValue)) isvalid = true;
                    break;

                case 'password':

                    if (inputValue.length) {

                        isvalid = true;
                        let inputName = $(input).attr('name');

                        if (inputName == 'cpassword') {
                            let passwordValue = $(e.currentTarget).find('input[name="password"]').val();
                            isvalid = passwordValue.trim() === inputValue;
                        }
                    }
                    break;

                case 'checkbox':
                    if ($(this).is(':checked')) isvalid = true;

                default:
            }

            if (!isvalid) registerFormValidate = isvalid;

            if (e.target == input) {

                if (isvalid) {
                    $(input).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(input).removeClass('is-valid').addClass('is-invalid');
                }
            }

        });

        $(e.currentTarget).find('button[type="submit"]').prop("disabled", !registerFormValidate);
    });

	/*
	Register form submit handler
    */

    $(".register-form").submit(function (event) {
        event.preventDefault();
        if (registerFormValidate) {
            const $alert = $(this).find('.alert');
            const form = $(this).serialize();
            const formData = new FormData;
            formData.append('action', 'register_user');
            formData.append('data', form);

            $.ajax(ajaxurl, {
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {

                    if (res.success) {
                        $(this).trigger("reset");
                        $(this).find('input').removeClass('is-valid');
                    }

                    $alert.find('.text').html(res.data);
                    $alert.removeClass('alert-' + (res.success ? 'warning' : 'success')).addClass('alert-' + (res.success ? 'success' : 'warning'));
                    $alert.removeClass('d-none');
                    $alert.fadeTo(2000, 500).slideUp(500);

                }.bind(this),
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

})(jQuery)