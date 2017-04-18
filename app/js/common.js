$(function() {

	$('.ah-slider').owlCarousel({
	    loop: true,
	    margin: 0,
	    items: 1,
	    nav: true,
	    navText:['<span class="ah-arrow-r"></span>','<span class="ah-arrow-l"></span>']
	});

	$('.ah-menu-list li').click(function(){
		$(this).find('.ah-submenu-list').slideToggle(500);

		return false;
	});

	$('.ah-catbutton-list li').click(function(){
		$(this).find('.ah-menu-list320').slideToggle(500);

		return false;
	});


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

	$('.selectpicker').selectpicker({
	  size: 4
	});



});
