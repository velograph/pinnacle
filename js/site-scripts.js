
	$(document).ready(function(){

		$(".square-portal-container img").load(function() {
			$(this).show('fast');
		}).each(function() {
			if(this.complete) $(this).load();
		});

		$(".site-header").fadeIn('fast');
		$(".site-content").fadeIn('slow');

		if (jQuery(window).width() > 860) {

			$(".page-sub-nav").sticky({
				topSpacing: 70
			});
		}

		if (jQuery(window).width() < 860) {
			$(".mobile-footer").fadeIn('slow');

			$(".page-sub-nav").sticky({
				topSpacing: 73
			});

		}

		if (jQuery(window).width() > 1025) {
			$(".site-footer").fadeIn('slow');
		}

		if (jQuery(window).width() < 1025) {
			$(".mobile-footer").fadeIn('slow');
		}

		$(".site-header").sticky({
			topSpacing: 16,
			wrapperClassName: 'header-sticky'
		});


		$(".mobile-header").sticky({
			topSpacing: 15,
			wrapperClassName: 'mobile-sticky'
		});
	});



$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    $('.featured-home-image').css('height', windowHeight);
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
		$('.home-description').fadeOut('fast');
   }
});


taglineHeight = $(window).innerHeight();
if (jQuery(window).width() > 860) {
	$('.home-description').css('top', taglineHeight / 1.8);
}

if (jQuery(window).width() < 860) {
	$('.home-description').css('top', taglineHeight / 2);
}

/*
 * VenoBox - jQuery Plugin
 * version: 1.5.3
 * @requires jQuery
 *
 * Examples at http://lab.veno.it/venobox/
 * License: MIT License
 * License URI: https://github.com/nicolafranchini/VenoBox/blob/master/LICENSE
 * Copyright 2013-2015 Nicola Franchini - @nicolafranchini
 *
 */
