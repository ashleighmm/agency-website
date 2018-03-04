<?php
/* Don't remove this line. */
require('./blog/wp-blog-header.php');
session_start();
?>
<?php include 'head.php';?>
<body class="black-bg">
<?php include 'single-nav.php';?>
<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 
$thumb_id = get_post_thumbnail_id($postid);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
$contactid = $my_meta['contactid'];
$downloadid = $my_meta['downloadid'];
$downloadlink = $my_meta['downloadlink'];
?>
<div class="video-wrapper" style="position:absolute;background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;min-height:100%;"></div>
<div class="container-fluid toggle-panel-resource ">
  <div class="collapse in">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h3 class="left-white-shadow-text margin-bottom-large">Thanks for downloading!</h3>
      
    </div>
  </div>
</div>

<!-- the modal id matches the data-target above -->
<div class="modal " id="modalbitch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="col-sm-offset-1 col-sm-10 paddingnone" style="padding-top:0;">
            <h3 class="orange-heading">best marketing tips you need to know.</h3>
            <p class="left-white-shadow-text left-white-text">enter your name and email address to download</p>
          </div>
      </div>
      <!--end modal-content--> 
    </div>
    <!--end modal-dialog--> 
  </div>
</div>


<?php require 'footer.php';?>
