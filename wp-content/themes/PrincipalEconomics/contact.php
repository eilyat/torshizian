<?php //Template Name: Contact ?>
<?php get_header(); ?>


<section id="contactOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>Contact Us</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
</section>

<section id="contactTwo">
    <div class="contactTwoContainer">
        <div class="pageContainer">
            <div class="contactTwoBox">
                <div class="contactTwoLeft">
                    <div class="contactTwoLeftBox">
                        <div class="contactTwoLeft-infoOne">
                            <h1>Contact Information</h1>
                            <p><?php the_field( 'contact_information_description' ); ?></p>
                        </div>
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
                                <p><?php the_field( 'location' ); ?></p>
                            </div>
                        </div>
                        <div class="contactTwoLeft-socialIcon">
                            <a href="<?php the_field( 'twitter' ); ?>">
                                <div>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </a>
                            <a href="<?php the_field( 'instagram' ); ?>">
                                <div>
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                            <a href="<?php the_field( 'linkedin' ); ?>">
                                <div>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contactTwoRight">
                    <?php echo do_shortcode('[contact-form-7 id="75" title="Contact Form General"]') ?>
                </div>
            </div>
        </div>
</section>


<?php get_footer(); ?>