!function(t){function a(){t.ajax({url:g,cache:!1}).done(function(t){h.html('<div class="vbox-inline">'+t+"</div>"),d(!0)}).fail(function(){h.html('<div class="vbox-inline"><p>Error retrieving contents, please retry</div>'),d(!0)})}function e(){h.html('<iframe class="venoframe" src="'+g+'"></iframe>'),d()}function i(){var t=g.split("/"),a=t[t.length-1];h.html('<iframe class="venoframe" src="//player.vimeo.com/video/'+a+'"></iframe>'),d()}function o(){var t=g.split("/"),a=t[t.length-1];h.html('<iframe class="venoframe" allowfullscreen src="//www.youtube.com/embed/'+a+'"></iframe>'),d()}function n(){h.html('<div class="vbox-inline">'+t(g).html()+"</div>"),d()}function r(){P=t(".vbox-content").find("img"),P.one("load",function(){d()}).each(function(){this.complete&&t(this).load()})}function d(){v.html(Q),h.find(">:first-child").addClass("figlio"),t(".figlio").css("width",k).css("height",C).css("padding",m).css("background",c),G=h.outerHeight(),F=t(window).height(),F>G+80?(z=(F-G)/2,h.css("margin-top",z),h.css("margin-bottom",z)):(h.css("margin-top","40px"),h.css("margin-bottom","40px")),h.animate({opacity:"1"},"slow")}function l(){t(".vbox-content").length&&(G=h.height(),F=t(window).height(),F>G+80?(z=(F-G)/2,h.css("margin-top",z),h.css("margin-bottom",z)):(h.css("margin-top","40px"),h.css("margin-bottom","40px")))}var c,s,v,m,f,b,h,g,x,u,p,y,w,k,C,j,q,H,z,D,E,L,P,Q,X,A,B,F,G,I,J;t.fn.extend({venobox:function(d){var l={framewidth:"",frameheight:"",border:"0",bgcolor:"#fff",titleattr:"title",numeratio:!1,infinigall:!1,overlayclose:!0},z=t.extend(l,d);return this.each(function(){var d=t(this);return d.data("venobox")?!0:(d.addClass("vbox-item"),d.data("framewidth",z.framewidth),d.data("frameheight",z.frameheight),d.data("border",z.border),d.data("bgcolor",z.bgcolor),d.data("numeratio",z.numeratio),d.data("infinigall",z.infinigall),d.data("overlayclose",z.overlayclose),d.data("venobox",!0),void d.click(function(l){function P(){X=d.data("gall"),D=d.data("numeratio"),j=d.data("infinigall"),q=t('.vbox-item[data-gall="'+X+'"]'),q.length>0&&D===!0?(s.html(q.index(d)+1+" / "+q.length),s.show()):s.hide(),A=q.eq(q.index(d)+1),B=q.eq(q.index(d)-1),d.attr(z.titleattr)?(Q=d.attr(z.titleattr),v.show()):(Q="",v.hide()),q.length>0&&j===!0?(I=!0,J=!0,A.length<1&&(A=q.eq(0)),q.index(d)<1&&(B=q.eq(q.index(q.length)))):(A.length>0?(t(".vbox-next").css("display","block"),I=!0):(t(".vbox-next").css("display","none"),I=!1),q.index(d)>0?(t(".vbox-prev").css("display","block"),J=!0):(t(".vbox-prev").css("display","none"),J=!1))}function F(t){27===t.keyCode&&G()}function G(){t("body").removeClass("vbox-open"),t("body").unbind("keydown",F),L.animate({opacity:0},500,function(){L.remove(),H=!1,d.focus()})}l.stopPropagation(),l.preventDefault(),d=t(this),E=d.data("overlay"),k=d.data("framewidth"),C=d.data("frameheight"),m=d.data("border"),c=d.data("bgcolor"),I=!1,J=!1,H=!1,g=d.attr("href"),y=d.data("css")||"",t("body").addClass("vbox-open"),f='<div class="vbox-overlay '+y+'" style="background:'+E+'"><div class="vbox-preloader">Loading...</div><div class="vbox-container"><div class="vbox-content"></div></div><div class="vbox-title"></div><div class="vbox-num">0/0</div><div class="vbox-close">X</div><div class="vbox-next">next</div><div class="vbox-prev">prev</div></div>',t("body").append(f),L=t(".vbox-overlay"),b=t(".vbox-container"),h=t(".vbox-content"),s=t(".vbox-num"),v=t(".vbox-title"),h.html(""),h.css("opacity","0"),P(),L.css("min-height",t(window).outerHeight()),L.animate({opacity:1},250,function(){"iframe"==d.data("type")?e():"inline"==d.data("type")?n():"ajax"==d.data("type")?a():"vimeo"==d.data("type")?i():"youtube"==d.data("type")?o():(h.html('<img src="'+g+'">'),r())});var K={prev:function(){H||(H=!0,E=B.data("overlay"),k=B.data("framewidth"),C=B.data("frameheight"),m=B.data("border"),c=B.data("bgcolor"),g=B.attr("href"),Q=B.attr(z.titleattr)?B.attr(z.titleattr):"",void 0===E&&(E=""),h.animate({opacity:0},500,function(){L.css("background",E),"iframe"==B.data("type")?e():"inline"==B.data("type")?n():"ajax"==B.data("type")?a():"youtube"==B.data("type")?o():"vimeo"==B.data("type")?i():(h.html('<img src="'+g+'">'),r()),d=B,P(),H=!1}))},next:function(){H||(H=!0,E=A.data("overlay"),k=A.data("framewidth"),C=A.data("frameheight"),m=A.data("border"),c=A.data("bgcolor"),g=A.attr("href"),Q=A.attr(z.titleattr)?A.attr(z.titleattr):"",void 0===E&&(E=""),h.animate({opacity:0},500,function(){L.css("background",E),"iframe"==A.data("type")?e():"inline"==A.data("type")?n():"ajax"==A.data("type")?a():"youtube"==A.data("type")?o():"vimeo"==A.data("type")?i():(h.html('<img src="'+g+'">'),r()),d=A,P(),H=!1}))}};t("body").keydown(function(t){37==t.keyCode&&1==J&&K.prev(),39==t.keyCode&&1==I&&K.next()}),t(".vbox-prev").click(function(){K.prev()}),t(".vbox-next").click(function(){K.next()});var M=".vbox-close, .vbox-overlay";return d.data("overlayclose")||(M=".vbox-close"),t(M).click(function(a){x=".figlio",p=".vbox-prev",u=".vbox-next",w=".figlio *",t(a.target).is(x)||t(a.target).is(u)||t(a.target).is(p)||t(a.target).is(w)||G()}),t("body").keydown(F),!1}))})}}),t(window).resize(function(){l()})}(jQuery);
