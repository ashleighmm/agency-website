<?php
/* Don't remove this line. */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>
<?php include 'head.php';?>
<body class="grid-bg">
<?php include 'single-nav.php';?>

<?php
$postid = $_GET["post_id"];
$my_meta = get_post_meta($postid,'_my_meta',TRUE); 
$image1 = $my_meta['image1'];
$image2 = $my_meta['image2'];
$image3 = $my_meta['image3'];
$image4 = $my_meta['image4'];
$image5 = $my_meta['image5'];
$image6 = $my_meta['image6'];
$image7 = $my_meta['image7'];
$image8 = $my_meta['image8'];
$image9 = $my_meta['image9'];
$image10 = $my_meta['image10'];
$image11 = $my_meta['image11'];
$image12 = $my_meta['image12'];
$video1 = $my_meta['video1'];
$video2 = $my_meta['video2'];
$video1_thumb = $my_meta['video1-thumb'];
$video2_thumb = $my_meta['video2-thumb'];

$client = $my_meta['client'];
$campaign = $my_meta['campaign'];
$year = $my_meta['year'];
$art_director = $my_meta['creative-director'];
$account_director = $my_meta['account-director'];
$art_director = $my_meta['art-director'];
$copywriter = $my_meta['copywriter'];
$designer = $my_meta['designer'];

?>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carousel-inner-port">
          <?php if( $image1 ): ?>
          <div class="item active"> <img src="<?php echo $image1; ?>"> </div>
          <?php endif; ?>
          <?php if( $image2 ): ?>
          <div class="item"> <img src="<?php echo $image2; ?>"> </div>
          <?php endif; ?>
          <?php if( $image3 ): ?>
          <div class="item"> <img src="<?php echo $image3; ?>"> </div>
          <?php endif; ?>
          <?php if( $image4 ): ?>
          <div class="item"> <img src="<?php echo $image4; ?>"> </div>
          <?php endif; ?>
          <?php if( $image5 ): ?>
          <div class="item"> <img src="<?php echo $image5; ?>"> </div>
          <?php endif; ?>
          <?php if( $image6 ): ?>
          <div class="item"> <img src="<?php echo $image6; ?>"> </div>
          <?php endif; ?>
          <?php if( $image7 ): ?>
          <div class="item"> <img src="<?php echo $image7; ?>"> </div>
          <?php endif; ?>
          <?php if( $image8 ): ?>
          <div class="item"> <img src="<?php echo $image8; ?>"> </div>
          <?php endif; ?>
          <?php if( $image9 ): ?>
          <div class="item"> <img src="<?php echo $image9; ?>"> </div>
          <?php endif; ?>
          <?php if( $image10 ): ?>
          <div class="item"> <img src="<?php echo $image10; ?>"> </div>
          <?php endif; ?>
          <?php if( $image11 ): ?>
          <div class="item"> <img src="<?php echo $image11; ?>"> </div>
          <?php endif; ?>
          <?php if( $image12 ): ?>
          <div class="item"> <img src="<?php echo $image12; ?>"> </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="clearfix"> </div>
      <!-- /clearfix --> 
    </div>
    <!-- /col-sm-6 --> 
    
  </div>
  <!-- /row --> 
</div>
<!-- /container -->

