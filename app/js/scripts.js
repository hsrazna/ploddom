$(function() {

	if($('.ah-slider').length>0){
		$('.ah-slider').owlCarousel({
		    loop: true,
		    margin: 0,
		    items: 1,
		    nav: true,
		    navText:['<span class="ah-arrow-r"></span>','<span class="ah-arrow-l"></span>']
		});
	}

	if($('.ah-menu-list li').length>0){
		$('.ah-menu-list li').click(function(){
			$(this).find('.ah-submenu-list').slideToggle(500);

			return false;
		});
	}

	if($('.ah-catbutton-list li').length>0){
		$('.ah-catbutton-list li').click(function(){
			$(this).find('.ah-menu-list320').slideToggle(500);

			return false;
		});
	}

	if($('.ah-cardslider').length>0){
		$('.ah-cardslider').owlCarousel({
	        items:1,
	        loop:false,
	        center:true,
	        margin:0,
	        nav: true,
	        navText:['<span class="arrow-left1"></span>','<span class="arrow-right1"></span>'],
	        URLhashListener:true,
	        autoplayHoverPause:true,
	        startPosition: 'URLHash'
	    });
	}

	if($('.selectpicker').length>0){
		$('.selectpicker').selectpicker({
		  size: 4
		});
	}


});

$(function() {

	$('.az-co').click(function(){
		$(this).toggleClass('az-close').next('.az-menu').slideToggle(300);
		return false;
	});

	$('.az-menu a').click(function(){
		if(window.matchMedia( "(max-width: 768px)" ).matches){
			if($(this).next('ul').length>0&&$(this).next('ul').css('display')=='none'){
				$(this).parent().siblings("li").each(function(i){
					if($(this).children('ul').length>0){
						$(this).children('ul').slideUp(300);
						$(this).children('a').children("fa").slideUp(300);
					}
				});
				$(this).next('ul').slideDown(300);
				return false;
			}else if($(this).next('ul').length>0&&$(this).next('ul').css('display')=='block'){
				$(this).next('ul').slideUp(300);
				return false;
			}
		}
	});

	$('.az-menu').after('<ul id="desktop-menu" class="sf-menu">').children().clone().appendTo("#desktop-menu");//.superfish();
	$('ul.sf-menu').find("ul i").removeClass("fa-angle-down").addClass("fa-angle-right");
	$('ul.sf-menu').superfish();

	if($('.az-tabs>li a').length>0){
		$('.az-tabs>li a').click(function(){
			$('.az-tabs>li').removeClass('active');
			$(this).parents("li").addClass('active');
			$('.az-tab-cont>li').fadeOut(0);
			$($(this).attr('href')).fadeIn(0);
			return false;
		});
	}
	

});
