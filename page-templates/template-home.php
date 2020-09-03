<?php
/**
 * Template Name: Home Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
    <section class="home-banner">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-md-start align-items-center align-items-md-start pt-0 pt-md-3" 
            style="background-image:url('<?php echo get_template_directory_uri().'/img/home-banner.png' ?>')">
                <div class="col-12 col-lg-7 pt-0 pt-md-5 text-center text-md-left">
                    <h1> Condimentum, lacus pha. </h1>
                </div>
            </div>
        </div>  
    </section>
    <section id="home-hero" class="home-hero pt-5 carousel slide">
        <div class="container-fluid carousel-inner">
            <div class="carousel-item active">
                <div class="row no-gutters-right">
                    <div class="col-12 col-md-7 pr-3">
                        <div class="pr-0 pr-xl-4">
                            <p class="intro">Intro</p>
                            <h1> Duis porta, ligula rhoncus euis mod pretiu, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecena sa venenatis en m, quis porttitor magna. </h1>
                            <p class="pt-2 text-justify">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Pra esent sollici tudin felis vel mi facilisis posuere. Nulla ultrices facilisis ju sto, non varius nisl semp ervel. Interdum et malesuada fames ac antei psum primis in faucibus. Phasellus at ante mattis, condimentum velite t, dignissim nunc. Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. Nulla vehicula vestibulum p urus at rutrum. Pellentesque habitant morbi tristique senectus et netu s et malesuada fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. Curabitur ac purus id elit hendrerit lacinia.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">  
                        <div class="image w-100" style="background-image:url(<?php echo get_template_directory_uri().'/img/hero-1.png'; ?>)"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters-right">
                    <div class="col-12 col-md-7 pr-3">
                        <div class="pr-0 pr-xl-4">
                            <p class="intro">Intro</p>
                            <h1> Duis porta, ligula rhoncus euis mod pretiu, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecena sa venenatis en m, quis porttitor magna. </h1>
                            <p class="pt-2 text-justify">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Pra esent sollici tudin felis vel mi facilisis posuere. Nulla ultrices facilisis ju sto, non varius nisl semp ervel. Interdum et malesuada fames ac antei psum primis in faucibus. Phasellus at ante mattis, condimentum velite t, dignissim nunc. Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. Nulla vehicula vestibulum p urus at rutrum. Pellentesque habitant morbi tristique senectus et netu s et malesuada fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. Curabitur ac purus id elit hendrerit lacinia.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">  
                        <div class="image w-100" style="background-image:url(<?php echo get_template_directory_uri().'/img/hero-1.png'; ?>)"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="container-fluid">
            <ol class="custom-carousel-indicators" >
                    <li data-target="#home-hero" data-slide-to="0" class="active"> <span> 01. Lorem <span></li>
                    <li data-target="#home-hero" data-slide-to="1"><span> 02. Ipsum <span></li>
            </ol>
        </div>
    </section>

    <section class="register bg-secondary py-5 mt-5">
        <div class="container-fluid pt-5">
            <div class="row no-gutters-right">
                <div class="col-12 col-md-7">
                    <div class="pr-0 pr-xl-4">
                        <h1>Registrera dig</h1>
                        <p class="pt-2 text-justify">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Pra esent sollici tudin felis vel mi facilisis posuere. Nulla ultrices facilisis ju sto, non varius nisl semp ervel. Interdum et malesuada fames ac antei psum primis in faucibus. Phasellus at ante mattis, condimentum velite t, dignissim nunc. Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. Nulla vehicula vestibulum p urus at rutrum. Pellentesque habitant morbi tristique senectus et netu s et malesuada fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. Curabitur ac purus id elit hendrerit lacinia.</p>
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
                    <p class="text-justify terms-condition-text">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicit udi n felis vel mi facilisis posuere. Nulla ultrices facilisis justo, non varius nisl semper vel. I nterdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus at ante matti s, condimentum velit et, dignissim nunc. Integer quis tincidunt purus.</p>
                    <button type="submit" disabled class="btn btn-info btn-block rounded-0 border-0">Skicka</button>
                </form>
                </div>
            </div>
        </div>
    </section>
    
    
</main>

<?php
get_footer();