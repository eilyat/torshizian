<?php //Template Name: How We Work ?>
<?php get_header(); ?>


<section id="aboutOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>How We Work</h1>
                <div class="homeOneBox-pgh">
                    <?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
</section>








<section id="homeTwo">
    <div class="homeTwoContainer">
        <div class="homeTwoBox">

            <div class="homeTwoBox-item">
            <?php if ( have_rows( 'block_1' ) ) : ?>
                <?php while ( have_rows( 'block_1' ) ) : the_row(); ?>

                        <div class="homeTwoBoxItem-content">
                            <div class="homeTwo-infoBox">
                                <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title1_' ); ?></h1>
                                <div class="aboutOneBox-ul">
                                    <?php the_sub_field( 'description_1' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="homeTwoBoxItem-image">
                            <?php $block_1_image = get_sub_field( 'block_1_image' ); ?>
                            <?php if ( $block_1_image ) : ?>
                                <img src="<?php echo esc_url( $block_1_image['url'] ); ?>" alt="<?php echo esc_attr( $block_1_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>





                <?php endwhile; ?>
            <?php endif; ?>
        </div>


            <div class="homeTwoBox-item">
            <?php if ( have_rows( 'block_2' ) ) : ?>
                <?php while ( have_rows( 'block_2' ) ) : the_row(); ?>
                    <div class="homeTwoBoxItem-content">
                        <div class="homeTwo-infoBox">
                            <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title2' ); ?></h1>
                            <div class="aboutOneBox-ul">
                                <div class="homeTwoBoxItem-pgh">
                                    <?php the_sub_field( 'description_2' ); ?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="homeTwoBoxItem-image">
                        <?php $block_2_image = get_sub_field( 'block_2_image' ); ?>
                        <?php if ( $block_2_image ) : ?>
                            <img src="<?php echo esc_url( $block_2_image['url'] ); ?>" alt="<?php echo esc_attr( $block_2_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            </div>







            <div class="homeTwoBox-item">

                <?php if ( have_rows( 'block_3' ) ) : ?>
                    <?php while ( have_rows( 'block_3' ) ) : the_row(); ?>

                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"><?php the_sub_field( 'title3' ); ?></h1>
                        <div class="aboutOneBox-ul">
                            <?php the_sub_field( 'description_3' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $block_3_image = get_sub_field( 'block_3_image' ); ?>
                    <?php if ( $block_3_image ) : ?>
                        <img src="<?php echo esc_url( $block_3_image['url'] ); ?>" alt="<?php echo esc_attr( $block_3_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</section>

<?php if ( have_rows( 'block_4' ) ) : ?>
<?php while ( have_rows( 'block_4' ) ) : the_row(); ?>
<section id="aboutThree">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
            <div class="infrastructureTwoBox">



                <div class="infrastructureTwo-image">
                    <?php $block_4_image = get_sub_field( 'block_4_image' ); ?>
                    <?php if ( $block_4_image ) : ?>
                        <img src="<?php echo esc_url( $block_4_image['url'] ); ?>" alt="<?php echo esc_attr( $block_4_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="infrastructureTwo-content">
                    <div class="housingThree-title">  <?php the_sub_field( 'title4' ); ?></div>
                    <div class="housingThree-list">
                        <?php the_sub_field( 'description_4' ); ?>
                    </div>
                </div>





            </div>
        </div>
    </div>
</section>
  <?php endwhile; ?>
                <?php endif; ?>




<section id="homeTwo">
    <div class="homeTwoContainer">
        <div class="homeTwoBox">


            <?php if ( have_rows( 'block_5' ) ) : ?>
            <?php while ( have_rows( 'block_5' ) ) : the_row(); ?>
            <div class="homeTwoBox-item">





                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title">   <?php the_sub_field( 'title5' ); ?></h1>
                        <div class="aboutOneBox-ul">
                            <?php the_sub_field( 'description_5' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">

                    <?php $block_5_image = get_sub_field( 'block_5_image' ); ?>
                    <?php if ( $block_5_image ) : ?>
                        <img src="<?php echo esc_url( $block_5_image['url'] ); ?>" alt="<?php echo esc_attr( $block_5_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>




            </div>  <?php endwhile; ?>
            <?php endif; ?>







            <?php if ( have_rows( 'block_6' ) ) : ?>
            <?php while ( have_rows( 'block_6' ) ) : the_row(); ?>
            <div class="homeTwoBox-item">



                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title6' ); ?></h1>
                        <div class="aboutOneBox-ul">
                            <?php the_sub_field( 'description_6' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">

                    <?php $block_6_image = get_sub_field( 'block_6_image' ); ?>
                    <?php if ( $block_6_image ) : ?>
                        <img src="<?php echo esc_url( $block_6_image['url'] ); ?>" alt="<?php echo esc_attr( $block_6_image['alt'] ); ?>" />
                    <?php endif; ?>

                </div>


            </div>
                <?php endwhile; ?>
            <?php endif; ?>






            <?php if ( have_rows( 'block_7' ) ) : ?>
            <?php while ( have_rows( 'block_7' ) ) : the_row(); ?>
            <div class="homeTwoBox-item">



                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title">  <?php the_sub_field( 'title7' ); ?></h1>
                        <div class="aboutOneBox-ul">
                            <?php the_sub_field( 'description_7' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">


                    <?php $block_6_image = get_sub_field( 'block_6_image' ); ?>
                    <?php if ( $block_6_image ) : ?>
                        <img src="<?php echo esc_url( $block_6_image['url'] ); ?>" alt="<?php echo esc_attr( $block_6_image['alt'] ); ?>" />
                    <?php endif; ?>

                </div>

            </div>
                <?php endwhile; ?>
            <?php endif; ?>





        </div>
    </div>

</section>

<?php get_footer(); ?>
