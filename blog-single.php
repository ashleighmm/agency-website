<?php
/* Don't remove this line. */
require('./blog/wp-blog-header.php');
?>
<?php include 'head.php';?> 
<body class="new">
<div id="page-wrapper">
<?php include 'single-nav.php';?> 

<?php
$postid = $_GET["post_id"];
$thumb_id = get_post_thumbnail_id($postid);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
 ?>
 


<div class="container">
   <div class="row" style="background:url(<?php echo $thumb_url; ?>) no-repeat center center!important; background-size: cover!important; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; min-height:600px;">
   	
	
   </div>
</div>

<div class="container margin-bottom-large">
	<div class="row margin-bottom-large">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 show-bullets">
            <h3 class="left-white-shadow-text margin-bottom-large"><?php echo get_the_title( $postid ); ?> </h3>
            <p class="left-white-shadow-text left-white-text margin-bottom-large"><?php echo get_post_field('post_content', $postid); ?> </p>
        </div>
    </div>
</div>


<?php include 'blog-single-share.php';?>
<?php /* include 'blog-social.php'; */ ?>
