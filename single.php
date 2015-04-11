<?php
get_header();

$post_type = get_post_type();

get_template_part( 'content', $post_type );

get_footer();
