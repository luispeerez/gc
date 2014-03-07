var screenSize;
var sidebarButton;
var phoneSize = 767;
var tabletSize = 979;
var slider;
$(document).ready(function(){
	screenSize = $(window).width();
});
$(window).resize(function(){
	screenSize = $(window).width();
});

$(window).scroll(function(){
	windowOffset 	= $(window).scrollTop();
	containeroffset = $('#content .container').offset().top;
	header = $('header').offset().top;

	if(windowOffset > containeroffset){
		$('nav').addClass('scrolled');
		$('nav').addClass('fadeInDown');
		$('header .social').hide();

	}
	else{
		$('nav').removeClass('scrolled');
		$('nav').removeClass('fadeInDown');	
		$('header .social').show();

	}
});

