<?php
get_header();
?>

<?php
if ( have_posts() ):
    // Yep, we have posts, so let's loop through them.
    while ( have_posts() ) : the_post();

    endwhile;
    ?>
    <section id="contactOne">
        <div class="pageContainer">
            <div class="infrastructureOneContainer">
                <div class="homeOneBox">
                    <h1>Our People</h1>
                    <div class="homeOneBox-pgh"> <?php dynamic_sidebar( 'member-themplate' ); ?>
                    </div>
                </div>
            </div>
    </section>


    <section id="ourPeople-member">
        <div class="pageContainer">
            <div class="memberContainer">
                <div class="memberBox">
                    <div class="memberBox-left">
                        <div class="memberBox-leftOne">
                            <div class="memberBox-image">
                                <?php $image = get_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>


                            </div>
                            <div class="memberBox-name">
                                <h3>Contact Information <?=the_title();?></h3>
                                <p><?php the_field( 'position' ); ?></p>
                            </div>
                        </div>
                        <div class="memberBox-leftTwo">
                            <div class="contactTwoLeft-infoTwo">
                                <div>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <p><?php the_field( 'phone' ); ?></p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-envelope"></i>
                                    <p><?php the_field( 'email' ); ?></p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p><?php the_field( 'scientific_degree' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="memberBox-right">
                        <h1 class="memberBoxRight-title"><?php the_field( 'First description' ); ?></h1>
                        <p class="memberBoxRight-pgh"><?php the_field( 'Second description' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="ourPeopleTwo">
        <div class="pageContainer">
            <div class="cgeTwoContainer">
                <h1>Recent publications</h1>
                <div class="cgeTwoBox">
                    <div class="cgeTwoBox-content">
                        <ul>
                            <?php


                            $post_report = get_field( 'report');?>




                                <?php //setup_postdata( $post );
                                    foreach ($post_report as $report)   {
                                        $report_title = $report->post_title;
                                        $report_guid= $report->guid;
                             /*           echo "<pre>";
                                        print_r($report);
                                        echo "</pre>";

                                        */?>

                                        <li> <a href="<?=$report_guid; ?>"><?=$report_title?></a> </li>
                                 <?php } ?>








                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_footer();
