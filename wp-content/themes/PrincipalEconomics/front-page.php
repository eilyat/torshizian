<?php get_header(); ?>


<!-- Home One -->
<section id="animationHomeOne">
    <section style="overflow: hidden;position: relative;width: 100%;height: 100vh;">
        <svg
                id="flatlinesCenter"
                viewBox="0 0 3200 1800"
                preserveAspectRatio="xMidYMid slice"
                aria-hidden="true"></svg>
    </section>
    <div class="homeOne-info">
        <h1>Principal Economics</h1>
        <p>Informed decision making in times of uncertainty</p>
    </div>
</section>

<section id="homeSix">
    <div class="pageContainer">
        <div class="homeSixContainer">
            <div class="homeSixBox">
                <div class="homeSix-title">
                    <h1>TRENDING </br>
                        INSIGHTS</h1>
                </div>
                <div class="homeSixBox-item">
                    <div class="homeSixBoxItem-col">
                        <div class="homeSixBoxItem-number">
                            <h2>1</h2>
                        </div>
                        <div class="homeSixBoxItem-text">
                            <p>Lorem ipsum dolor sit amet consectetur.
                                Diam nulla faucibus blandit cursus libero
                                tortor sapien posuere.</p>
                        </div>
                    </div>
                    <div class="homeSixBoxItem-col">
                        <div class="homeSixBoxItem-number">
                            <h2>2</h2>
                        </div>
                        <div class="homeSixBoxItem-text">
                            <p>Lorem ipsum dolor sit amet consectetur.
                                Diam nulla faucibus blandit cursus libero
                                tortor sapien posuere.</p>
                        </div>
                    </div>
                    <div class="homeSixBoxItem-col">
                        <div class="homeSixBoxItem-number">
                            <h2>3</h2>
                        </div>
                        <div class="homeSixBoxItem-text">
                            <p>Lorem ipsum dolor sit amet consectetur.
                                Diam nulla faucibus blandit cursus libero
                                tortor sapien posuere.</p>
                        </div>
                    </div>
                    <div class="homeSixBoxItem-col">
                        <div class="homeSixBoxItem-number">
                            <h2>4</h2>
                        </div>
                        <div class="homeSixBoxItem-text">
                            <p>Lorem ipsum dolor sit amet consectetur.
                                Diam nulla faucibus blandit cursus libero
                                tortor sapien posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Home Two -->
<section id="homeTwo">
    <div class="homeTwoContainer">
        <div class="homeTwoBox">
            <?php
            global $post;
            $args = array(
                "numberposts" => 3,
                "post_type" => 'post',
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post) { ?>
                <div class="homeTwoBox-item">
                    <div class="homeTwoBoxItem-content">
                        <div class="homeTwo-infoBox">
                            <h1 class="homeTwoBoxItem-title"><?php echo the_title(); ?></h1>
                            <div class="homeTwoBoxItem-pgh"><?php the_excerpt(); ?></div>
                            <div class="homeTwoBoxItem-date">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/calendarIcon.png' ?>"
                                     alt="Calendar Icon" srcset="">
                                <span><?php the_time('j F Y'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="homeTwoBoxItem-image">
                        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="homeTwoBox-button">
        <button>All News</button>
    </div>
</section>

<!-- Home Three -->
<section id="homeThree">
    <div class="homeThreeContainer">
        <div class="homeThreeBox">
            <div class="homeThreeBox-imageContent">
                <div class="homeThreeBoxImageBox">
                    <h1 class="homeThreeBox-title">What We Do</h1>
                    <p class="homeThreeBox-pgh">At Principal Economics we help our clients to find practical robust
                        solutions in a timely manner by prioritising clients’ problem, using economic thinking and our
                        familiarity with a wide range of data and frontier methodologies.</p>
                    <button class="homeThreeBox-button">SEE MORE</button>
                </div>
            </div>
            <div class="homeThreeBox-paragraph">
                <div class="homeThreeBoxPgh-text">
                    <p>Spatial analysis and modelling</p>
                </div>
                <div class="homeThreeBoxPgh-text">
                    <p>Economic impact analysis</p>
                </div>
                <div class="homeThreeBoxPgh-text">
                    <p>Economic research</p>
                </div>
                <div class="homeThreeBoxPgh-text">
                    <p>Market analysisg</p>
                </div>
                <div class="homeThreeBoxPgh-text">
                    <p>Macroeconomics consulting</p>
                </div>
                <div class="homeThreeBoxPgh-text">
                    <p>Cost benefit analysis</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Home Four -->
<section id="homeFour">
    <div class="homeFourContainer">
        <div class="homeFourBox">
            <div class="homeFourContent">
                <h1 class="homeFourContent-title">Subscribe to Our Newsletter</h1>
                <p class="homeFourContent-pgh">Get weekly update about our product on your email, no spam guaranteed we
                    promise</p>
            </div>
            <div class="homeFourForm">
                <?php echo do_shortcode('[mc4wp_form id=44]') ?>
            </div>
        </div>
    </div>
    <div id="animationFour">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://lottie.host/c6d6719c-3a68-4e11-b2f8-7f3ab1a3eb4d/6dvbEdm8RQ.json"
                       background="transparent" speed="0.5" style="width: 100%; height: 100%;" loop
                       autoplay class="animationFour-lottie"></lottie-player>

    </div>
</section>

<!-- Home Five -->
<section id="homeFive">
    <div class="homeFourContainer">
        <div class="homeFourBox">
            <div class="homeFourContent">
                <div class="homeTwoBoxItem-date">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/timeIcon.png' ?>"
                         alt="Calendar Icon"
                         srcset="">
                    <span>Sep 25, 2023</span>
                </div>
                <div class="homeTwoBoxItem-date">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/locationIcon.png' ?>"
                         alt="Location Icon"
                         srcset="">
                    <span>Duane Reade, John Street</span>
                </div>
                <h1 class="homeFiveContent-title">Digital marketing 2023</h1>
                <p class="homeFiveContent-pgh">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas et ultrices massa</p>
            </div>
            <div class="homeFiveForm">
                <h1>Register Event</h1>
                <?php echo do_shortcode('[contact-form-7 id="43" title="Principal Economics Contact"]') ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

