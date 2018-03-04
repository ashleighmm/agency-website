<section id="staff" style="min-height:700px;">
  <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="false"> 
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
      <div class="item active">
        <div class="video-wrapper"> 
          <!-- Background wrapper: -->
          <div class="bg-wrapper orange-bg">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="spacer25"></div>
              <h1><span class="white-heading">Check our</span> happy team</h1>
              <div class="spacer25"></div>
            </div>
            
            <section id="staff-section">
              <?php query_posts('cat=2');
				if (have_posts()) : while (have_posts()) : the_post(); 
                include 'secondary-ft-img.php';?>
              <?php if ( $post->ID == 4775 ) { ?>
              
              
              <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-5 col-sm-offset-1 col-xs-6" data-target="#myCarousel3" data-slide-to="1">
                <img src="<?php echo $main_url; ?>" width="100" height="200"/>
                <div class="staff-title">
                  <div class="staff-h"> <?php echo the_title();?> </div>
                  <div class="staff-pos"> <?php echo the_excerpt();?> </div>
                </div>
                <div class="spacer50"></div>
              </div>
              <?php }; ?>
              <?php endwhile; endif; ?>
              <?php // Reset Query
        wp_reset_query(); ?>
            </section>
            <section id="staff-section">
              <?php query_posts('cat=2');
						if (have_posts()) : while (have_posts()) : the_post(); 
						include 'secondary-ft-img.php';?>
              <?php if ( $post->ID == 4781 ) { ?>
              <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6" data-target="#myCarousel3" data-slide-to="2">
                <?php if (class_exists('MultiPostThumbnails')) : 
        
        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'secondary-featured-thumbnail');
        
        endif;
        
        ?>
                <div class="staff-title">
                  <div class="staff-h"> <?php echo the_title();?> </div>
                  <div class="staff-pos"> <?php echo the_excerpt();?> </div>
                </div>
                <div class="spacer50"></div>
              </div>
              <?php }; ?>
              <?php endwhile; endif; ?>
              <?php // Reset Query
        wp_reset_query(); ?>
        
            </section>
            
          </div>
          
        </div>
      </div>
      
      <div class="item grey-bg">
          <div class="video-wrapper" style="min-height:700px;"> 
            <!-- Background wrapper: -->
            <div class="bg-wrapper grey-bg">
              <?php query_posts('cat=2');
				if (have_posts()) : while (have_posts()) : the_post(); 
				include 'main-ft-img.php';?> 
              <?php if ( $post->ID == 4775 ) { ?>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 paddingnone" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center !important; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; min-height:700px;">
              	
              </div>
              <div class="col-lg-offset-1 col-lg-5  col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                <div class="staff-content">
                  <div class="spacer10"></div>
                  <h2 class="staff-title-size"><?php echo the_title();?></h2>
                  <div class="spacer10"></div>
                  <?php echo the_content();?>
                  <div class="spacer10"></div>
                </div>
              </div>
              <?php }; ?>
              <?php endwhile; endif; ?>
              <?php // Reset Query
        wp_reset_query(); ?>
            </div>
          </div>
        </div>
      <div class="item grey-bg">
          <div class="video-wrapper" style="min-height:700px;"> 
            <!-- Background wrapper: -->
            <div class="bg-wrapper grey-bg">
              <?php query_posts('cat=2');
				if (have_posts()) : while (have_posts()) : the_post(); 
				include 'main-ft-img.php';?> 
              <?php if ( $post->ID == 4781 ) { ?>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 paddingnone" style="background: url(<?php echo $thumb_url; ?>) no-repeat center center !important; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; min-height:700px;">
              	
              </div>
              <div class="col-lg-offset-1 col-lg-5  col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                <div class="staff-content">
                  <div class="spacer10"></div>
                  <h2 class="staff-title-size"><?php echo the_title();?></h2>
                  <div class="spacer10"></div>
                  <?php echo the_content();?>
                  <div class="spacer10"></div>
                </div>
              </div>
              <?php }; ?>
              <?php endwhile; endif; ?>
              <?php // Reset Query
        wp_reset_query(); ?>
            </div>
          </div>
        </div>
    </div>
    
    <!-- Left and right controls --> 
    <a class="left carousel-control back" href="#myCarousel3" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control forw" href="#myCarousel3" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
</section>
