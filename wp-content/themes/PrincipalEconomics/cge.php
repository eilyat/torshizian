<?php //Template Name: CGE ?>
<?php get_header(); ?>

<section id="cgeOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1><?php the_field( 'page_title' ); ?></h1>
                <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?></div>
            </div>
        </div>
    </div>
</section>

<section id="cgeTwo">
    <div class="pageContainer">
        <div class="cgeTwoContainer">
            <div class="cgeTwoBox">
                <div class="cgeTwoBox-image">
                    <div class="cgeTwoBoxImage-left">
                        <div>
                            <?php $content_image1 = get_field( 'content_image1' ); ?>
                            <?php if ( $content_image1 ) : ?>
                                <img src="<?php echo esc_url( $content_image1['url'] ); ?>" alt="<?php echo esc_attr( $content_image1['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php $content_image_3 = get_field( 'content_image_3' ); ?>
                            <?php if ( $content_image_3 ) : ?>
                                <img src="<?php echo esc_url( $content_image_3['url'] ); ?>" alt="<?php echo esc_attr( $content_image_3['alt'] ); ?>" />
                            <?php endif; ?>



                        </div>
                    </div>
                    <div class="cgeTwoBoxImage-right">

                        <div> <h1><?php the_field( 'content_image_title' ); ?></h1>

                            <?php $content_image2 = get_field( 'content_image2' ); ?>
                            <?php if ( $content_image2 ) : ?>
                                <img src="<?php echo esc_url( $content_image2['url'] ); ?>" alt="<?php echo esc_attr( $content_image2['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="cgeTwoBox-content">
                    <h1><?php the_field( 'content_title' ); ?></h1>
                    <?php the_field( 'content_description' ); ?>


                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
