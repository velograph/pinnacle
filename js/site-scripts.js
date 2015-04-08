$(document).ready(function() {

if (jQuery(window).width() > 860) {

	$(document).ready(function(){
		$(".site-header").sticky({
			topSpacing: 16
		});
	});

}

else if (jQuery(window).width() < 860) {

	$(document).ready(function(){
		$(".site-header").sticky({
			topSpacing: 15
		});
	});

}

$(".location-sub-nav").sticky({
	topSpacing: 80
});


});

$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    $('.featured-home-image').css('min-height', windowHeight);
  };
  setHeight();

  $(window).resize(function() {
    setHeight();
  });
});

var fadeStart=200, // 100px scroll or less will equiv to 1 opacity
    fadeUntil=700, // 200px scroll or more will equiv to 0 opacity
    fading = $('.featured-home-image');

$(window).bind('scroll', function(){
    var offset = $(document).scrollTop(),
        opacity=0;
    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=1-offset/fadeUntil;
    }
    fading.css('opacity',opacity).html(opacity);

});

var divs = $('.home-description');
$(window).scroll(function(){
   if($(window).scrollTop()<100) {
		$('.home-description').fadeIn();
   } else if($(window).scrollTop()>1) {
		$('.home-description').fadeOut('slow');
   }
});


taglineHeight = $(window).innerHeight();
$('.home-description').css('top', taglineHeight / 1.8);
