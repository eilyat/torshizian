<?php //Template Name: Article ?>
<?php get_header(); ?>


<section id="articleOne" class="bannerArticle">
    <div class="pageContainer">
        <div class="actionOneBox">
            <h1>Articles</h1>
            <h2><?php the_field( 'description' ); ?></h2>
        </div>
    </div>
</section>





<?php if ( have_rows( 'second_block' ) ) : ?>
    <section id="articleTwo">
    <div class="infrastructureTwoContainer">
        <div class="pageContainer">
    <?php while ( have_rows( 'second_block' ) ) : the_row(); ?>

                    <div class="infrastructureTwoBox">
                        <div class="infrastructureTwo-content">
                            <h1>
                                <?php the_sub_field( 'second_block_title' ); ?></h1>
                            <div class="infrastructureTwoContent-paragraph"> <?php the_sub_field( 'second_block_description' ); ?>
                            </div>

                        </div>
                        <div class="infrastructureTwo-image">
                            <?php $second_block_banner = get_sub_field( 'second_block_banner' ); ?>
                            <?php if ( $second_block_banner ) : ?>
                                <img src="<?php echo esc_url( $second_block_banner['url'] ); ?>" alt="<?php echo esc_attr( $second_block_banner['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>




    <?php endwhile; ?>
        </div>
    </div>
    </section>
<?php endif; ?>





<!--Third Block--->

<?php if ( have_rows( 'third_block' ) ) : ?>
    <section id="articleTree">
        <div class="pageContainer">
        <?php while ( have_rows( 'third_block' ) ) : the_row(); ?>

                    <div class="content">
                        <h3> <?php the_sub_field( 'third_block_title' ); ?></h3><br>
                        <p><?php the_sub_field( 'third_block_description' ); ?></p>
                    </div>





        <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>






<?php if ( have_rows( 'fourth_block' ) ) : ?>
    <section id="articleFour" class="articleFlex">
    <div class="pageContainer">
    <?php while ( have_rows( 'fourth_block' ) ) : the_row(); ?>


                <div class="container">
                    <div class="boxText">
                        <h3> <?php the_sub_field( 'fourth_block_title' ); ?></h3>

                        <p><?php the_sub_field( 'fourth_block_description' ); ?></p>
                      <!--  <p>The researchers found that a monetised benefits and costs manual (MBCM) needs to provide equity
                            estimates across various impacts and consider different scenarios. Their preferred method extended
                            the current MBCM approach to distributional analysis, providing further scenario analysis of various
                            impacts. This is a comprehensive approach using publicly available data and the current
                            mobility-based approach of the Waka Kotahi MBCM. The output measures from distributional analysis
                            can also be used in a multi-criteria analysis.</p>
                        <p>They found that distributional analysis:</p>
                        <p>
                            · gives more information to policymakers <br>
                            · can be used within the Waka Kotahi MBCM <br>
                            · is a step toward equity analysis in current CBAs <br>
                            · can be improved in the future.</p>-->
                    </div>
                    <div class="boxImg">

                        <img src="https://6229.freelancedeveloper.site/wp-content/themes/PrincipalEconomics/assets/images/literature.png"
                             alt="literature">
                    </div>
                </div>






    <?php endwhile; ?> </div>
    </section>
<?php endif; ?>



<?php if ( have_rows( 'fifth_block' ) ) : ?>    <section id="articleFive" class="articleFlex">
    <div class="pageContainer">

    <?php while ( have_rows( 'fifth_block' ) ) : the_row(); ?>

     <div class="container">
                    <div class="boxImg">
                        <?php $Fifth_block_banner = get_sub_field( 'Fifth_block_banner' ); ?>
                        <?php if ( $Fifth_block_banner ) : ?>
                            <img src="<?php echo esc_url( $Fifth_block_banner['url'] ); ?>" alt="<?php echo esc_attr( $Fifth_block_banner['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="boxText">
                        <?php the_sub_field( 'Fifth_block_description' ); ?>
                    </div>

                </div>
        <?php //the_sub_field( 'fifth_block_title' ); ?>


    <?php endwhile; ?>
    </div>
    </section>
<?php endif; ?>



<?php if ( have_rows( 'Sixth _block' ) ) : ?>
    <section id="articleSix" class="articleFlex">
    <div class="pageContainer">

    <?php while ( have_rows( 'Sixth _block' ) ) : the_row(); ?>

    <div class="container">
                    <div class="boxInfo">
                        <?php the_sub_field( 'Sixth_block_description' ); ?>

                    </div>
                    <div class="boxImg">
                        <?php $Sixth_block_banner = get_sub_field( 'Sixth _block_banner' ); ?>
                        <?php if ( $Sixth_block_banner ) : ?>
                            <img src="<?php echo esc_url( $Sixth_block_banner['url'] ); ?>" alt="<?php echo esc_attr( $Sixth_block_banner['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>


    <?php endwhile; ?>
    </div>
    </section>
<?php endif; ?>


<?php if ( have_rows( 'Seventh _block' ) ) : ?> <section id="articleSeven" class="articleFlex">
    <div class="pageContainer">
    <?php while ( have_rows( 'Seventh _block' ) ) : the_row(); ?>




                <div class="container">
                    <div class="boxText">
                        <?php the_sub_field( 'Seventh_block_description' ); ?>

                    </div>
                    <div class="boxImg">
                        <?php $Seventh_block_banner = get_sub_field( 'Seventh_block_banner' ); ?>
                        <?php if ( $Seventh_block_banner ) : ?>
                            <img src="<?php echo esc_url( $Seventh_block_banner['url'] ); ?>" alt="<?php echo esc_attr( $Seventh_block_banner['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>






    <?php endwhile; ?>
    </div>
    </section>
<?php endif; ?>



<?php get_footer(); ?>
