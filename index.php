<?php
/* Don't remove this line. */
require('./cms/wp-blog-header.php');
?>
<?php require 'head.php';?>

<body class="homepage">
<div class="container padding-none">
    <div id="page-wrapper">
        <?php include 'man-nav.php';?>
        <div class="sections-wrapper"> 
            <!-- Nav -->
            
            <div class="section main-section heightfull" style="background-color:rgba(0,0,0,0.3);" >
            	<div id="cf">
            		<img class="bottom "  src="images/map-off.png" /> 
                    <img class="top"  src="images/map-on.png"/> 
            	</div>
            </div>
            
            
            <!--<div class="section s1" style="background-color:rgba(0,0,0,0.3);" >
                <section id="home" >
                    <div id="cf"> <a href="http://www.zia.co.za" >
                        
                        	<img class="bottom" src="images/map-off.png" /> 
                            <img class="top" src="images/map-on.png" /> 
                        
                        <script>
						var $message = $('.top');
$message.addClass('fadeIn fast');

setTimeout(function(){
   $message.removeClass('fadeIn')
}, 5000);
						</script>	
                        </a>
                        
                        <br>
                    </div>
                    <br>-->
                    
                    <!--<div class="inner">
							<div class="video-wrapper" style="background: #000000  url(images/bg-africa_s.png) no-repeat center center fixed !important; 
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;min-height:600px;"> 
  </div>
  <a href="http://www.zia.co.za" class="main-logo"> <img src="images/logo.png"/></a>
						</div>--> 
                    
                    <!--<nav id="nav">
							<ul>
								<li><a href="index.html" class="scrolly">Home</a></li>
								<li><a href="#africa" class="scrolly">Product Advertising</a></li>
								<li><a href="#services" class="scrolly">What We Do</a></li>
								<li><a href="#ourstory" class="scrolly">Our Story</a></li>
								<li><a href="#case-studies" class="scrolly">Case Studies</a></li>
                                <li><a href="#blog" class="scrolly">Blog</a></li>
                                <li><a href="#blog-social" class="scrolly">Subsrcibe to our blog</a></li>
                                <li><a href="#staff" class="scrolly">Our Team</a></li>
                                <li><a href="#portfolio" class="scrolly">Portfolio</a></li>
                                <li><a href="#contact" class="scrolly">Contact</a></li>
							</ul>
						</nav>--> 
                </section>
            </div>
            <div class="section s2 black-bg">
                <?php include 'africa.php';?>
            </div>
            <div class="section s3 heightfull black-bg">
                <?php include 'services.php'; ?>
            </div>
            <!--<div class="orange-bg section s4 heightfull">
                	<?php /* include 'story.php'; */?> 
                </div>-->
            <!--<div class="section s5 heightfull">
                <?php  /*include 'case-studies.php';*/ ?>
            </div>-->
            
            <!--<div class="section s7 orange-bg "> 
                    <?php /*include 'staff.php';*/?>
                </div>-->
            <!--<div class="section s6 heightfull">
                <?php /*include 'blog.php';*/?>
            </div>-->
            <!--<div class="section s8 heightfull">
                <?php /*include 'portfolio.php';*/?>
            </div>-->
            <!--<div class="section s10 heightfull">
                <?php /*include 'resources.php';*/?>
            </div>-->
            <div class="section s9 heightfull">
                <?php include 'contact.php';?>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php';?>
