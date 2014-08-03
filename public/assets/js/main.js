$(function(){

	$('.js-scroll').on('click', function(){
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
	}

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

$(document).on('submit', '.apply-form', function(e){
	e.preventDefault();
	if($('#policy').is(':checked')) {
		$('.agree').removeClass('error');
	} else {
		$('.agree').addClass('error');
		return;
	}
	$('.btn-subm').addClass('active').attr('disabled', 'disabled');
	$.ajax({
		url: 'mail.php',
		type: 'POST',
		data: $(this).serialize()
	}).always(function(){
		$('.btn-subm').removeClass('active').removeAttr('disabled');
		Popup.close('apply');
		setTimeout(function(){
			Popup.show('result');

			setTimeout(function(){
				Popup.close('result');
			}, 3000);
		}, 600);
	}).done(function(){
		$('.result-icon').html('<i class="fa fa-paper-plane"></i>');
		$('.result-text').html('Ваша заявка успешно отправленна');
	}).fail(function(data){
		$('.result-icon').html('<i class="fa fa-times-circle"></i>');
		$('.result-text').html('Произошла ошибка при отправке, попробуйте позже');
		console.log(data);
	});
	return false;
});