<?php
/**
 * Page Template
 */


get_header();
?>

<?php

if ( have_posts() ) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;

if( is_page('Sitemap') ):
    get_template_part( 'content', 'sitemap' );
endif;

get_footer();
