<section class="register bg-secondary py-5 mt-5">
    <div class="container-fluid pt-5">
        <div class="row no-gutters-right">
            <div class="col-12 col-md-7">
                <div class="pr-0 pr-xl-4">
                    <h1> <?php echo get_field( 'register_heading' ); ?></h1>
                    <p class="pt-2 text-justify"><?php echo get_field( 'register_text' ); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-5">  
            <form id="register-form" action="" class="register-form">
                <div class="alert alert-warning alert-dismissible fade d-none" role="alert">
                    <span class='text'></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name*">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" required name="email"  placeholder="Epost*">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" required name="yob"  placeholder="Födelseår*">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" required name="password" placeholder="Lösenord*">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" required name="cpassword" placeholder="Bekräfta Lösenord*">
                </div>
                <div class="form-check d-flex align-items-center">
                    <input type="checkbox" name='terms' class="form-check-input mr-2">
                    <label class="form-check-label ">Etiam convallis elementum spien, a aliquam turpis.</label>
                </div>
                <p class="text-justify terms-condition-text"> <?php echo get_field( 'register_terms_and_conditions' ); ?></p>
                <button type="submit" disabled class="btn btn-info btn-block rounded-0 border-0">Skicka</button>
            </form>
            </div>
        </div>
    </div>
</section>