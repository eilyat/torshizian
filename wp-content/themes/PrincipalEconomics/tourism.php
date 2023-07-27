<?php //Template Name: Tourism ?>
<?php get_header(); ?>

<section id="tourismOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>TOURISM</h1>
                <div class="homeOneBox-pgh">
                    <?php the_field( 'housing_page_description' ); ?>
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
                    <h1><?php the_field( 'first_block_title' ); ?></h1>
                    <div class="infrastructureTwoContent-paragraph"><?php the_field( 'first_block_description' ); ?>
                    </div>
                </div>
                <div class="infrastructureTwo-image">

                    <?php $first_block_image = get_field( 'first_block_image' ); ?>
                    <?php if ( $first_block_image ) : ?>
                        <img src="<?php echo esc_url( $first_block_image['url'] ); ?>" alt="<?php echo esc_attr( $first_block_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
