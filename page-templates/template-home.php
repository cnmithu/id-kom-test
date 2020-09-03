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
    
</main>

<?php
get_footer();