<div class="container toggle-panel hidden-xs">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
    <button class="btn-custom down-toggle" type="button"  data-toggle="collapse" data-target="#desc" aria-expanded="false" aria-controls="desc"></button>
    <div class="container">
      <div id="thumbcarousel" class="carousel-port slide" data-interval="false">
        <div class="carousel-inner carousel-inner-port">
          <?php if( $image1 ): ?>
          <div class="item active">
            <?php if( $image1 ): ?>
            <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php echo $image1; ?>"></div>
            <?php endif; ?>
            <?php if( $image2 ): ?>
            <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="<?php echo $image2; ?>"></div>
            <?php endif; ?>
            <?php if( $image3 ): ?>
            <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="<?php echo $image3; ?>"></div>
            <?php endif; ?>
            <?php if( $image4 ): ?>
            <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="<?php echo $image4; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
          <?php if( $image5 ): ?>
          <div class="item">
            <?php if( $image5 ): ?>
            <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="<?php echo $image5; ?>"></div>
            <?php endif; ?>
            <?php if( $image6 ): ?>
            <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="<?php echo $image6; ?>"></div>
            <?php endif; ?>
            <?php if( $image7 ): ?>
            <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="<?php echo $image7; ?>"></div>
            <?php endif; ?>
            <?php if( $image8 ): ?>
            <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="<?php echo $image8; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
          <?php if( $image9 ): ?>
          <div class="item">
            <?php if( $image9 ): ?>
            <div data-target="#carousel" data-slide-to="8" class="thumb"><img src="<?php echo $image5; ?>"></div>
            <?php endif; ?>
            <?php if( $image10 ): ?>
            <div data-target="#carousel" data-slide-to="9" class="thumb"><img src="<?php echo $image6; ?>"></div>
            <?php endif; ?>
            <?php if( $image11 ): ?>
            <div data-target="#carousel" data-slide-to="10" class="thumb"><img src="<?php echo $image7; ?>"></div>
            <?php endif; ?>
            <?php if( $image12 ): ?>
            <div data-target="#carousel" data-slide-to="11" class="thumb"><img src="<?php echo $image8; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
        </div>
        <!-- /carousel-inner carousel-inner-port -->
        <?php if( $image5 ): ?>
        <a class="left carousel-control carousel-control-port-lg" href="#thumbcarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control carousel-control-port-lg" href="#thumbcarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
        <?php endif; ?>
      </div>
      <!-- /thumbcarousel --> 
    </div>
    <h3 class="left-white-shadow-text pad-top-xs mobile-pad-top"><?php echo get_the_title( $postid ); ?> </h3>
    <div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
      <table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone" style="display:none;">
        <tr>
          <td class="full-border padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td><p class="left-white-shadow-text left-white-text">
                    <?php if( $client ) { echo "client"; }?>
                  </p></td>
              </tr>
            </table></td>
          <td class="padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td><p class="left-white-shadow-text left-white-text">
                    <?php if( $client ) { echo $client; } ?>
                  </p></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    
  
  <div id="desc" class="collapsed in fade">
      <div class="restrict row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 restrict">
          <div class="inside">
            <p class="left-white-shadow-text left-white-text margin-bottom-large"><?php echo get_post_field('post_content', $postid); ?> </p><br>
            <div class="btn read-more pull-left">
            <a class="white-text" href="index.php#portfolio" role="button" data-slide-to="0">&#8249;&nbsp;&nbsp;Back to Portfolio</a></div>
          </div>
        </div>
        <div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12 restrict">
          <div class="inside">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td class="full-border padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $client ) { echo "Client"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $campaign ) { echo "Campaign"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $year ) { echo "Year"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $creative_director ) { echo "Creative Director"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $account_director ) { echo "Account Director"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $art_director ) { echo "Art Director"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $copywriter ) { echo "Copywriter"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $designer ) { echo "DTP"; }?>
                        </p></td>
                    </tr>
                    
                  </table></td>
                <td class="padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $client ) { echo $client; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $campaign ) { echo $campaign; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $year ) { echo $year; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $creative_director ) { echo $creative_director; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $account_director ) { echo $account_director; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $art_director ) { echo $art_director; } ?>
                        </p></td>
                    </tr>
                     <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $copywriter ) { echo $copywriter; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $designer ) { echo $designer; } ?>
                        </p></td>
                    </tr>
                    
                  </table></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

