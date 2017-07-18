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