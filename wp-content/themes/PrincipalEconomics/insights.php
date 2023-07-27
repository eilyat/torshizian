<?php //Template Name: Insights ?>
<?php get_header(); ?>
<style>
    /**
 * Fonts
 */

    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    /**
     * Reset
     */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        padding: 0;
        margin: 0;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
    }

    body {
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        padding: 0;
        margin: 0;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        background-color: #e5e5e5;
        color: #1a1a1a;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1rem;
        line-height: 1.6;
    }

    p,
    ol,
    ul,
    li,
    dl,
    dt,
    dd,
    blockquote,
    figure,
    fieldset,
    form,
    legend,
    textarea,
    pre,
    iframe,
    hr,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        padding: 0;
        margin: 0;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
    }

    /**
     * Global Rules
     */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #0d0d0d;
        font-family: Roboto, sans-serif;
        line-height: 1.2;
    }

    h1 {
        font-size: 40px;
    }

    h2 {
        font-size: 35px;
    }

    a,
    a:visited {
        background-color: transparent;
        color: #0067b8;
        text-decoration: none;
        border-bottom: 1px dotted;
    }

    a:hover,
    a:active {
        border-bottom: none;
        outline: 0;
    }

    a:focus {
        border-bottom: none;
        outline: thin dotted;
    }

    a img {
        border: 0;
    }

    footer {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 2rem;
    }

    footer .credits {
        font-size: 1rem;
    }

    /**
     * Tabs Container
     */
    .tabs-container {
        padding: 2rem;
    }

    /**
     * Tabs Block
     */
    .tabs-block {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /**
     * Tabs
     */
    .tabs {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    .tabs label {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2rem;
        margin-right: 0.0625rem;
        cursor: pointer;
        background-color: #000;
        color: #fff;
        font-family: Roboto, sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        transition: background-color ease 0.3s;
    }

    .tabs label .material-icons {
        margin-right: 0.3rem;
    }

    .tabs .tab {
        flex-grow: 1;
        width: 100%;
        height: 100%;
        display: none;
        padding: 1rem 2rem;
        color: #000;
        background-color: #fff;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    }

    .tabs .tab > *:not(:last-child) {
        margin-bottom: 0.8rem;
    }

    .tabs [type=radio] {
        display: none;
    }

    .tabs [type=radio]:checked + label {
        background-color: #fff;
        color: #0067b8;
        border-top: 4px solid #0067b8;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
    }

    .tabs [type=radio]:checked + label + .tab {
        display: block;
    }
    @media (min-width: 768px) {

        body {
            font-size: 1.125rem;
        }

        .tabs-container {
            padding: 4rem 4rem;
        }

        .tabs label {
            order: 1;
            width: auto;
        }



        .tabs [type=radio]:checked + label {
            border-bottom: none;
        }
    }
    @media (min-width: 992px) {

        .tabs {
            width: 800px;
        }
    }


</style>
<section id="insightsOne">
    <div class="pageContainer">
        <div class="infrastructureOneContainer">
            <div class="homeOneBox">
                <h1>Insights</h1>
                <div class="homeOneBox-pgh"><?php the_field( 'description' ); ?>
                </div>
            </div>
        </div>
</section>





<style>
    .insightsTwoButton.tab-button{margin-right: 20px;}
    .tab-button p{
        float: right;
    }
    .insightsCheckbox-item button{
        background: transparent!important;
        width: 100%;
        text-align: LEFT;
        border: none;
        color: #000!important;
    }
    .tabs {
        display: flex!important;


    }



    body{
        overflow-x:hidden ;
    }

    .tab-button {
        background-color: #f1f1f1;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    input[type=checkbox] {

        accent-color: #1072ba;
        height: 30px; /* not needed */
        width:30px; /* not needed */
    }

    .insightsCheckbox-item div{
        width: 100%;
    }
    .tab-button:hover {
        background-color: #ddd;
    }

    .tab-button.active {
        background-color: #1072ba;
        color:#fff;
    }

    .tab-content {
        display: none;
        padding: 20px;
    }

    .tab-content.active {
        display: block;
    }

</style>
<script>




    function openTab(event, tabName) {

        var i, tabContent, tabButton;
        var checkboxesList = document.getElementsByClassName("checkoption");

        tabContent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        tabButton = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabButton.length; i++) {
            tabButton[i].className = tabButton[i].className.replace(" active", "");
        }





/*
        for (var i = 0; i < checkboxesList.length; i++) {
            checkboxesList.item(i).checked = false; // Uncheck all checkboxes
        }

        event.currentTarget.checked = true; // Checked clicked checkbox*/
        document.getElementById(tabName).style.display = "block";
        //event.currentTarget.className += " active";




    }
</script>

<section id="insightsTwo">
    <div class="pageContainer">
        <div class="insightsTwoContainer">
            <div class="insightsTwoBox">
                <div class="insightsTwo-buttons">
                    <div class="tabs">
                    <button class="insightsTwoButton tab-button active" onclick="openTab(event, 'tab1')">Articles</button>
                    <button  class="tab-button" onclick="openTab(event, 'tab2')">Knowledge Hub</button>
                    <button class="tab-button" onclick="openTab(event, 'tab3')">Publications</button>
                </div>

                </div>
                <div class="insightsTwo-search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div>

                    <input type="search" placeholder="What are you looking for?" value="" name="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                </form>
                </div>
            </div>
            <div class="insightsTwo-searchResult">
                <p>Search gave <span>34 results Articles</span></p>
            </div>
        </div>
    </div>
</section>

<section id="insightsThree">
    <div class="pageContainer">
        <div class="insightsThreeContainer">
            <div class="insightsThreeBox">
                <div class="insightsThree-categories">
                    <div class="insightsCategories-item">
                        <div class="insightsCategories-title">
                            <p>Content Type</p>
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="insightsCategories-checkbox">
                            <div class="insightsCheckbox-item">


                                        <input type="checkbox"  name="checkboxGroup"  id="Articles" class="insightsTwoButton-active tab-button checkoption active" onclick="openTab(event, 'tab1')" id="" name="" value="">
                                        <div class="for_margins"> Articles</div>
                                        <p>
                                            <?php
                                            $post_args=array(
                                                'category_name'=>'articles',
                                                //  'post_type'=>'street-food'
                                            );
                                            $numberOfPosts=get_posts($post_args);
                                            echo "(".count($numberOfPosts).")";
                                            ?></p>




                            </div>
                            <div class="insightsCheckbox-item">
                                <div>

                                    <input type="checkbox"  name="checkboxGroup"  class="tab-button checkoption" onclick="openTab(event, 'tab2')" id="" name="" value="">
                                    <div class="for_margins">Knowledge Hub</div>
                                        <p>
                                            <?php
                                            $post_args=array(
                                                'category_name'=>'knowledge-hub',
                                                //  'post_type'=>'street-food'
                                            );
                                            $numberOfPosts=get_posts($post_args);
                                            echo "(".count($numberOfPosts).")";
                                            ?></p>

                                </div>

                            </div>
                            <div class="insightsCheckbox-item">


                                        <input type="checkbox" id=""  name="checkboxGroup"  value="" class="checkoption tab-button" onclick="openTab(event, 'tab3')">
                                    <div class="for_margins"> Publications</div>
                                        <p>
                                            <?php
                                            $post_args=array(
                                                'category_name'=>'publications',
                                                //  'post_type'=>'street-food'
                                            );
                                            $numberOfPosts=get_posts($post_args);
                                            echo "(".count($numberOfPosts).")";
                                            ?></p>




                            </div>
                        </div>
                    </div>

                </div>









                    <div id="tab1" class=" parrent-1 tab-content active">
                        <div class="for_flex">
       <?php
                $args = array(
                    'category_name'=>'articles',
                    'posts_per_page' => -1,
                );

                $custom_query = new WP_Query($args);
                ?>

                <?php
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>






                                            <div class="insightsThree-post">

                                           <div class="insightsThreePost-item">
                                                    <div class="insightsThreeItem-image">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>
                                                    <div class="insightsThreeItem-info">
                                                        <p class="insightsThreeItem-pghOne">Articles</p>
                                                        <h1 class="insightsThreeItem-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                                                        <p class="insightsThreeItem-pghTwo"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                                                    </div>
                                                </div>

                                            </div>





                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p>No publications found.</p>';
                                    endif;
                                    ?>



                    </div>
            </div>



                        <div  id="tab2" class="parrent-2 tab-content">
                            <div class="for_flex">
       <?php
                $args = array(
                    'category_name'=>'knowledge-hub',
                    'posts_per_page' => -1,
                );

                $custom_query = new WP_Query($args);
                ?>

                <?php
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>







                          <div class="insightsThree-post">

                                               <div class="insightsThreePost-item">
                                                        <div class="insightsThreeItem-image">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="insightsThreeItem-info">
                                                            <p class="insightsThreeItem-pghOne">Knowledge Hub</p>
                                                            <h1 class="insightsThreeItem-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                                                            <p class="insightsThreeItem-pghTwo"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                                                        </div>
                                                    </div>

                                                </div>





                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        else :
                                            echo '<p>No publications found.</p>';
                                        endif;
                                        ?>



                            </div>

                        </div>




                        <div  id="tab3" class="parrent-3 tab-content">
                            <div class="for_flex">
                            <?php
                            $args = array(
                                'category_name'=>'publications',
                                'posts_per_page' => -1,
                            );

                            $custom_query = new WP_Query($args);
                            ?>

                            <?php
                            if ($custom_query->have_posts()) :
                                while ($custom_query->have_posts()) : $custom_query->the_post();
                                    ?>







                                    <div class="insightsThree-post">

                                               <div class="insightsThreePost-item">
                                                        <div class="insightsThreeItem-image">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="insightsThreeItem-info">
                                                            <p class="insightsThreeItem-pghOne">Publications</p>
                                                            <h1 class="insightsThreeItem-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                                                            <p class="insightsThreeItem-pghTwo"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                                                        </div>
                                                    </div>

                                                </div>





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
    </div>
</section>

<section id="insightsFour">
    <div class="pageContainer">
        <div class="insightsFourContainer">
            <div class="insightsFourBox">
                <div class="insightsFourPagination">
                    <div class="insightsPagination-icon">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="insightsPagination-item">
                        <div>
                            <p>1</p>
                        </div>
                        <div>
                            <p>2</p>
                        </div>
                        <div>
                            <p>...</p>
                        </div>
                        <div>
                            <p>9</p>
                        </div>
                        <div>
                            <p>10</p>
                        </div>
                    </div>
                    <div class="insightsPagination-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

