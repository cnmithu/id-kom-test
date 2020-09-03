
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
    });

})(jQuery)