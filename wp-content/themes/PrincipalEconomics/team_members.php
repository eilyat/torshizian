<?php
get_header();
?>
    <div class="container">team_member
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
