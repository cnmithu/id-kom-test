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
            style="background-image:url('<?php echo wp_get_attachment_url( get_field( 'banner_image') , 'full' ); ?>')">
                <div class="col-12 col-lg-7 pt-0 pt-md-5 text-center text-md-left">
                    <h1> <?php the_field( 'banner_heading' ); ?> </h1>
                </div>
            </div>
        </div>  
    </section>

    <?php get_template_part( 'loop-templates/content', 'intro' ); ?>
    <?php get_template_part( 'loop-templates/content', 'register' ); ?>
     
</main>

<?php
get_footer();