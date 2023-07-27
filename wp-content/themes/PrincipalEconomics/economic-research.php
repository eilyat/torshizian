<?php //Template Name: Economic research ?>
<?php get_header(); ?>


    <section id="economicOne">
        <div class="pageContainer">
            <div class="infrastructureOneContainer">
                <div class="homeOneBox">
                    <h1>Economic research</h1>
                    <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?></div>
                </div>
            </div>
    </section>

    <section id="benefitsTwo">
        <div class="pageContainer">
            <div class="benefitsTwoContainer">
                <div class="benefitsTwo-box">
                    <div class="benefitsTwo-info">
                        <h1><?php the_field( 'block_1_title' ); ?></h1>
                        <?php the_field( 'block_1_description' ); ?>
                    </div>
                    <div class="benefitsTwo-image">

                        <?php $block_1_image = get_field( 'block_1_image' ); ?>
                        <?php if ( $block_1_image ) : ?>
                            <img src="<?php echo esc_url( $block_1_image['url'] ); ?>" alt="<?php echo esc_attr( $block_1_image['alt'] ); ?>" />
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="benefitsThree">
    <div class="pageContainer">
    <div class="benefitsThreeContainer">
    <div class="benefitsThreeBox">


<?php if ( have_rows( 'see_also' ) ) : ?>
    <?php while ( have_rows( 'see_also' ) ) : the_row(); ?>






                        <div class="benefitsThree-title">
                            <h3>See Also</h3>
                        </div>
                        <div class="benefitsThree-info">
                            <div class="benefitsThreeInfo-item">
                                <ul>
                                    <li>
                                        <a href="<?php the_sub_field( 'first_item_link' ); ?>"><?php the_sub_field( 'first_itemlink_text' ); ?></a>
                                    </li>
                                    <p><?php the_sub_field( 'first_item_description' ); ?></p>
                                </ul>
                            </div>
                            <div class="benefitsThreeInfo-item">
                                <ul>
                                    <li>
                                        <a href=""> <?php the_sub_field( 'second_item_link_text' ); ?></a>
                                    </li>
                                    <p>  <?php the_sub_field( 'second__item_description_' ); ?></p>
                                </ul>
                            </div>
                            <div class="benefitsThreeInfo-item">
                                <ul>
                                    <li>
                                        <a href="<?php the_sub_field( 'third_item_link' ); ?>"> <?php the_sub_field( 'third_item_link_text_' ); ?></a>
                                    </li>
                                    <p <?php the_sub_field( 'third_item_description_' ); ?></p>
                                </ul>
                            </div>
                        </div>
















    <?php endwhile; ?>
<?php endif; ?>


    </div>
    </div>
    </div>
    </section>
    <style>

        .benefitsThreeBox{
            width:80%;
        }
    </style>





    <section id="spatialThree">
    <div class="infrastructureTwoContainer">
    <div class="pageContainer">

<?php if ( have_rows( 'relevant_experience' ) ) : ?>
    <?php while ( have_rows( 'relevant_experience' ) ) : the_row(); ?>




                    <div class="infrastructureTwoBox">
                        <div class="infrastructureTwo-image">

                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) : ?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="infrastructureTwo-content">
                            <div class="housingThree-title">Relevant Experience</div>
                            <div class="housingThree-list">
                                <?php the_sub_field( 'list' ); ?>
                            </div>
                        </div>

                    </div>






    <?php endwhile; ?>
<?php endif; ?>


    </div>
    </div>
    </section>












<?php get_footer(); ?>