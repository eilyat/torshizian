<?php //Template Name: Economic impact analysis ?>
<?php get_header(); ?>


    <section id="impactOne">
        <div class="pageContainer">
            <div class="infrastructureOneContainer">
                <div class="homeOneBox">
                    <h1>Economic impact analysis</h1>
                    <div class="homeOneBox-pgh">

                        <?php the_field( 'page_description' ); ?>
                    </div>
                </div>
            </div>
    </section>

    <section id="benefitsTwo">
        <div class="pageContainer">
            <div class="benefitsTwoContainer">
                <div class="benefitsTwo-box">
                    <div class="benefitsTwo-info">
                        <h1>
                            <?php the_field( 'content_title' ); ?></h1>

                        <?php the_field( 'content_description' ); ?>
                    </div>
                    <div class="benefitsTwo-image">

                        <?php $right_image = get_field( 'right_image' ); ?>
                        <?php if ( $right_image ) : ?>
                            <img src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefitsThree">
        <div class="pageContainer">
            <div class="benefitsThreeContainer">


                <?php if ( have_rows( 'see_also' ) ) : ?>
                    <?php while ( have_rows( 'see_also' ) ) : the_row(); ?>










                <div class="benefitsThreeBox">
                    <div class="benefitsThree-title">
                        <h3>See Also</h3>
                    </div>
                    <div class="benefitsThree-info">
                        <div class="benefitsThreeInfo-item">
                            <ul>
                                <li>
                                    <a href=" <?php the_sub_field( 'item_1_url' ); ?>"> <?php the_sub_field( 'item_1_link_text' ); ?></a>
                                </li>
                                <p> <?php the_sub_field( 'item_1_description' ); ?></p>
                            </ul>
                        </div>
                        <div class="benefitsThreeInfo-item">
                            <ul>
                                <li>
                                    <a href=" <?php the_sub_field( 'item_2_url' ); ?>"> <?php the_sub_field( 'item_2_link_text' ); ?></a>
                                </li>
                                <p> <?php the_sub_field( 'item_2_description_' ); ?></p>
                            </ul>
                        </div>
                        <div class="benefitsThreeInfo-item">
                            <ul>
                                <li>
                                    <a href="<?php the_sub_field( 'item_3_url_' ); ?>"><?php the_sub_field( 'item_3_link_text' ); ?></a>
                                </li>
                                <p><?php the_sub_field( 'item_3description__copy' ); ?></p>
                            </ul>
                        </div>
                    </div>
                </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>


<?php get_footer(); ?>