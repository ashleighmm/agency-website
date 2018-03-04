<?php
/* Fetch the post ID for each post */
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
$thumb_url = $thumb_url_array[0];
/* Fetch the post ID for each post */
$postid = get_the_ID(); 

?>