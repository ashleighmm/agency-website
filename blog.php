<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 
?>

<section id="blog">
<div class="header-break">
	<h1 class="white-shadow-text">Blog <span class="red"></span></h1>
</div>
  <div id="myCarousel4" class="carousel slide" data-ride="carousel" data-interval="false"> 
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    	<div class="item active">
        <div class="bg-wrapper ">
        
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
				<?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1)); 
                if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
				 <?php
				$postid = get_the_ID();  
				?>      
				<?php if (class_exists('MultiPostThumbnails')
				 && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
				 MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
                
              <div class="overlay" data-target="#myCarousel4" data-slide-to="1">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                
                <div class="btn read-more" >View</div> </div>
                <?php  endwhile; endif;?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
              <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 1));
               if (have_posts()): while($catquery->have_posts()) : $catquery->the_post(); 
				?>     
                 <?php
				$postid = get_the_ID();  
				?>      
				<?php if (class_exists('MultiPostThumbnails')
				 && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
				 MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
              <div class="overlay" data-target="#myCarousel4" data-slide-to="2">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                
                <a class="btn read-more" href="portfolio-single.php?post_id=<?php echo $postid ?>">View</a> </div>
                 <?php  endwhile; endif;?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
              <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 2));
               if (have_posts()): while($catquery->have_posts()) : $catquery->the_post(); 
				?>     
                 <?php
				$postid = get_the_ID();  
				?>      
				<?php if (class_exists('MultiPostThumbnails')
				 && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
				 MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
              <div class="overlay" data-target="#myCarousel4" data-slide-to="3">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                
                <a class="btn read-more" href="portfolio-single.php?post_id=<?php echo $postid ?>">View</a> </div>
                <?php  endwhile; endif;?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
              <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 3));
               if (have_posts()): while($catquery->have_posts()) : $catquery->the_post(); 
				?>     
                 <?php
				$postid = get_the_ID();  
				?>      
				<?php if (class_exists('MultiPostThumbnails')
				 && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
				 MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
              <div class="overlay" data-target="#myCarousel4" data-slide-to="4">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                <p class="white-shadow-text white-text">client: <?php echo $client = $my_meta['client']; ?></p>
                <a class="btn read-more" href="portfolio-single.php?post_id=<?php echo $postid ?>">View</a> </div>
                <?php  endwhile; endif;?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 hidden-sm hidden-xs paddingnone">
            <div class="hovereffect">
              <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 4));
               if (have_posts()): while($catquery->have_posts()) : $catquery->the_post(); 
				?>     
                 <?php
				$postid = get_the_ID();  
				?>      
				<?php if (class_exists('MultiPostThumbnails')
				 && MultiPostThumbnails::has_post_thumbnail('blogs', 'feature-image-2')) :
				 MultiPostThumbnails::the_post_thumbnail('blogs', 'feature-image-2', NULL /*, 'add class name here' */ ); endif;?>
              <div class="overlay" data-target="#myCarousel4" data-slide-to="5">
                <h3 class="white-shadow-text"><?php echo the_title();?></h3>
                
                <a class="btn read-more" href="portfolio-single.php?post_id=<?php echo $postid ?>">View</a> </div>
                 <?php  endwhile; endif;?>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 paddingnone">
            <div class="hovereffect">
            <img src="images/Blog-01.jpg" class="img-responsive"/>
              <a href="blog-archive.php"><div class="overlay"> 
                <h3 class="white-shadow-text">Blog Archive</h3>
                <div class="btn read-more" >View</div>
                </div></a> 
            </div>
          </div>
          
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social-sec">
        <div class="social-blocks">
        <a href="http://www.linkedin.com/company/1067697?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1067697%2Cidx%3A1-1-1%2CtarId%3A1448903982578%2Ctas%3Azonke%20ignition%20advertising" class="fa fa-linkedin fa-2x" target="_blank"></a>
        
    </div>
    <!--<div class="social-blocks"><a href="#" class="fa fa-dribbble fa-2x"></a></div>-->
    <div class="social-blocks"><a href="https://www.facebook.com/ZonkeIgnitionAdvertising/" target="_blank" class="fa fa-facebook fa-2x fb"></a></div>
          <div class="social-blocks"><a href="#" class="fa fa-twitter fa-2x"></a></div>
          
         
        </div>
        </div>
      <div class="item"> 
      <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>      
            
        <?php include 'main-ft-img.php';?>                        
        <!-- Begin stage wrapper -->
        
        <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                  
                <!-- End content block --> 
              </div>
              
              </div>
              
            </div>
            
          </div>
          
        </div>
         <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
       
        
      </div>
      <div class="item"> 
     <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 1)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>  
            <?php include 'main-ft-img.php';?> 
        <!-- Begin stage wrapper -->
         <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                </div>
                <!-- End content block --> 
              </div>
            </div>
          </div>
        </div>
        <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
        
      </div>
      <div class="item"> 
     <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 2)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>  
            <?php include 'main-ft-img.php';?> 
        <!-- Begin stage wrapper -->
         <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                </div>
                <!-- End content block --> 
              </div>
            </div>
          </div>
        </div>
        <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
        
      </div>
      <div class="item"> 
     <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 3)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>  
            <?php include 'main-ft-img.php';?> 
        <!-- Begin stage wrapper -->
         <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                </div>
                <!-- End content block --> 
              </div>
            </div>
          </div>
        </div>
        <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
        
      </div><?php /*?>
      <div class="item"> 
     <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 4)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>  
            <?php include 'main-ft-img.php';?> 
        <!-- Begin stage wrapper -->
         <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                </div>
                <!-- End content block --> 
              </div>
            </div>
          </div>
        </div>
        <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
        
      </div>
      <div class="item"> 
     <?php $catquery = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 1, 'offset' => 4)); 
		if (have_posts()): while($catquery->have_posts()) : $catquery->the_post();  ?>
		 <?php
		$postid = get_the_ID();  
		?>  
        <!-- Begin stage wrapper -->
        <div class="video-wrapper" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center fixed ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;min-height:100%;">
          
          <!-- Background wrapper: -->
          <div class="bg-wrapper" style="min-height:800px;">
            <div class="block-wrapper">
              <div class="content-wrapper"> 
                <!-- Begin content block -->
                <div class="content-block">
                  <h1 class="white-shadow-text"><?php echo the_title();?></h1>
                  <p class="white-shadow-text"><?php echo the_excerpt();?></p><br><br>
                 
                  	<a class="orange-link" href="#myCarousel4" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to blogs</a>&nbsp;&nbsp;&nbsp;<a class="orange-link" href="blog-single.php?post_id=<?php echo $postid ?>">Read More</a>
                </div>
                <!-- End content block --> 
              </div>
            </div>
          </div>
        </div>
        <?php  endwhile; endif;?>
         <!-- Soical sharing single posts - works using post ID -->
<?php include 'blog-single-share.php';?>
        
      </div>
     
      
    
    <?php */?>
    </div>
    <!-- Left and right controls --> 
    <a class="left carousel-control back" href="#myCarousel4" role="button" data-slide="prev"> <!--<span class="glyphicon glyphicon-chevron-left"></span><i class="fa  fa-chevron-left" style="-webkit-font-smoothing: antialiased; width:50px; height:50px;"></i>--><img src="images/left-arrow.png" width="30" height="36" style="display:block;" border="0" class="arrow-left"/><span class="sr-only">Previous</span> </a> <a class="right carousel-control forw" href="#myCarousel4" role="button" data-slide="next"> <img src="images/right-arrow.png" width="30" height="36" style="display:block;" border="0" class="arrow-right"/><!--<span class="glyphicon glyphicon-chevron-right"></span>--> <span class="sr-only">Next</span> </a> </div>
  <!--<div id="myCarousel44" class="carousel slide" data-ride="carousel" data-interval="false"> 
    
 </div>-->
</section>
