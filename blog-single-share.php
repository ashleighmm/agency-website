<!-- Soical sharing single posts - works using post ID -->
<div class="container padding-none">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social-sec">
    <div class="social-blocks">
        <a href="https://twitter.com/share" class="fa fa-twitter fa-2x"{count} data-url="http://localhost:8888/www.zia.co.za/blog-single.php?post_id=<?php echo $postid ?>" target="_blank"></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <!--<div class="social-blocks"><a href="#" class="fa fa-dribbble fa-2x"></a></div>-->
    <div class="social-blocks"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost%3A8888/www.zia.co.za/blog-single.php?<?php echo $postid ?>" class="fa fa-facebook fa-2x"></a></div>
    <!--<div class="social-blocks"><a href="#" class="fa fa-instagram fa-2x"></a></div>-->
    <!--<div class="social-blocks"><a href="#" class="fa fa-github fa-2x"></a></div>-->
</div>
</div>