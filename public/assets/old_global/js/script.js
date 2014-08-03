$(function(){
	/*shadowbox*/
 	Shadowbox.init(); 
	var GALLERY = {},
		REVIEW = {};
	/////////////////
	/////GALLERY/////
	/////////////////
	GALLERY.setup = (function(){
		GALLERY.slider = $('#slider');
		GALLERY.fix_anim = false; //wait until animation is complete 
		GALLERY.set_slide = function(){
			items.eq(nav.find('.active').index()).addClass('active').removeClass('hiden')
			.siblings().removeClass('active').addClass('hiden');
			GALLERY.fix_anim = false;
		};
		var	itemHolder = $('#items'),
			items = $('section', GALLERY.slider),
			nav = $('#nav_slider'),
			navTrgr = $('a', '#nav_slider'),
			slides = ['first', 'second', 'third', 'fourth'];
		
		//init
		function init() {
			navTrgr.click(function(){
				var prnt = $(this).parent(),
					slideNum = prnt.index();
				if (!prnt.hasClass('active') && GALLERY.fix_anim == false) {
					GALLERY.fix_anim = true;
					change_slide(slideNum)
				}
				return false;
			});
			$(window).bind('load resize', setSize);
			$(window).bind('load resize', frame_pos);
			start_slider();
			$('#slider_wrap').hover(stop_slider,start_slider);
		};
		//auto play
		var intrevalSlider;
		
		function start_slider(){
			intervalSlider = setInterval(play,5000);
		};
		function stop_slider(){
			clearInterval(intervalSlider);
		}
		function play(){
			var crnt = nav.find('.active'),
				trgrs = nav.find('li');
			if (crnt.index() == trgrs.length-1) {
				trgrs.eq(0).find('a').trigger('click');
			}
			else {
				crnt.next('li').find('a').trigger('click');
			}
		};
		//gallery animation
		function change_slide(_index) {
			var crnt = nav.find('.active');
			//change active item in navigation
				crnt.removeClass('active');
				nav
					.find('li')
					.eq(_index)
					.addClass('active')
					.siblings()
					.removeClass('active');
			//init out animataion on active slide
			GALLERY.animations.out(); 
			//slide input animation
			setTimeout(GALLERY.animations[slides[_index]].inn, 300) 
		};
		
		//set item size
		function setSize() {
			items.width(GALLERY.slider.width());
		};
		
		//hide non active frames
		function frame_pos(){
			var itemsHid = GALLERY.slider.find('.hiden'),
				framesHid = itemsHid.find('.frame');
			framesHid.css({
				left: GALLERY.slider.width() 
			});
		};
		return {
			init : init
		};
	}());
	//ANIMATIONS
 	GALLERY.animations = (function(){
		var slide_1 = $('#slide1'),
			s1_desk = $('.desk', slide_1),
			s1_tbl_l = $('.table_left', slide_1),
			s1_tbl_r = $('.table_right', slide_1),
			s1_text = $('.text', slide_1),
			slide_2 = $('#slide2'),
			s2_q = $('.q', slide_2),
			s2_w = $('.w', slide_2),
			s2_text = $('.text', slide_2),
			slide3 = $('#slide3'),
			s3_helmet = $('.helmet', slide3),
			s3_case = $('.case', slide3),
			s3_apple = $('.apple', slide3),
			s3_key = $('.key', slide3),
			s3_text = $('.text', slide3),
			slide4 = $('#slide4'),
			s4_scales = $('.scales', slide4),
			s4_books = $('.books', slide4),
			s4_text = $('.text', slide4),
			delayTime = 70,
			speed = 350;
		//frame input animations
		function frame_anim(elems){
			for (i=0;i<elems.length;i++) {
				var dt = delayTime * i; 
				for (key in elems[i]) {
					if (!elems[i].right) {
						elems[i].elem.delay(dt).animate({
							left: elems[i].left
						},speed)
					}
					else {
						elems[i].elem.css({
							left: 'auto',
							right: -(elems[i].elem.width() + elems[i].elem.position().left)
						}).delay(dt).animate({right: elems[i].right},speed,GALLERY.set_slide); 
					}
				}
			}
		};
		return {
			out : function(){
				var crnt = GALLERY.slider.find('section.active'),
					items = crnt.find('.frame');
				(function slideOut(){
					for (i=0;i<items.length;i++) {
						var d = 50 * i,
							leftPos = items.eq(i).position().left
						if (i != items.length-1) {
							items.eq(i).delay(d).animate({left: '-='+GALLERY.slider.width()},speed);
						}
						else {
							items.eq(i).delay(d).css('left',leftPos).animate({left: '-='+GALLERY.slider.width()},speed,function(){
								items.each(function(){
									$(this).css({
										left: $(this).position().left + GALLERY.slider.width()*2+130
									});
								});
							});
						}
					}
				}());
			},
			first : {
				inn : function(){
						frame_anim([
							{elem: s1_desk, left: 20},
							{elem: s1_tbl_l, left: -132},
							{elem: s1_tbl_r, left: 198},
							{elem: s1_text, right: 30}
						]);
				}
			},
			second : {
				inn : function(){
						frame_anim([
							{elem: s2_q, left: 50},
							{elem: s2_w, left: 198},
							{elem: s2_text, right: 30}
						]);
				}
			},
			third : {
				inn : function(){
						frame_anim([
							{elem: s3_helmet, left: 20},
							{elem: s3_case, left: 102},
							{elem: s3_apple, left: 233},
							{elem: s3_key, left: 255},
							{elem: s3_text, right: 50}
						]);
				}
			},
			fourth : {
				inn : function(){
						frame_anim([
							{elem: s4_scales, left:44},
							{elem: s4_books, left:103},
							{elem: s4_text, right:40}
						]);
				}
			}
		}			
	}()); 
	GALLERY.setup.init();

	//REVIEW SLIDER
	REVIEW.slider = (function(){
		var holder = $('#reviews-holder'),
			mask = $('#reviews'),
			itemsList = $('.items',mask),
			item = itemsList.find('section'),
			reviews = item.find('.c'),
			navNext = $('.next',holder),
			navPrev = $('.prev',holder),
			current = 0;
		
		//init
		function init() {
			$(window).bind('load resize',set_width);
			$(window).bind('load resize',set_height);
			$(window).bind('load resize',set_equal_height);
			$(window).bind('load resize',set_position);
			check_disabled();
			set_active_item();
			navNext.click(next);
			navPrev.click(prev);
		};
		
		//set items width
		function set_width(){
			item.width(mask.width());
		};
		//set items list height
		function set_height(){
			var h = itemsList.height();
			mask.height(h);
		};
		//set left position
		function set_position(){
			itemsList.css({
				left: -mask.width()*current
			})
		};
		//set active item in slider
		function set_active_item(){
			item.eq(current).addClass('active').siblings().removeClass('active');
		};
		//animation next
		function next(){
			if (!navNext.hasClass('disabled')) {
				itemsList.animate({
					left : '-=' + mask.width()
				});
				current += 1;
				check_disabled();
				set_active_item();
			}
		};
		//animation prev
		function prev(){
			if (!navPrev.hasClass('disabled')) {
				itemsList.animate({
					left : '+=' + mask.width()
				});
				current -= 1;
				check_disabled();
				set_active_item();
			}
		};
		//add disabled
		function check_disabled(){
			navNext.removeClass('disabled');
			navPrev.removeClass('disabled');
			if (current == 0) {
				navPrev.addClass('disabled');
			}
			else if (current == item.length - 1) {
				navNext.addClass('disabled');
			}
		};
		//set item equal height 
		function set_equal_height () {
			var maxHeight = 0;
			reviews.height('auto').each(function(){
				if ($(this).height() > maxHeight) {
					maxHeight = $(this).height();
				}
			});
			reviews.height(maxHeight);
		};
		return {
			init : init
		};
	}());
	REVIEW.slider.init();
	//PARTNERS
	function partners() {
		var holder = $('#partn_holder'),
			mask = $('#partn'),
			slider = mask.find('.items'),
			itemsList = $('ul',mask),
			item = $('li',slider),
			itemLength = item.length,
			itemWidth = item.width(),
			listWidth = itemLength * itemWidth,
			forward = $('.next',holder),
			prev = $('.prev',holder),
			clonedLength = 0;
	//clone element to Infinity sicle
		for(i=0; i < itemLength; i+=1){
			clonedLength = i+1;
			slider.find('li').eq(itemLength-1).clone().prependTo(itemsList).addClass('cloned');
		};
		for(i=0; i < itemLength; i+=1){
			slider.find('li').eq(i).clone().appendTo(itemsList).addClass('cloned');  
		};
	//start position
		slider.css('left',-(clonedLength * itemWidth)+'px');
	//forward 
		var fixed = false;
		function forward_anim(){
			fixed = true;
			slider.animate({
				left: '-=' + itemWidth*2
			},function(){
				var leftPos = slider.position().left;
				if (Math.abs(leftPos) > listWidth*2 || Math.abs(leftPos) == listWidth*2) {
					var oldLeft = slider.position().left,
						newLeft = listWidth*2 + oldLeft;
 					slider.css('left',newLeft+'px');  
				}
				fixed = false;
			});
		}
		forward.click(function(){
			fixed == false ? forward_anim() : '';
		});
				
		//prev
		function prev_anim(){
			fixed = true;
			function correct_position () {
				var leftPos = slider.position().left;
				if (Math.abs(leftPos) < listWidth) {
					var oldLeft = slider.position().left,
						newLeft = Math.abs(leftPos)+listWidth;
					slider.css('left',-newLeft+'px');
				}
			};
			correct_position();
			slider.animate({
				left: '+=' + itemWidth*2
			},function(){
				correct_position();
				fixed = false;
			});
		};
		prev.click(function(){
			fixed == false ? prev_anim() : '';
		});	
	};
 	partners(); 
	//EXPANDBLES
	if (('.trgr').length) {
		(function expand() {
			var expandCont = $('.expand');
			expandCont.hide();
			function show_expand () {
				var speed = 200;
				if (!$(this).hasClass('active')) {
					$(this).addClass('active').next(expandCont).slideDown(speed);
				}
				else {
					$(this).removeClass('active').next(expandCont).slideUp(speed);
				}
				return false;
			};
			$('.trgr').click(show_expand);
		}());
	};
	//MARK LIST LAST CHILD CLASS
	if ($('.mark','#main').length) {
		(function(){
			$('.mark').find('li:last').addClass('last');
		}());
	};
	//OVERLAY
	var OVERLAY = (function(){
		//tag 'div class=c' must be added to content !important
		var	videoID = 8,
			videoContent = '<div class="c"><embed name="seldontv" src="http://seldon.tv/online/FlashPlayer.swf" flashvars="id='+videoID+'&autoplay=1" width="640" height="360" bgcolor="#000000" allowScriptAccess="always" allowFullScreen="true"></embed></div>',
			wrapper = $('#wrapper'),
			ov_wrap,ov_content,ov_bg,ov_close,set_size;
		//set layout elements
		function addOverlay() {
			var ov_layout = '<div class="ov_wrap">';
				ov_layout += '	<div class="ov_bg"></div>';
				ov_layout += '	<div class="ov_content"><i></i></div>';
				ov_layout += '</div>';
			$('body').append(ov_layout);
			//define elements
			ov_wrap = $('body').find('.ov_wrap');
			ov_content = ov_wrap.find('.ov_content');
			ov_bg = ov_wrap.find('.ov_bg');
			ov_close = ov_content.find('i');
		};
		//append some content
		function appendContent(content) {
			ov_content.append(content); //add content to popup
			//some animation
			ov_wrap.show();
			ov_bg.fadeTo(300,0.3,function(){
				ov_content.show();
			});
			//set size of content & oberlay wrapper
			set_size = function () {
				ov_wrap.css({
					width : wrapper.width(),
					height : wrapper.height()
				});
				ov_content.css({
					marginLeft : - $('.ov_content').width() / 2,
					marginTop : - $('.ov_content').height() / 2
				});
			};
			set_size();
			//bind to window resize
			$(window).resize(function(){
				set_size();
			});
		};
		//close overlay
		function closeOverlay() {
			ov_content.hide().find('.c').remove();
			ov_bg.fadeTo(300,0,function(){
				ov_wrap.hide();
			});
			set_size = null; //clear memory 
		};
		//init
		function init() {
			addOverlay();
			ov_close.click(closeOverlay);
			$('.add_video').click(function(){
				appendContent(videoContent);
				return false;
			});
			
		};
		return {
			init : init
		}
	}());
	OVERLAY.init();
	//sub-menu
	(function submenu(){
		var sub_wrap = $('#sub_nav_wrap'),
			items = sub_wrap.children('ul').children('li');
		items.eq(items.length-1).addClass('last');//add LAST class to last element
		sub_wrap.find('li.active').prev('li').addClass('prev');
		//remove border from previous list item
		items.hover(function(){
			if (!$(this).hasClass('active')) {
				$(this).prev('li').addClass('prev');
			}
		},
		function(){
			if (!$(this).hasClass('active')) {
				$(this).prev('li').removeClass('prev');
			}
		});
	}());
	if ( $('.events').length ) {
		$('.events')
			.find('li:last')
			.addClass('last');
	};
////
});