<div class="container hidden-lg hidden-md hidden-sm toggle-panel-xs">
<div class="">
      <div id="thumbcarouselmobile" class="carousel-port slide col-xs-12" data-interval="false">
        <div class="carousel-inner carousel-inner-port">
          <?php if( $image1 ): ?>
          <div class="item active">
            <?php if( $image1 ): ?>
            <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php echo $image1; ?>"></div>
            <?php endif; ?>
            <?php if( $image2 ): ?>
            <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="<?php echo $image2; ?>"></div>
            <?php endif; ?>
            <?php if( $image3 ): ?>
            <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="<?php echo $image3; ?>"></div>
            <?php endif; ?>
            <?php if( $image4 ): ?>
            <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="<?php echo $image4; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
          <?php if( $image5 ): ?>
          <div class="item">
            <?php if( $image5 ): ?>
            <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="<?php echo $image5; ?>"></div>
            <?php endif; ?>
            <?php if( $image6 ): ?>
            <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="<?php echo $image6; ?>"></div>
            <?php endif; ?>
            <?php if( $image7 ): ?>
            <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="<?php echo $image7; ?>"></div>
            <?php endif; ?>
            <?php if( $image8 ): ?>
            <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="<?php echo $image8; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
          <?php if( $image9 ): ?>
          <div class="item">
            <?php if( $image9 ): ?>
            <div data-target="#carousel" data-slide-to="8" class="thumb"><img src="<?php echo $image5; ?>"></div>
            <?php endif; ?>
            <?php if( $image10 ): ?>
            <div data-target="#carousel" data-slide-to="9" class="thumb"><img src="<?php echo $image6; ?>"></div>
            <?php endif; ?>
            <?php if( $image11 ): ?>
            <div data-target="#carousel" data-slide-to="10" class="thumb"><img src="<?php echo $image7; ?>"></div>
            <?php endif; ?>
            <?php if( $image12 ): ?>
            <div data-target="#carousel" data-slide-to="11" class="thumb"><img src="<?php echo $image8; ?>"></div>
            <?php endif; ?>
          </div>
          <!-- /item -->
          <?php endif; ?>
        </div>
        <!-- /carousel-inner carousel-inner-port -->
        <?php if( $image5 ): ?>
        <a class="left carousel-control carousel-control-port" href="#thumbcarouselmobile" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control carousel-control-port" href="#thumbcarouselmobile" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
        <?php endif; ?>
      </div>
      <!-- /thumbcarousel --> 
    </div>
    <h3 class="left-white-shadow-text mobile-pad-top"><?php echo get_the_title( $postid ); ?> </h3>
    <div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
      <table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone" style="display:none;">
        <tr>
          <td class="full-border padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td><p class="left-white-shadow-text left-white-text">
                    <?php if( $client ) { echo "client"; }?>
                  </p></td>
              </tr>
            </table></td>
          <td class="padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td><p class="left-white-shadow-text left-white-text">
                    <?php if( $client ) { echo $client; } ?>
                  </p></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    
      <div class="restrict">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 restrict">
          <div class="inside">
            <p class="left-white-shadow-text left-white-text margin-bottom-large"><?php echo get_post_field('post_content', $postid); ?> </p>
            
          </div>
        </div>
        <div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12 restrict">
          <div class="inside">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
              <tr>
                <td class="full-border padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $client ) { echo "client"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $campaign ) { echo "campaign"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $campaign ) { echo "campaign"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $year ) { echo "year"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $art_director ) { echo "art director"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $designer ) { echo "designer"; }?>
                        </p></td>
                    </tr>
                    <tr>
                      <td ><p class="left-white-shadow-text left-white-text">
                          <?php if( $account_manager ) { echo "account manager"; }?>
                        </p></td>
                    </tr>
                  </table></td>
                <td class="padding-10"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginnone">
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $client ) { echo $client; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $campaign ) { echo $campaign; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $year ) { echo $year; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $art_director ) { echo $art_director; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $designer ) { echo $designer; } ?>
                        </p></td>
                    </tr>
                    <tr>
                      <td><p class="left-white-shadow-text left-white-text">
                          <?php if( $account_manager ) { echo $account_manager; } ?>
                        </p></td>
                    </tr>
                    
                  </table></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>
<script src="js/jquery-1.7.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
<script type="text/javascript" src="assets/slick/slick.js"></script> 
<script src="assets/js/lightslider.js"></script> 
<script>
	$("#desc").click(function(){
    $(".carousel-inner carousel-inner-port").toggleClass("carousel-large");
	 
}); 

</script> 
<script>
    $(function(){

        $('.carousel-control').click(function(e){
            e.preventDefault();
            $('#thumbcarousel').carousel( $(this).data() );
        });

    });
	    $(function(){

        $('.carousel-control').click(function(e){
            e.preventDefault();
            $('#thumbcarouselmobile').carousel( $(this).data() );
        });

    });
</script>
</body>
</html>