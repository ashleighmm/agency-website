<?php
/* Don't remove this line. */
require('./blog/wp-blog-header.php');
?>
<?php include 'head.php';?>
<body class="black-bg">
<?php include 'single-nav.php';?>
<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 

$downloadid = $my_meta['downloadid'];

$thumb_id = get_post_thumbnail_id($postid);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

?>
<div class="video-wrapper" style="position:absolute;background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;min-height:100%;">

<div class="container-fluid toggle-panel-resource ">
  <div class="collapse in">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h3 class="left-white-shadow-text margin-bottom-large"><?php echo get_the_title( $postid ); ?> </h3>
      <div class="columns">
        <p class="left-white-shadow-text left-white-text margin-bottom-large "><?php echo strip_tags(get_post_field('post_content', $postid)); ?> </p>
        <div class="btn read-more" data-toggle="modal" data-target="#modal-1">download full article <i class="fa fa-chevron-down orange-heading"></i></div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- the modal id matches the data-target above -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode( '[contact-form-7 id="5108" title="Resource Download"]'); 
		echo do_shortcode( '[sdm_download id="'.$downloadid.'" new_window="1"]');
        ?>
        
        <!--<form class="form-horizontal" id="form_members" role="form" action="send_formdata_members.php" method="POST">
              
              <div class="form-group">
                <label for="firstname" class="col-sm-3">First Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" data-bv-notempty data-bv-notempty-message="You're required to fill in a first name!" required>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3">Email</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-bv-notempty data-bv-notempty-message="You're required to fill in an email address!" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-8 col-sm-2">
                  <button type="submit" class="btn btn-contact" name="submit" id="submit">Subsrcibe</button>
                </div>
               
              </div>
            </form>--> 
      </div>
      <!--end modal-body--> 
    </div>
    <!--end modal-content--> 
  </div>
  <!--end modal-dialog--> 
</div>
<!--end modal-->
<div id="download-link">
ofveofv
<?php 

	echo do_shortcode( '[sdm_download id="'.$downloadid.'" new_window="1"]');
	echo $downloadid;

?>
</div>

<?php require 'footer.php';?>
