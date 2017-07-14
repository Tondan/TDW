 // Checks browser support for the placeholder attribute
"use strict";


$("#location_select").selectbox();// jquery select 
$.validate({
		'scrollToTopOnError' : false
}); // form validate
$('#date_picker').datepicker()
	.on('changeDate', function(e) {
	$('#date_picker').trigger('blur');
});// date picker 
$('#time_picker').timepicker(); // time picker


// style chagnes start
$(".style-box .box-icon").on("click", function(){
	var style_box = $(".style-box");
	if(style_box.hasClass("open"))
	{
		style_box.removeClass("open").animate({"left":"-200px"},700);
	}
	else
	{
		style_box.addClass("open").animate({"left":"0px"},700);
	}
});

$(".color-box ul li a").on("click",function(){
	var css_name = $(this).parent("li").attr("class");
	$("#switch_style").attr("href", "css/"+ css_name + ".css");
	
	if(typeof map != 'undefined')
	{
    	map.setMapTypeId(css_name);
	}
});

// style chagnes end

new WOW().init();

// menu bar start
$(".small-btn").on("click",function(){
	$(".nav-link").slideToggle();	
});

$(".nav-link .nav-ul > li.sub-menu").each(function() {
	$(this).children("a").after("<span class='arrow'><i class='fa fa-angle-down'></i></span>");
});
$(".nav-link .nav-ul li.sub-menu span").on("click",function(){
	if($(this).next("ul").is(":visible"))
	{
		$(this).next("ul").slideUp();
		$(this).children(".fa").addClass("fa-angle-down").removeClass("fa-angle-up");
	}
	else
	{
		$(".nav-link .nav-ul li.sub-menu ul").slideUp();
		$(".nav-link .nav-ul li.sub-menu .fa").addClass("fa-angle-down").removeClass("fa-angle-up");
		$(this).children(".fa").addClass("fa-angle-up").removeClass("fa-angle-down");
		$(this).next("ul").slideDown();
	}
});
// menu bar end

// tab menu start
$(".tab-menu li a").on("click",function(){
	var courent_tab = $(this).attr("class");
	var open_class = courent_tab.split("_");
	$(".menu-tab .tab-menu li").removeClass("active");
	$(this).parent("li").addClass("active");
	$(".menu-tab .tab-content").slideUp();
	$("." + open_class[0]).slideDown();
});
// tab menu end

// box layout js start
$(".layout-style .box-layout").on("click",function(){
	window.dispatchEvent(new Event('resize'));
	$("#wapper").addClass("box-style");
});
$(".layout-style .full-layout").on("click",function(){
	window.dispatchEvent(new Event('resize'));
	$("#wapper").removeClass("box-style");
});
// box layout js end

// fiexd nav bar js start
$(window).scroll(function() {
	var nav_main = $(".nav-main");
	if($(window).scrollTop() > 0 )
	{
		nav_main.addClass("fiexd");
	}
	else
	{
		nav_main.removeClass("fiexd");
	}
});
// fiexd nav bar js end

// body scroll js start
$("#goTop").on("click",function(e) {
    $("html, body").animate({ scrollTop: 0 }, 500);
});
// body scroll js end

/* Accordion js start */
$(".accordion-box .accordion-slide .title").each(function() {
    $(this).on("click",function(){
		if($(this).next(".accordion-content").is(":visible"))	
		{
			$(this).removeClass("active");
			$(this).next(".accordion-content").slideUp();
			$(this).parent(".accordion-slide").removeClass("active");
		}
		else
		{
			$(this).parent(".accordion-slide").parent(".accordion-box").children(".accordion-slide").removeClass("active");
			$(this).parent(".accordion-slide").parent(".accordion-box").children(".accordion-slide").children(".title").removeClass("active");
			$(this).addClass("active");
			$(this).parent(".accordion-slide").addClass("active");
			$(this).parent(".accordion-slide").parent(".accordion-box").children(".accordion-slide").children(".accordion-content").slideUp();
			$(this).next(".accordion-content").slideDown();
		}
	});
});
/* Accordion js end */

/* tab menu js start */
$(".tab-menuFull .tab-list ul li a").on("click",function(){
	var curent_id = $(this).attr("class");
	var open_id = curent_id.split("_");
	$(this).parent("li").parent("ul").children("li").removeClass("active");
	$(this).parent("li").addClass("active");
	$(this).parent("li").parent("ul") .parent(".tab-list").parent(".tab-menuFull") .children(".tab-content").stop(true).slideUp();
	$(this).parent("li").parent("ul") .parent(".tab-list").parent(".tab-menuFull") .children(".tabContent" + open_id[1]).stop(true).slideDown();
});
/* tab menu js end */

/* check and radio js start */
function setupLabel() {
	if ($('.label_check input').length) {
		$('.label_check').each(function(){ 
				$(this).removeClass('c_on');
			});
			$('.label_check input:checked').each(function(){ 
				$(this).parent('label').addClass('c_on');
			});                
		};
		if ($('.label_radio input').length) {
			$('.label_radio').each(function(){ 
				$(this).removeClass('r_on');
			});
			$('.label_radio input:checked').each(function(){ 
				$(this).parent('label').addClass('r_on');
			});
		};
	};
$(document).ready(function(){
	$('.label_check, .label_radio').click(function(){
		setupLabel();
	});
	setupLabel(); 
});

jQuery(function() {
jQuery.support.placeholder = false;
var test = document.createElement('input');
if('placeholder' in test) jQuery.support.placeholder = true;
});
// Placeholder for IE
$(function () {
	if(!$.support.placeholder) { 

		var active = document.activeElement;
		$(':text, textarea').focus(function () {
			if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
				$(this).val('').removeClass('hasPlaceholder');
			}
		}).blur(function () {
			if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
				$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
			}
		});
		$(':text, textarea').blur();
		$(active).focus();
		$('form').submit(function () {
			$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
		});
	}  
});



/* check and radio js end */