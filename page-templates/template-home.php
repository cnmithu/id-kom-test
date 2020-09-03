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
    
</main>

<?php
get_footer();