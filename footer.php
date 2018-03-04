<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.onvisible.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/javascirpt-preload-images-from-directory.js"></script>
<!--
<script src="assets/js/jquery-sectionsnap.js" type="text/javascript"></script>-->
<script src="assets/js/jquery.scroll_to.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        /*$(".section").css("min-height", $(window).height() + "px");
		//Snap to section on scroll
        $(".sections-wrapper").sectionsnap({
            delay : 100
            , selector : '.section'
            , reference : 1
            , animationTime : 600
        });
		*/
    });
</script>
            
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>

    
<script type="text/javascript">

    // THIS IS THE IMPORTANT BIT

    // Firefox goes a little haywire if you use percentage heights on the table cells. Creating pixel widths that update themselves when you resize the browser window fixes this.

       /* $(window).load(function() {
            var vWidth = $(window).width();
            var vHeight = $(window).height();
        
            $('.table > section').css('width', vWidth).css('height', vHeight);
        });
        
        $(window).resize(function() {
            var vWidth = $(window).width();
            var vHeight = $(window).height();
        
            $('.table > section').css('width', vWidth).css('height', vHeight);
        });

*/
$('#submit').popover({content: 'Thank You'},'click');	

 
      function init_map() {
		var var_location = new google.maps.LatLng(-26.131493, 27.978723);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 

$(document).ready(function(){

$('.link').addClass('scrolly');

});

function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('top', -(scrolled * 0.2) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

$(function() {
	$(".fader1")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});
	$(".fader2")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});
	$(".fader3")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});
	$(".fader4")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});
	$(".fader5")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});
	$(".fader6")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});

  });
  //Collapse menu after clicking a menu link
  $(document).on('click','.collapse.in',function(e) {

    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }

});
/*$('#myCarousel2').on('slide.bs.carousel', function (e) {
  //according to the documentation this event is fired when the slide method is invoked

    var slideFrom = $(this).find('.active').index();
    var slideTo = $(e.relatedTarget).index();
    if(slideTo == 1){
       $("#bgvid")[0].autoplay = true;
    }
})*/

// Modals
/*$('#wpcf7-f4903-o1').onSentOk(function() { 

});

$(".wpcf7-submit").click(function(event) {
	$('.modal').modal('show');
});*/


/*$('..portfolio-main-image').css({
    "max-height": windowHeight+"px",
	"min-height": windowHeight+"px"
    "min-height": windowHeight+"px"
}); */

/*$('#dbutton').on('click', function (event) {
    alert();
    event.preventDefault();
});*/


// Modals
if ($("#wpcf7-f4903-o1 form").hasClass("invalid")) {
$('.modal').modal('show');
window.location.href = "http://www.zia.co.za/index.php#blog-social";
};

if ($("#wpcf7-f5108-o1 form").hasClass("invalid")) {
$('.modal').modal('show');
}

</script>

	</body>
</html>