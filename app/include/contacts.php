<div class="ah-cardwrapper">
	<div class="az-breadcrumb hidden-xs">
		<ul>
			<li><a href="#">Главная</a></li>
			<li><a href="#">Каталог</a></li>
			<li><a href="#">Плодовые</a></li>
			<li><a>Черешня</a></li>
		</ul>
	</div>
	<span class="az-title-wrap ah-title-wrap"><span class="az-title">контакты</span></span>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ah-contacts-wrapp1">
				<div class="row">
					<div class="col-lg-5 col-lg-push-7 col-md-5 col-md-push-7 col-sm-12 col-xs-12">
						<div class="ah-contacts-wrapp">
							<span class="ah-contacts-mintitle">Мы в Санкт-Петербурге</span>
							<span class="ah-contacts-span"><span>Адрес: </span>446999 Санкт-Петербург, Садовое кольцо д. 45 офис.: 499</span>
							<span class="ah-contacts-span">Email: info@mine.ru</span>
							<span class="ah-contacts-span">Тел: 7 (812) 999-39-99</span>	
						</div>
					</div>
					<div class="col-lg-7 col-lg-pull-5 col-md-7 col-md-pull-5 col-sm-12 col-xs-12">
						<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
						<script type="text/javascript">
							ymaps.ready(init);
							var myMap,
							myPlacemark;

							function init(){     
								myMap = new ymaps.Map("ah-map", {
									center: [55.73521577724309,37.6503515],
									zoom: 16,
									controls: []
								});

								myMap.behaviors.disable('scrollZoom'); 

								var myPlacemark = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
									iconLayout: 'default#image',
									iconImageHref: '/img/balun.png',
									iconImageSize: [48, 57],
									iconImageOffset: [-3, -42]
									});


								myMap.geoObjects.add(myPlacemark);
							}
						</script>
						<div id="ah-map"></div>
					</div>
				</div>
			</div>
			<div class="ah-contacts-wrapp1 ah-contacts-wrapp0">
				<div class="row">
					<div class="col-lg-5 col-lg-push-7 col-md-5 col-md-push-7 col-sm-12 col-xs-12">
						<div class="ah-contacts-wrapp">
							<span class="ah-contacts-mintitle">Мы в Санкт-Петербурге</span>
							<span class="ah-contacts-span"><span>Адрес: </span>446999 Санкт-Петербург, Садовое кольцо д. 45 офис.: 499</span>
							<span class="ah-contacts-span">Email: info@mine.ru</span>
							<span class="ah-contacts-span">Тел: 7 (812) 999-39-99</span>	
						</div>
					</div>
					<div class="col-lg-7 col-lg-pull-5 col-md-7 col-md-pull-5 col-sm-12 col-xs-12">
						<script type="text/javascript">
							ymaps.ready(init);
							var myMap1,
							myPlacemark1;

							function init(){     
								myMap1 = new ymaps.Map("ah-map1", {
									center: [55.73521577724309,37.6503515],
									zoom: 16,
									controls: []
								});

								myMap1.behaviors.disable('scrollZoom'); 

								var myPlacemark1 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
									iconLayout: 'default#image',
									iconImageHref: '/img/balun.png',
									iconImageSize: [48, 57],
									iconImageOffset: [-3, -42]
									});


								myMap1.geoObjects.add(myPlacemark1);
							}
						</script>
						<div id="ah-map1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<span class="az-title-wrap ah-title-wrap ah-titlecont-wrap"><span class="az-title ah-title">Следите за нами в социальных сетях</span></span>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="ah-contacts-list">
				<li><a href="#" class="ah-cont-ya"></a></li>
				<li><a href="#" class="ah-cont-inst"></a></li>
				<li><a href="#" class="ah-cont-fb"></a></li>
				<li><a href="#" class="ah-cont-vk"></a></li>
			</ul>
		</div>
	</div>
</div>

