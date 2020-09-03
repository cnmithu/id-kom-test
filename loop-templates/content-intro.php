<?php 
    $intros = get_field('intros');
    if ( $intros ) { 
    ?>

    <section id="home-hero" class="home-hero pt-5 carousel slide">
        <div class="container-fluid carousel-inner">
            <?php 

            foreach ( $intros as $id => $intro ) { ?>

                <div class="carousel-item <?php echo !$id ? 'active':''; ?>">
                    <div class="row no-gutters-right">
                        <div class="col-12 col-md-7 pr-3">
                            <div class="pr-0 pr-xl-4">
                                <p class="intro">Intro</p>
                                <h1><?php the_field( 'heading', $intro->ID ); ?></h1>
                                <p class="pt-2 text-justify"><?php the_field( 'content', $intro->ID ); ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">  
                            <div class="image w-100" style="background-image:url(<?php echo wp_get_attachment_url( get_field( 'image', $intro->ID) , 'full' ); ?>)"> 
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="container-fluid">
            <ol class="custom-carousel-indicators" >
            <?php 
                foreach ( $intros as $id => $intro ) { 
                    echo '<li data-target="#home-hero" data-slide-to="' . $id . '" ' . (!$id ? 'class="active"' : '') . '> <span> ' . sprintf( "%02d", $id + 1 ) . '. ' . $intro->post_title . ' <span></li>';
                }     
            ?>
            </ol>
        </div>
    </section>
    
<?php }  ?>