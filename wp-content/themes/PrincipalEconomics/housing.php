<?php //Template Name: Housing ?>
<?php get_header(); ?>

<section id="housingOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>HOUSING</h1>
                <div class="homeOneBox-pgh">
                    <?php the_field( 'housing_page_description' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="housingTwo">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-content">
                    <h1><?php the_field( 'first_block_title' ); ?></h1>
                    <?php the_field( 'first_block_description' ); ?>
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

<section id="housingThree">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-image">
                    <?php $second_block_image = get_field( 'second_block_image' ); ?>
                    <?php if ( $second_block_image ) : ?>
                        <img src="<?php echo esc_url( $second_block_image['url'] ); ?>" alt="<?php echo esc_attr( $second_block_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="infrastructureTwo-content">
                    <div class="housingThree-title">Relevant Experience</div>
                    <div class="housingThree-list">
                        <?php the_field( 'relevant_experience_description' ); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
