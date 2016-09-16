/* Custom Scripts */
$(document).ready(function () {
		
	// Start One Page Scrolling
	$('.top-menu').singlePageNav({
		offset: 40,
		filter: ':not(.external)',
	});

    $('.navbar .nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });

	// Start Parallax script
	$('#explainArea').parallax("50%", 0.1);
	$('#featureArea').parallax("50%", 0.2);
	$('#introArea').parallax("50%", 0.1);
	$('#serviceArea').parallax("50%", 0.1);



	// Start Main Content Slider
	$('#main-slider').flexslider({
		animation: "fade",
  	slideshowSpeed: 3000,
    pauseOnHover: false,
		useCSS: false,
		controlNav: false,
		touch: true,
		prevText: "<span class='fa fa-chevron-circle-left'></span>",
		nextText: "<span class='fa fa-chevron-circle-right'></span>",
	});

	// Start Team Slider
	$('#team-slider').flexslider({
		animation: "slide",
		animationLoop: false,
		directionNav: false,
		useCSS: false,
		touch: true,
		prevText: "<span class='glyphicon glyphicon-circle-arrow-left'></span>",
		nextText: "<span class='glyphicon glyphicon-circle-arrow-right'></span>",
		itemWidth: 270,
		itemMargin: 0,
		minItems: 1,
		maxItems: 4,
		move: 1,
	});
	
	// Start Header Animation
	$(window).scroll(function () {
		if ($(document).scrollTop() == 0) {
			$('.top-menu').removeClass('tiny');
		} else {
			$('.top-menu').addClass('tiny');
		}
	});

	// Start ToolTip
	$('[data-toggle=tooltip]').tooltip() 
	
	// Start PoPover
	$('[data-toggle=popover]').popover()

	$('.dropdown-toggle').mouseover(function() {
        $('.dropdown-menu').show();
    })

    $('.dropdown-toggle').mouseout(function() {
        t = setTimeout(function() {
            $('.dropdown-menu').hide();
        }, 100);

        $('.dropdown-menu').on('mouseenter', function() {
            $('.dropdown-menu').show();
            clearTimeout(t);
        }).on('mouseleave', function() {
            $('.dropdown-menu').hide();
        })
    })
	
	
	// prettyPhoto script start here
    $('a[data-gal]').each(function() {
        $(this).attr('rel', $(this).data('gal'));
    });     
    $("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});


    
						
});	
