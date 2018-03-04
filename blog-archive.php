<?php
/* Don't remove this line. */
require('./blog/wp-blog-header.php');
?>
<?php include 'head.php';?>
<body class="new">
<?php include 'single-nav.php';?>
<?php $catquery = new WP_Query( array( 'post_type' => 'blogs'));
$postid = $_GET["post_id"];
?>
<div class="container container-full">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="margin-top-xlarge"><span class="orange-heading">Blogs</span><br>
      <br>
    </h1>
  </div>
</div>
<div class="container fill  paddingnone">
    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 video_case padding-25">
    <?php
		if (($postid) == '') {
			$query = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1)); ?>
	 <?php if (have_posts()): while($query->have_posts()) : $query->the_post();  
	 $postid = get_the_ID();  
	 ?>
      <h3 class="dark-heading"><?php echo get_the_title( ); ?></h3>
      <p class="dark-heading"><?php echo get_post_field('post_content'); ?> </p>
      <a href="blog-single.php?post_id=<?php echo $postid ?>" class="btn read-more">View More</a>
      <?php endwhile; endif; }
	  else {
		  $postid = $_GET["post_id"]; ?>
		  <h3 class="dark-heading"><?php echo get_the_title( $postid ); ?> </h3>
      	<p class="dark-heading"><?php echo get_post_field('post_content', $postid); ?> </p>
        <a href="blog-single.php?post_id=<?php echo $postid ?>" class="btn read-more">View More</a>
	 <?php  }
	   ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 paddingnone fill-black">
      <?php if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  
				$postid = get_the_ID();   ?>
      <?php include 'secondary-ft-img.php';?>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 paddingnone">
         <?php if (class_exists('MultiPostThumbnails')
                             && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
                             MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
          <div class="case-study"> <a href="blog-archive.php?post_id=<?php echo $postid ?>">
            <div class="overlay">
              <p class="white-shadow-text"><?php echo the_title();?></p>
            </div>
            </a> </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
</div>
<script src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
<script type="text/javascript" src="assets/slick/slick.min.js"></script>
</body>
</html>