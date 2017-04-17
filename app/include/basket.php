<section class="az-basket">
	<?php require_once "breadcrumbs.php"; ?>
	<span class="az-title-wrap"><span class="az-title">Корзина</span></span>
	<div class="az-tabs-wrap">
		<ul class="az-tabs">
			<li class="az-tab-cond"><a href="#az-tab1">1. Корзина</a></li>
			<li class="az-tab-cond"><a href="#az-tab2">2. Контактные данные</a></li>
			<li class="az-tab-cond active"><a href="#az-tab3">3. Способы получения</a></li>
			<li class="az-tab-cond"><a href="#az-tab4">4. Заказ оформлен</a></li>
		</ul>
		<ul class="az-tab-cont">
			<li id="az-tab1" style="display: none;">
				<div class="az-tab1-wrap">
					<div class="card-title clearfix">
						<div class="az-region">
							<span class="az-region-title">Ваш Регион:</span>
							<select class="selectpicker" data-style="az-btn2" data-width="fit" name="select" id="az-select">
								<option>Екатеринбург</option>
								<option>Москва</option>
							</select>
							<br><span class="az-description">От выбранного региона зависят доступные способы получения и оплаты товара.</span>
						</div>
					</div>
					<table class="az-table-basket">
						<tr>
							<th>Товар</th>
							<th>Описание</th>
							<th>Доступно</th>
							<th>Цена за единицу</th>
							<th>Кол-во</th>
							<th>Итого</th>
							<th></th>
						</tr>
						<tr>
							<td>
								<div class="az-basket-img">
									<img src="img/novelty1.jpg" alt="photo">
								</div>
							</td>
							<td>
								<span class="az-basket-item-name">Дракон из<br> “Как приручить дракона”</span>
							</td>
							<td>В наличии</td>
							<td class="clearfix"><span class="hidden-sm hidden-md hidden-lg">за еденицу:</span> 1 800 <strong>руб.</strong></td>
							<td>
								<span>
									<div class="ah-cardproduct-formbox az-style2">
										<form class="ah-cardproduct-form az-style2">
											<a href="#" class="ah-card-plus">+</a>
											<input type="text" value="2">
											<a href="#" class="ah-card-min">-</a>
										</form>
									</div>
								</span>
							</td>
							<td><span class="hidden-sm hidden-md hidden-lg">Итого:</span> 3 900 <strong>руб.</strong></td>
							<td><div class="az-relative-tab"><a href="#"><img src="img/az-del.png" alt="del"></a></div></td>
						</tr>
						<tr>
							<td>
								<div class="az-basket-img">
									<img src="img/novelty1.jpg" alt="photo">
								</div>
							</td>
							<td>
								<span class="az-basket-item-name">Дракон из<br> “Как приручить дракона”</span>
							</td>
							<td>В наличии</td>
							<td class="clearfix"><span class="hidden-sm hidden-md hidden-lg">за еденицу:</span> 1 800 <strong>руб.</strong></td>
							<td>
								<span>
									<div class="ah-cardproduct-formbox az-style2">
										<form class="ah-cardproduct-form az-style2">
											<a href="#" class="ah-card-plus">+</a>
											<input type="text" value="2">
											<a href="#" class="ah-card-min">-</a>
										</form>
									</div>
								</span>
							</td>
							<td><span class="hidden-sm hidden-md hidden-lg">Итого:</span> 3 900 <strong>руб.</strong></td>
							<td><a href="#"><img src="img/az-del.png" alt="del"></a></td>
						</tr>
						<tr>
							<td>
								<div class="az-basket-img">
									<img src="img/novelty1.jpg" alt="photo">
								</div>
							</td>
							<td>
								<span class="az-basket-item-name">Дракон из<br> “Как приручить дракона”</span>
							</td>
							<td>В наличии</td>
							<td class="clearfix"><span class="hidden-sm hidden-md hidden-lg">за еденицу:</span> 1 800 <strong>руб.</strong></td>
							<td>
								<span>
									<div class="ah-cardproduct-formbox az-style2">
										<form class="ah-cardproduct-form az-style2">
											<a href="#" class="ah-card-plus">+</a>
											<input type="text" value="2">
											<a href="#" class="ah-card-min">-</a>
										</form>
									</div>
								</span>
							</td>
							<td><span class="hidden-sm hidden-md hidden-lg">Итого:</span> 3 900 <strong>руб.</strong></td>
							<td><a href="#"><img src="img/az-del.png" alt="del"></a></td>
						</tr>
					</table>
					<div class="az-cupon">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="az-cupon-left">
									<span class="az-cupon-title">Купоны</span>
									<form action="/" class="az-cupon-form">
										<div><input type="text"></div>
										<div><button type="submit">Ok</button></div>
									</form>
								</div>
							</div>
							<div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-4 col-md-push-2 col-lg-3 col-lg-push-3">
								<div class="az-cupon-right">
									<span class="az-cupon-sum">Итого товаров: 2 950 руб.</span><br>
									<span class="az-cupon-sum">Итого за доставку: 950 руб.</span><br>
									<span class="az-cupon-sum-end">Итого: 3 900 руб.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="az-promo-itog">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
								<div class="az-promo">
									<span class="az-cupon-title">Промо код</span>
									<form action="/" class="az-cupon-form">
										<div><input type="text"></div>
										<div><button type="submit">применить</button></div>
									</form>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 col-md-push-2 col-lg-4 col-lg-push-3">
								<div class="az-itog">
									<span class="az-itog-sum">Итого</span><br>
									<span class="az-cupon-sum">Товаров на: 2 950 руб.</span><br>
									<span class="az-cupon-sum-end">К оплате: 3 900 руб.</span>
									<div class="az-center">
										<a href="#" class="az-offer">оформить заказ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li id="az-tab2" style="display: none;">
				<div class="az-tab2-wrap">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="az-reg-log">
								<span class="az-reg-log-title">Регистрация / <a href="#">вход</a></span>
								<p>Вы можете зарегистрироваться и получить преимущества постоянного покупателя:</p>
								<ul>
									<li>Следить за статусом заказа</li>
									<li>Накапливать и тратить бонусы</li>
									<li>Получать информацию о бонусах и скидках</li>
								</ul>
								<form action="/">
									<div class="az-label-input">
										<div><label for="">Имя:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">Телефон:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">E-mail:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">Пароль:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">Пароль еще раз:</label></div>
										<div><input type="text"></div>
									</div>
									<p class="az-center">Нажав кнопку “Зарегистрироваться и продолжить” вы соглашаетесь с условиями <a href="#">оферты</a></p>
									<div class="az-reg-log-soc">
										<span>Регистрация через:</span>
										<a href="#"><img src="img/az-vk.png" alt="vk"></a>
										<a href="#"><img src="img/az-facebook.png" alt="facebook"></a>
										<a href="#"><img src="img/az-ok.png" alt="ok"></a>
									</div>
									<div class="az-center">
										<button type="submit">зарегистрироваться и продолжить</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="az-reg-log">
								<span class="az-reg-log-title">Без Регистрации</span>
								<form action="/">
									<div class="az-label-input">
										<div><label for="">Имя:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">Телефон:</label></div>
										<div><input type="text"></div>
									</div>
									<div class="az-label-input">
										<div><label for="">E-mail:</label></div>
										<div><input type="text"></div>
									</div>
									<p class="az-center">Нажав кнопку “Зарегистрироваться и продолжить” вы соглашаетесь с условиями <a href="#">оферты</a></p>
									<div class="az-center">
										<button type="submit">далее</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li id="az-tab3">
				<div class="az-tab3-wrap">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="az-title2">Способы оплаты</h3>
							<div class="az-tab-delivery">
								<div class="az-tabcheckbox">
									<input type="radio" name="radio1" id="az-del1">
									<label class="az-deliv-checkbox" for="az-del1">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del1.png" alt=""></div></div>
										<div>На месте курьеру</div>
									</label>
								</div>
								<div class="az-tabcheckbox">
									<input type="radio" name="radio1" id="az-del2" checked>
									<label class="az-deliv-checkbox" for="az-del2">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del2.png" alt=""></div></div>
										<div class="style2">В пункте самовывоза наличкой или через банковский терминал</div>
									</label>
								</div>
								<div class="az-tabcheckbox">
									<input type="radio" name="radio1" id="az-del3">
									<label class="az-deliv-checkbox" for="az-del3">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del3.png" alt=""></div></div>
										<div>На сайте после подтверждения заказа</div>
									</label>
								</div>
							</div>
							<h3 class="az-title2">Способы доставки</h3>
							<div class="az-tab-delivery">
								<div class="az-tabcheckbox">
									<input type="radio" name="radio2" id="az-del21">
									<label class="az-deliv-checkbox" for="az-del21">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del1.png" alt=""></div></div>
										<div>На месте курьеру</div>
									</label>
								</div>
								<div class="az-tabcheckbox">
									<input type="radio" name="radio2" id="az-del22" checked>
									<label class="az-deliv-checkbox" for="az-del22">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del2.png" alt=""></div></div>
										<div class="style2">В пункте самовывоза наличкой или через банковский терминал</div>
									</label>
								</div>
								<div class="az-tabcheckbox">
									<input type="radio" name="radio2" id="az-del23">
									<label class="az-deliv-checkbox" for="az-del23">
										<div><span class="az-radio"></span></div>
										<div><div class="az-deliv-img"><img src="img/az-del3.png" alt=""></div></div>
										<div>На сайте после подтверждения заказа</div>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li id="az-tab4" style="display: none;">
				<div class="az-tab4-wrap az-thank">
					<span class="az-thank-title">СПАСИБО ЗА ВАШ ЗАКАЗ!</span>
					<p>Александр, мы рады, что вы выбрали наш магазин!<br> Ваш заказ передан в службу доставки. Как только он будет готов к выдаче, вы получите подтверждение по SMS и уведомление по  электронной почте.</p>
					<div class="az-address-itog">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
								<div class="az-address">
									<span class="az-address-title">Адрес магазина:</span>
									<span class="az-address-text">Москва,<br> ул. Академика Королева 12 офис 99</span>
									<span class="az-address-text">Пн-Вс 10:00 - 22:00</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
								<div class="az-itog">
									<span class="az-itog-sum">Итого</span>
									<span class="az-cupon-sum">Товаров на: 2 950 руб.</span>
									<span class="az-cupon-sum-end">К оплате: 19 900 руб.</span>
									<div>
										<a href="#" class="az-itog-button">оформить заказ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>