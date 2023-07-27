<?php
get_header();
?>
<div class="container">



    <div class="publicationsSingle">

        <div class="publicationsSingleContainer">
            <div class="pageContainer">
                <div class="publicationsSingle-title">
                    <h1>Great decisions are timely: Benefits from more efficient infrastructure investment
                        decision-making</h1>
                </div>
            </div>
            <div class="publicationsSingle-Box">
                <div class="pageContainer">
                    <div class="publicationsSingle-bg">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/publicationsSingle.png' ?>"
                             alt="image" srcset="">
                    </div>
                    <div class="publicationsSinglePost">
                        <div class="publicationsSinglePost-people">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/publicationsPeople.png' ?>"
                                 alt="image" srcset="">
                        </div>
                        <div class="publicationsSinglePost-info">
                            <h5 class="publicationsSinglePost-titleOne">Eilya Torshizian and Milad Maralani of Principal
                                Economics</h5>
                            <p class="publicationsSinglePost-pghOne">Aotearoa New Zealand suffers from an infrastructure
                                deficit. Without the key infrastructure
                                needed now for our economy to thrive, we deprive future generations from significant
                                economic
                                prosperity. While transformational infrastructure projects necessitate time to be developed
                                into
                                sound technical solutions to our needs, many New Zealand projects are further delayed by
                                policy
                                decision and financing constraints.
                                </br>
                                </br>
                                In this novel application of the infrastructure Wider Economic Benefits approach, we
                                quantify
                                the cost to society of these further delays for the first time, by using the example of the
                                Waikato Expressway. We used our subregional CGE model to estimate the downstream benefits of
                                the
                                Expressway. At a high-level, results of our analysis quantify the annual benefits of having
                                the
                                Waikato Expressway in the economy. Without the expressway in function as early as possible,
                                $334
                                million of economic benefits were forgone each year.
                            </p>
                            <p class="publicationsSinglePost-readMore">Read the report <a href="#">here</a>.</p>

                            <h3 class="publicationsSinglePost-titleTwo">Cite this article</h3>
                            <p class="publicationsSinglePost-pghTwo">
                                Principal Economics. (2022). Great decisions are timely: Benefits from more efficient
                                infrastructure investment decision-making. Report to Infrastructure New Zealand.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
if ( have_posts() ):
    // Yep, we have posts, so let's loop through them.
    while ( have_posts() ) : the_post();
    the_title();
    the_content();
    the_post();
    endwhile;

?>
    </div>

<?php
endif;
get_footer();
