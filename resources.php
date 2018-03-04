<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 
$contactid = $my_meta['contactid'];
$downloadid = $my_meta['downloadid'];
?>
<section id="resources">
<div class="header-break">
	<h1 class="white-shadow-text">Resources <span class="red"></span></h1>
</div>
  <div  class="carousel slide"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      
    	<div class="item active">
        <div class="bg-wrapper">
         <?php $catquery = new WP_Query( array( 'post_type' => 'resources', 'posts_per_page' => 5)); ?>
				<?php /*$catquery = new WP_Query( 'cat=14&posts_per_page=1' );*/
                if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  
				$postid = get_the_ID();  ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
           
				<?php /*include 'secondary-ft-img.php';*/?>
                
                                
				<?php if (class_exists('MultiPostThumbnails')
                             && MultiPostThumbnails::has_post_thumbnail('resources', 'feature-image-2')) :
                             MultiPostThumbnails::the_post_thumbnail('resources', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
              
				<a href="resources-single.php?post_id=<?php echo $postid ?>">
              <div class="overlay">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                
                <div class="btn read-more" >View</div> </div></a>
                  <?php wp_reset_query(); ?>
            </div>
          </div>
          
          <?php  endwhile; endif;?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
            <img src="images/Resources01.png" class="img-responsive"/>
              <a href="resources-archive.php"><div class="overlay"> 
                <h3 class="white-shadow-text">Resource Library Archive</h3>
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
