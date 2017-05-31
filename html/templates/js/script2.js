( function( $ ) {
$( document ).ready(function() {
	dai=$(window).width();
$('#full-scrn-slider-container').css('height',(dai*3*0.9)/4+'px');	
	
	function move_center(div){
					window_width=$(window).width();
					obj_width=$(div).width();
					$(div).css('left',(window_width / 2) - (obj_width / 2));
					
					/*window_height=$(window).height();
					obj_height=$(div).height();
					$(div).css('top',(window_height / 2) - (obj_height / 2));*/
				}
				
				move_center('#box_send_mail');
				
				//var TopFixMenu = $("#fixNav");
		  // dùng s? ki?n cu?n chu?t d? b?t thông tin dã cu?n du?c chi?u dài là bao nhiêu.
			$(window).scroll(function(){
			// N?u cu?n du?c hon 150px r?i
				if($(this).scrollTop()>200){
			  // Ti?n hành show menu ra    
					$("#m-menu").addClass("float-menu");
					$("#m-search-i").addClass("float-search");
					$("#pre-clear").css("height", "35px");
					//window_width=$(window).width();
					//obj_width=$("#m-menu").width();
					//$(".float-menu").css('left',(window_width / 2) - (obj_width / 2));
				}else{
			  // Ngu?c l?i, nh? hon 150px thì hide menu di.
					$("#m-menu").removeClass("float-menu");
					$("#m-search-i").removeClass("float-search");
					$("#pre-clear").css("height", "0");
				}}
			)

		$('#info_product > form > a').click(function(){
			var popup = $(this).attr('href');
			$(popup).fadeIn('fast');
			if(popup == '#cachthuc'){
				$('#howto').fadeIn('fast');
			}
			if(popup == '#huongdan'){
				$('#guide').fadeIn('fast');
			}
			$('html').css('overflow-y','hidden');
		});
		
		$('.overlay').click(function(){
			$(this).fadeOut('fast');
			$('.popup').fadeOut('fast');
			$('html').css('overflow-y','auto');
		});
	
	$('.m-search').click(function(){
				$('#TOP #m-search-i').slideToggle(200);
				$('#TOP #m-search-i form').animate({'margin-left':'0'},500);
			});
			
	$('#cssmenu2 li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(200);
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown(200);
			element.children('ul').animate({'margin-left':'0px'},400);
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	$('#cssmenu2>ul>li.has-sub>a').append('<span class="holder"></span>');		
			
	$.slidebars();
});
} )( jQuery );