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
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 

$format1 = $my_meta['format1'];
$format2 = $my_meta['format2'];
$format3 = $my_meta['format3'];
$downloadidcase = $my_meta['downloadidcase'];

$thumb_id = get_post_thumbnail_id($postid);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<?php if ( has_post_thumbnail($postid)) {
	echo '<div class="container">';
	echo '<div class="row" style="background:url('. $thumb_url .') no-repeat center center!important; background-size: cover!important; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; min-height:500px;"></div>';
	echo '</div>';
}
	?>

<div class="container margin-bottom-large " style="overflow-y:auto; height:50%;">
	<div class="row margin-bottom-large">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 show-bullets">
        <?php if ($format1 && $format2 /*&& $format3*/) {
			echo '<video width="600" class="margin-top-xlarge case-study" controls>';
			echo '<source src="'. $format1 .'" type="video/mp4">';
			echo '<source src="'. $format2 .'" type="video/ogg">';
			echo '<source src="'. $format3 .'" type="video/webm">';
			echo '</video>';
		}
		?>
            <h3 class="left-white-shadow-text margin-bottom-large"><?php echo get_the_title( $postid ); ?> </h3>
            <p class="left-white-shadow-text left-white-text margin-bottom-large"><?php echo get_post_field('post_content', $postid); ?> </p><br>
            <div class="btn read-more">
            <a class="white-text" href="index.php#case-studies" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to Case Studies</a></div>
            <div class="btn btn-download-case-study">
<?php  

if ($downloadidcase) {
	echo do_shortcode( '[sdm_download id="'.$downloadidcase.'" new_window="1"]');
}
?>
<i class="fa fa-chevron-down orange-heading " style="clear:both; padding-left:10px;"></i></div>
        </div>
        
    </div>
</div>

<?php require 'footer.php';?> 
