<?php //Template Name: Public ?>
<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'publication',
    'posts_per_page' => -1,
);

$custom_query = new WP_Query($args);
?>

<section id="insightsOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>Publications</h1>
                <div class="homeOneBox-pgh">Robust economic frameworks and empirical methods, informed by evidence</div>
            </div>
        </div>
</section>

<section id="publicationsOne">
    <div class="pageContainer">
        <div class="publicationsOneContainer">
            <div class="publicationsOneBox">
                <div class="publicationsOne-image">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/publicationOne.png' ?>"
                         alt="image" srcset="">
                </div>
                <div class="publicationsOne-content">
                    <div class="insightsThreeItem-info">
                        <p class="insightsThreeItem-pghOne">Eilya Torshizian, Eugene Isack and Alina Fehling </p>
                        <h1 class="insightsThreeItem-title">Climate change adaptation and investment decision
                            making</h1>
                        <p class="insightsThreeItem-pghTwo">Avoid costly delays in decision-making. For deep
                            uncertainty, plan ahead, start small, and keep monitoring. Climate is beginning to
                            exacerbate extreme “one-in-100-year” events. Our knowledge of the likelihood of these
                            large-impact events happening in shorter intervals is limited.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="publicationsTwo">
    <div class="pageContainer">
        <div class="insightsThreeContainer">
            <div class="insightsThreeBox">
                <div class="insightsThree-post">
                    <?php
                    if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                            ?>
                            <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="insightsThreePost-item">
                                        <div class="insightsThreeItem-image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="insightsThreeItem-info">
                                            <?php
                                            $repeater_content = get_field('publications_people');
                                            if ($repeater_content) {
                                                foreach ($repeater_content as $repeater_content_text) {
                                                    $repeater_content_pgh = $repeater_content_text['publications_people_name'];
                                                    ?>
                                                    <p class="insightsThreeItem-pghOne"><?php echo $repeater_content_pgh ?></p>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <h1 class="insightsThreeItem-title"><?php the_title(); ?></h1>
                                            <div class="insightsThreeItem-pghTwo"><?php the_content(); ?></div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No publications found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>




