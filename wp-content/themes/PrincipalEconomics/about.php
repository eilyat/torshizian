<?php //Template Name: About ?>
<?php get_header(); ?>


<section id="aboutOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>About Us</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'about_description' ); ?></div>
            </div>
        </div>
</section>


<section id="aboutTwo">
    <div class="pageContainer">
        <div class="aboutTwoContainer">
            <div class="aboutTwoBox">
                <div class="aboutTwoBox-left">
                    <h4>About Us</h4>
                    <p><?php the_field( 'about_content_left' ); ?></p>
                </div>
                <div class="aboutTwoBox-right">
                    <p><?php the_field( 'about_content_right' ); ?></p>
                </div>
            </div>
            <div class="aboutThreeBox">
                <div class="aboutThreeBox-item">
                    <h2><?php the_field( 'about_threebox_item1_title' ); ?></h2>
                    <p><?php the_field( 'about_threebox_item1_description' ); ?>
                    </p>
                </div>
                <div class="aboutThreeBox-item">
                    <h2><?php the_field( 'aboutthreebox_item2_title' ); ?></h2>
                    <p><?php the_field( 'aboutthreebox_item2_description' ); ?> </p>
                </div>
                <div class="aboutThreeBox-item">
                    <h2><?php the_field( 'aboutthreebox_item_3' ); ?>
                    </h2>
                    <p><?php the_field( 'aboutthreebox_item_description' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


