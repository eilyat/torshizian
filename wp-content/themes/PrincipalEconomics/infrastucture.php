<?php //Template Name: Infrastructure ?>
<?php get_header(); ?>

<section id="infrastructureOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>INFRASTRUCTURE</h1>
                <div class="homeOneBox-pgh">
                    <?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="infrastructureTwo">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-content">
                    <h1>
                        <?php the_field( 'content_title' ); ?></h1>

                    <?php the_field( 'content_description' ); ?>
                </div>
                <div class="infrastructureTwo-image">
                    <?php $right_image = get_field( 'right_image' ); ?>
                    <?php if ( $right_image ) : ?>
                        <img src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
