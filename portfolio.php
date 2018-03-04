<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 
$contactid = $my_meta['contactid'];
$downloadid = $my_meta['downloadid'];
?>
<section id="portfolio">
<div class="header-break">
	<h1 class="white-shadow-text">Portfolio <span class="red"></span></h1>
</div>
  <div  class="carousel slide"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner grey-bg" role="listbox">
      <div class="item active"> 
        <!-- Background wrapper: -->
        <div class="bg-wrapper grey-bg">
         <?php $catquery = new WP_Query( array( 'post_type' => 'portfoliosz', 'posts_per_page' => 5)); 
                                        if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
             <?php
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                        $thumb_url = $thumb_url_array[0];
                                        /* Fetch the post ID for each post */
                                        $postid = get_the_ID(); 
                                        $my_meta = get_post_meta($postid,'_my_meta',TRUE);?>
              <?php if (class_exists('MultiPostThumbnails')
                             && MultiPostThumbnails::has_post_thumbnail('portfoliosz', 'feature-image-2')) :
                             MultiPostThumbnails::the_post_thumbnail('portfoliosz', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
             <a href="portfolio-single.php?post_id=<?php echo $postid ?>">
              <div class="overlay">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                <p class="white-shadow-text white-text">client: <?php echo $client = $my_meta['client']; ?></p>
                <div class="btn read-more" >View</div> </div>
                </a>
            </div>
          </div>
           <?php  endwhile; endif;?>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
              <img src="images/Portfolio01.png" class="img-responsive"/>
               <a href="portfolio-archive.php"><div class="overlay">
                <h3 class="white-shadow-text">Portfolio Archive</h3>
                <div class="btn read-more" >View</div> 
                </div></a> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Left and right controls 
        <a class="left carousel-control back" href="#myCarousel5" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control forw" href="#myCarousel5" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>--> 
  </div>
</section>
