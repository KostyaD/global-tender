$(function(){

	$('.js-height-list').listHeight('.service-cont');

	/*$('.js-scroll').on('click', function(){
		$('html, body').animate({ scrollTop: $('.wrapper-main').height() });
		return false;
	});

	$(window).on('scroll', function(){
		var menu = $('.menu-tocolor');
		if($(this).scrollTop() > menu.height()) {
			menu.addClass('menu-colored');
		} else {
			menu.removeClass('menu-colored');
		}

		$('.wrapper-main').css('background-position', '0 -' + $(window).scrollTop()/2 + 'px');
		$('.main-info').css('top', $(window).scrollTop()/2);
	});

	if($('.feed_fotorama').length != 0) {

		var $fotoramaDiv = $('.feed_fotorama').fotorama();
    	var fotorama = $fotoramaDiv.data('fotorama');

    	$(document).on('click', '.nav-next', function(){
			fotorama.show('>');
			return false;
		});

		$(document).on('click', '.nav-prev', function(){
			fotorama.show('<');
			return false;
		});
	}*/

});

var Popup = (function(){

	allow = true;
	opened = false;
	var show = function(popup) {
		if(!allow) return;
		$('.overlay').addClass('active').css('z-index', 99);
		$('.pop-window[data-popup=' + popup + ']').removeClass('closed');
		$('html').css('overflow', 'hidden');
		opened = popup;
	}

	var close = function(popup) {
		allow = false;
		$('.overlay').removeClass('active');
		$('html').removeAttr('style');
		setTimeout(function(){
			$('.overlay').css('z-index', -1);
			$('.pop-window[data-popup=' + popup + ']').addClass('closed');
			allow = true;
			opened = false;
		}, 500);
	}

	$(document).on('click', '.js-pop-close', function(){
		if(opened) {
			close(opened);
		}
		return false;
	});

	$(document).on('click', '.js-pop-show', function(){
		if(!opened) {
			show($(this).attr('data-popup'));
		}
		return false;
	});

	if(window.location.hash != '') {
		show(window.location.hash.substr(1));
	}

	return { show: show, close: close };
})();

var main_video = (function(){
	if($('.main-video').length != 0) {
		$('.main-video')[0].play();
	}
})();

var down_link = (function(){
	$(document).on('click', '.down-link', function(){
		$('html, body').animate({
			scrollTop: $(window).height()
		});
		return false;
	});
})();

$.fn.listHeight = function(elem) {
	var parent = $(this);

	var max = 0;
	var block = parent.find(elem);
	block.each(function(){
		if($(this).height() > max) {
			max = $(this).height();
		}
	});
	block.css('min-height', max);
}
