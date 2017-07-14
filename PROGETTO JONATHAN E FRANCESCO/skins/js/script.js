(function($) {

	"use strict";
	/************************************************
	------- Home-1 
	*************************************************/
	if ($("#main_banner").length) {
		var owl1 = $('#main_banner');
		  owl1.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
		});
		// banner bg img set
		$("#main_banner .owl-stage-outer .owl-stage .owl-item").each(function() {
			var img_src = $(this).children(".item").children("img").attr("src");
			$(this).children(".item").css("background-image", 'url(' + img_src + ')');
			$(this).children(".item").children("img").hide();
		});
		// banner screen height
		var window_height = $(window).height();
		$("#main_banner .owl-item .item").css("height",window_height + "px");
		
		
		$(window).resize(function() {
			var window_height = $(window).height();
			$("#main_banner .owl-item .item").css("height",window_height + "px");
		});
		// banner slider end
	}
	if ($("#dishes_slider").length){
		 var owl2 = $('#dishes_slider');
		  owl2.owlCarousel({
			margin: 30,
			loop: true,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			dots: false,
			 responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 2
			  },
			  992: {
				items: 3
			  }
			}
		});	
	}
	/************************************************
	------- Home-2 
	*************************************************/
	if ($("#new_slider").length){
		var owl3 = $('#new_slider');
		  owl3.owlCarousel({
			margin: 0,
			loop: true,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			dots: false,
			items: 1,
		});
		$("#new_slider .owl-stage-outer .owl-stage .owl-item").each(function() {
			var new_imgSrc = $(this).children(".item").find(".news-img").children("img").attr("src");
			$(this).children(".item").find(".news-img").css("background-image", 'url(' + new_imgSrc + ')');
			$(this).children(".item").find(".news-img").children("img").hide();
		});	
	}
	/************************************************
	------- Home-3 
	*************************************************/
	if ($(".singal-itemSlider").length){
		var owl4 = $('.singal-itemSlider');
		  owl4.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
			nav: true,
			dots: false,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
		});
		$(".singal-itemSlider .owl-stage-outer .owl-stage .owl-item .item .left-img").each(function() {
			var img_src = $(this).children(".img").children("img").attr("src");
			$(this).children(".img").css("background-image", 'url(' + img_src + ')');
			$(this).children(".img").children("img").hide();
		});
	}
	/************************************************
	------- Progress Bars 
	*************************************************/
	//Progress Bars start
	if ($(".progress-barsStyle").length){
		
		$('.percent').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c6a325',
			textColor: '#c6a325',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle2').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#817a0c',
			textColor: '#817a0c',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle3').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c68825',
			textColor: '#c68825',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle4').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c6bd25',
			textColor: '#c6bd25',
			fontSize: '36px',
			fontWeight: 'bold'
		});
	}
	//Progress Bars end
	
	/************************************************
	------- same col hedight
	*************************************************/
	
	if ($(".sideBar").length){
		$(".news .sideBar").css("min-height","0px"); 
		var window_width = $(window).width();
		var window_height = $(window).height();
		var page_height = $('body').height();
		var left_height = $(".news .sideBar").height();
		var right_height = $(".news .rightBar").height();
		var allply_css = $(".news .sideBar");
		
		if(window_width >= 992){
			if( page_height >= window_height){
				if(right_height <= left_height)
				{
					var window_height = $(window).height();
					allply_css.css("min-height",window_height+"px");
				}
				else
				{
					var right_height = $(".rightBar").outerHeight(true);
					allply_css.css("min-height",right_height +"px");
				}
			}
			else
			{
				var window_height = $(window).height();
				allply_css.css("min-height",window_height+"px");
			}
		}
		$(window).resize(function() {
		   $(".news .sideBar").css("min-height","0px");
			var window_width = $(window).width();
			var window_height = $(window).height();
			var page_height = $('body').height();
			var left_height = $(".news .sideBar").height();
			var right_height = $(".news .rightBar").height();
			var allply_css = $(".news .sideBar");
			
			if(window_width >= 992){
				if( page_height >= window_height){
					if(right_height <= left_height)
					{
						var window_height = $(window).height();
						allply_css.css("min-height",window_height+"px");
					}
					else
					{
						var right_height = $(".rightBar").outerHeight(true);
						allply_css.css("min-height",right_height +"px");
					}
				}
				else
				{
					var window_height = $(window).height();
					allply_css.css("min-height",window_height+"px");
				}
			}
		});
	}
})(window.jQuery);
