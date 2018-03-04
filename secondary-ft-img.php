<?php /* Fetch the post ID for each post */
$postid = get_the_ID();
if (class_exists('MultiPostThumbnails')) : 
$main_url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image', NULL,  'secondary-featured-thumbnail');
endif;?>    