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
		} //else if (window.matchMedia( "(min-width: 768px)" ).matches && window.matchMedia( "(max-width: 1200px)" ).matches){
      //     if($(this).hasClass('active')){
      //         $(this).removeClass('active');
      //         return false;
      //     } else {
      //         $('.az-menu>li>a').removeClass('active');
      //         $(this).addClass('active');
      //         if($(this).next('ul').length>0){
      //           return false;
      //         }
      //     }
      // } else{
      //   if($(this).next('ul').length>0){
      //     return false;
      //   }
      // }
      // return false;
	});
	$('.az-menu').after('<ul id="desktop-menu" class="sf-menu">').children().clone().appendTo("#desktop-menu");//.superfish();
	$('ul.sf-menu').superfish();
});
