<?php //Template Name: Our Corporate Commitments ?>
<?php get_header(); ?>


<section id="aboutOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>Our Corporate Commitments</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?>

                </div>
            </div>
        </div>
</section>

<section id="homeTwo">
    <div class="homeTwoContainer">
        <div class="homeTwoBox">
            <div class="homeTwoBox-item">
                <?php if ( have_rows( 'first' ) ) : ?>
                    <?php while ( have_rows( 'first' ) ) : the_row(); ?>





                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"><?php the_sub_field( 'title1_' ); ?></h1>
                        <div class="homeTwoBoxItem-pgh"> <?php the_sub_field( 'description1' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $image1 = get_sub_field( 'image1' ); ?>
                    <?php if ( $image1 ) : ?>
                        <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
                    <?php endif; ?>
                </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>


            <div class="homeTwoBox-item">

            <?php if ( have_rows( 'second' ) ) : ?>
                <?php while ( have_rows( 'second' ) ) : the_row(); ?>
                    <div class="homeTwoBoxItem-content">
                        <div class="homeTwo-infoBox">
                            <h1 class="homeTwoBoxItem-title"><?php the_sub_field( 'title2_' ); ?></h1>
                            <div class="homeTwoBoxItem-pgh"><p>		<?php the_sub_field( 'description2' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="homeTwoBoxItem-image">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/corporateTwo.png' ?>"
                             alt="" srcset="">
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>







            </div>




            <?php if ( have_rows( 'third' ) ) : ?>
                <?php while ( have_rows( 'third' ) ) : the_row(); ?>





            <div class="homeTwoBox-item">
                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title3_' ); ?></h1>
                        <div class="homeTwoBoxItem-pgh"><?php the_sub_field( 'description3' ); ?>ety.
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $image3 = get_sub_field( 'image3' ); ?>
                    <?php if ( $image3 ) : ?>
                        <img src="<?php echo esc_url( $image3['url'] ); ?>" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>

                <?php endwhile; ?>
            <?php endif; ?>





        </div>
    </div>

</section>

<section id="aboutThree">
    <div class="infrastructureTwoContainer">

        <?php if ( have_rows( 'fourth' ) ) : ?>
            <?php while ( have_rows( 'fourth' ) ) : the_row(); ?>





        <div class="pageContainer">

            <div class="infrastructureTwoBox">
                <div class="infrastructureTwo-image">
                    <?php $image4 = get_sub_field( 'image4' ); ?>
                    <?php if ( $image4 ) : ?>
                        <img src="<?php echo esc_url( $image4['url'] ); ?>" alt="<?php echo esc_attr( $image4['alt'] ); ?>" />
                    <?php endif; ?>

                </div>
                <div class="infrastructureTwo-content">
                    <div class="housingThree-title">    <?php the_sub_field( 'title4_' ); ?></div>
                    <div class="housingThree-list">
                        <p class="ourCorporate-pgh"> <?php the_sub_field( 'description4' ); ?></p>
                    </div>
                </div>

            </div>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
</section>

<section id="homeTwo">
    <div class="homeTwoContainer">
        <div class="homeTwoBox">



            <?php if ( have_rows( 'fifth' ) ) : ?>
                <?php while ( have_rows( 'fifth' ) ) : the_row(); ?>




            <div class="homeTwoBox-item">
                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title">   <?php the_sub_field( 'title5_' ); ?>
                        </h1>
                        <div class="homeTwoBoxItem-pgh"> <?php the_sub_field( 'description5' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $image5 = get_sub_field( 'image5' ); ?>
                    <?php if ( $image5 ) : ?>
                        <img src="<?php echo esc_url( $image5['url'] ); ?>" alt="<?php echo esc_attr( $image5['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <?php if ( have_rows( 'sixth' ) ) : ?>
                <?php while ( have_rows( 'sixth' ) ) : the_row(); ?>




            <div class="homeTwoBox-item">
                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title6_' ); ?></h1>
                        <div class="homeTwoBoxItem-pgh">  <?php the_sub_field( 'description6' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $image6 = get_sub_field( 'image6' ); ?>
                    <?php if ( $image6 ) : ?>
                        <img src="<?php echo esc_url( $image6['url'] ); ?>" alt="<?php echo esc_attr( $image6['alt'] ); ?>" />
                    <?php endif; ?>

                </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <?php if ( have_rows( 'seventh' ) ) : ?>
                <?php while ( have_rows( 'seventh' ) ) : the_row(); ?>




            <div class="homeTwoBox-item">
                <div class="homeTwoBoxItem-content">
                    <div class="homeTwo-infoBox">
                        <h1 class="homeTwoBoxItem-title"> <?php the_sub_field( 'title7_' ); ?></h1>
                        <div class="homeTwoBoxItem-pgh">   <?php the_sub_field( 'description7' ); ?>
                        </div>
                    </div>
                </div>
                <div class="homeTwoBoxItem-image">
                    <?php $image7 = get_sub_field( 'image7' ); ?>
                    <?php if ( $image7 ) : ?>
                        <img src="<?php echo esc_url( $image7['url'] ); ?>" alt="<?php echo esc_attr( $image7['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</section>

<?php get_footer(); ?>
