<?php //Template Name: Our People ?>
<?php get_header(); ?>


<section id="contactOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>Our People</h1>
                <div class="homeOneBox-pgh">Toggle panel: Theme Code
                    <?php the_field( 'page_description' ); ?>
                </div>
            </div>
        </div>
</section>

<section id="contactTwo">
    <div class="contactTwoContainer">
        <div class="pageContainer">
            <div class="contactTwoBox">




                <?php if ( have_rows( 'contact_information' ) ) : ?>
                    <?php while ( have_rows( 'contact_information' ) ) : the_row(); ?>







                <div class="contactTwoLeft">
                    <div class="contactTwoLeftBox">
                        <div class="contactTwoLeft-infoOne">
                            <h1>Contact Information</h1>
                            <p>Say something to start a live chat!</p>
                        </div>
                        <div class="contactTwoLeft-infoTwo">
                            <div>
                                <i class="fa-solid fa-phone-volume"></i>
                                <p><?php the_sub_field( 'phone' ); ?></p>
                            </div>
                            <div>
                                <i class="fa-solid fa-envelope"></i>
                                <p> <?php the_sub_field( 'email' ); ?></p>
                            </div>
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                <p> <?php the_sub_field( 'location' ); ?></p>
                            </div>
                        </div>
                        <div class="contactTwoLeft-socialIcon">
                            <a href="<?php the_sub_field( 'twitter_link' ); ?>">
                                <div>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </a>
                            <a href="<?php the_sub_field( 'instagram_link' ); ?>">
                                <div>
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                            <a href="<?php the_sub_field( 'linkedin_link' ); ?>">
                                <div>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                    <?php endwhile; ?>
                <?php endif; ?>



<?php if ( have_rows( 'about_us_membership' ) ) : ?>
	<?php while ( have_rows( 'about_us_membership' ) ) : the_row(); ?>



                <div class="contactTwoRight">
                    <h1 class="ourPeople-title"><?php the_sub_field( 'ourpeople_title' ); ?></h1>
                    <p class="ourPeople-paragraph"><?php the_sub_field( 'ourpeople_paragraph' ); ?></p>
                </div>
            </div>
        </div>
</section>

<section id="ourPeopleOne">
    <div class="pageContainer">


        <div class="cgeTwoContainer">
            <div class="cgeTwoBox">
                <div class="cgeTwoBox-content">
                    <h2>About Us</h2>
                    <h3>Memberships</h3>
                    <div class="housingThree-list">
                        	<?php the_sub_field( 'housingthree-list' ); ?>
                    </div>
                </div>
                <div class="cgeTwoBox-image">
                    <div class="cgeTwoBoxImage-left">
                      	<?php $our_people_image = get_sub_field( 'our_people_image' ); ?>
		<?php if ( $our_people_image ) : ?>
			<img src="<?php echo esc_url( $our_people_image['url'] ); ?>" alt="<?php echo esc_attr( $our_people_image['alt'] ); ?>" />
		<?php endif; ?>
                    </div>
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
                    <?php $recent_publications_colum_1 = get_sub_field( 'recent_publications_colum_1' ); ?>
		<?php if ( $recent_publications_colum_1 ) : ?>
			<?php foreach ( $recent_publications_colum_1 as $post ) :  ?>
				<?php setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
                  <?php $recent_publications_colum_2 = get_sub_field( 'recent_publications_colum_2' ); ?>
		<?php if ( $recent_publications_colum_2 ) : ?>
			<?php foreach ( $recent_publications_colum_2 as $post ) :  ?>
				<?php setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
	<?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>