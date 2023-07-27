<?php
get_header();
?>



    <div id="hero" class="hero-image hero-image-setheight"
         style="background-image: url('https://www.principaleconomics.com/images/team.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-blend-mode: overlay;
    background-color: #0072b9;
    height: 400px;
    position: relative;
    padding-top: 60px;">
        <div class="container ">
            <div class="hero-text">



                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
    <section id="ourPeople-member">
        <div class="pageContainer">
            <div class="memberContainer">
                <div class="memberBox">
                    <div class="memberBox-left">

                        <div class="memberBoxRight-pgh">
                            <h1 class="homeTwoBoxItem-title"><?php the_title();?></h1>
                            <?php $read_report = get_field( 'read_report' ); ?>
                            <?php if ( $read_report ) : ?>


                            <div class="homeTwoBoxItem-pgh" >
                                <p style="margin:0px;padding:0px;">Read our report   <a href="<?php echo esc_url( $read_report['url'] ); ?>" target="_blank">here</a>.</p>
                            </div>
                            <?php endif; ?>
                            <?php $print_friendly_version_ = get_field( 'print-friendly_version_' ); ?>
                            <?php if ( $print_friendly_version_ ) : ?>

                            <div class="homeTwoBoxItem-pgh">
                                <p style="margin:0px;padding:0px;">Print-friendly version can be downloaded <a href="<?php echo esc_url( $print_friendly_version_['url'] ); ?>" target="_blank">here</a>.</p>
                            </div>


                            <?php endif; ?>
                            <div class="homeTwoBoxItem-pgh">  <?php the_content();?></div>
                        </div>
                    </div>
                    <div class="memberBox-right">





                    <?php $report_image_link = get_field( 'report_image_link' ); ?>



                        <?php $report_image = get_field( 'report_image' ); ?>
                        <?php if ( $report_image ) : ?>

                        <a href="<?php echo esc_url( $report_image_link['url'] ); ?>" target="<?php echo esc_attr( $report_image_link['target'] ); ?>">

                            <img src="<?php echo esc_url( $report_image['url'] ); ?>" alt="<?php echo esc_attr( $report_image['alt'] ); ?>" />

                            </a>

                        <?php endif; ?>


                        
                    </div>
                </div>



            </div>
        </div>
    </section>
<?php
get_footer();
