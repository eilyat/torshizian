<?php //Template Name: Energy ?>
<?php get_header(); ?>

<section id="energyOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>ENERGY</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="energyTwo">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-image">
                    <?php $left_image = get_field( 'left_image' ); ?>
                    <?php if ( $left_image ) : ?>
                        <img src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="infrastructureTwo-content">
                    <h1><?php the_field( 'right_title' ); ?>.</h1>
                    <div class="infrastructureTwoContent-paragraph"><?php the_field( 'right_description' ); ?>
                    </div>

                </div>
            </div>
        </div>
</section>



<?php get_footer(); ?>
