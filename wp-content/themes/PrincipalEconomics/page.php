<?php
get_header();

if ( have_posts() ):
    // Yep, we have posts, so let's loop through them.
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;


endif;
get_footer();