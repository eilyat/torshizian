<?php //Template Name: Environment ?>
<?php get_header(); ?>

<section id="environmentOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>ENVIRONMENT</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="environmentTwo">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-image">
                    <?php $first_block_image = get_field( 'first_block_image' ); ?>
                    <?php if ( $first_block_image ) : ?>
                        <img src="<?php echo esc_url( $first_block_image['url'] ); ?>" alt="<?php echo esc_attr( $first_block_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="infrastructureTwo-content">
                    <h1><?php the_field( 'first_block_title' ); ?></h1>
                    <?php the_field( 'first_block_description' ); ?>
                </div>
            </div>
        </div>
</section>

<section id="transportThree">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-image">
                    <?php $relevant_experience_image = get_field( 'relevant_experience_image' ); ?>
                    <?php if ( $relevant_experience_image ) : ?>
                        <img src="<?php echo esc_url( $relevant_experience_image['url'] ); ?>" alt="<?php echo esc_attr( $relevant_experience_image['alt'] ); ?>" />
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

