$(function() {
  //Only display newsletter captcha when start editing email adress field
  $('#email-field-7341').click(function() {
    $('#newsletter-captcha-7341').show();
  });
/*
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
      	var top = target.offset().top - 50;
        $('html,body').animate({
          scrollTop: (top > 0 ? top : 0)
        }, 1000);
        return false;
      }
    }
  });
*/
});


jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

jQuery(document).ready(function($){
	$('#logo').on('mouseover', function() {
		$(this).removeClass().addClass('tada animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $(this).removeClass();
	    });
	});
});

jQuery(".easyPieChart").each(
	function(){
		var e=jQuery(this).attr("data-size")||"110";
		jQuery(this).width(e),jQuery(this).height(e),jQuery(this).easyPieChart({
			easing:jQuery(this).attr("data-easing")||"",
			barColor:jQuery(this).attr("data-barColor")||"#ef1e25",
			trackColor:jQuery(this).attr("data-trackColor")||"#dddddd",
			scaleColor:jQuery(this).attr("data-scaleColor")||"#dddddd",
			size:jQuery(this).attr("data-size")||"110",
			lineWidth:jQuery(this).attr("data-lineWidth")||"6",
			lineCap:"circle",
			onStep:function(e,t,a){
				jQuery(this.el).find(".percent").text(Math.round(a))}
		})
})