<?php include_once('head.php') ?>

<?php include_once('header.php') ?>


	<section id="main_head" class="main_head" style="background-image:url(img/bg.jpg)">
		<div class="container">
			<div class="main_head_content">
				<div class="main_head_left">
					<h1>Оставьте заявку<br> 
					для поиска<br> 
					товара</h1>
				</div>
				<div class="main_head_right">
					<form method="post">
						<div class="form_title">Заявка на поиск товара</div>

						<div class="prod_form">
							<div>1</div>
							<div onclick="document.getElementById('upload_file').click()"><img src="img/download.png" alt=""> Загрузить фото
							<input name="File" type="file" class="hidden" id="upload_file"></div>
							<div><input type="text" placeholder="Введите название товара"></div>
							<div><input type="text" placeholder="Кол-во, шт"></div>
							<div><input type="text" placeholder="Примечание"></div>
							<div><a href="#" class="remove_prod"><img src="img/remove.png" alt=""></a></div>
						</div>
						
						<div class="add_item_to_table">+ Добавить товар</div>
						
						<div class="input_controls">
							<div class="input_control name">
								<div class="label">ФИО:</div>
								<input type="text" name="Name" placeholder="Введите свое полное имя" required>
							</div>
							<div class="input_control email">
								<div class="label">E-mail:</div>
								<input type="email" name="Email" placeholder="ivanov7@gmail.com" required>
							</div>
							<div class="input_control phone">
								<div class="label">Телефон:</div>
								<input type="text" name="Phone" placeholder="+7 ( ХХХ )  ХХХ  ХХ  ХХ" required>
							</div>
						</div>
						<div class="submit_btn_wrap">
							<button class="submit_btn" type="submit">Оставить заявку</button>
						</div>
					</form>
				</div>
				<div class="main_head_write_letter">
					<div class="icon_wrap"><i class="fas fa-envelope"></i></div>
					<div class="text">Написать нам <br>письмо</div>
				</div>
				<div class="main_head_link_tabs">
					<div class="main_head_link_tab">
						<div class="title">Товары</div>
						<div class="text">Смотреть все товары</div>
						<a href="#" class="main_head_link_icon"><span class="lnr lnr-chevron-right"></span></a>
					</div>
					<div class="main_head_link_tab">
						<div class="title">Доставка</div>
						<div class="text">Помощь и способы <br>доставки</div>
						<a href="#" class="main_head_link_icon"><span class="lnr lnr-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div id="advantages" class="advantages">
		<div class="container">
			<div class="advantages_items">
				<div class="item">
					<img src="img/debt.png" alt="">
					<div class="text">Заключаем юр. договор, принимаем расчетный счет</div>
				</div>
				<div class="item">
					<img src="img/manufacturing-plant.png" alt="">
					<div class="text">Работаем с лучшими производителями Китая</div>
				</div>
				<div class="item">
					<img src="img/customer-service.png" alt="">
					<div class="text">Уникальный сервис для каждого клиента</div>
				</div>
				<div class="item">
					<img src="img/ecommerce.png" alt="">
					<div class="text">Возможность отслеживания статуса заказа онлайн</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="services">
		<div class="container">
			<h2>Услуги</h2>
			<div class="services_items">
				<div class="item">
					<div class="img_wrap">
						<img src="img/service1.png" alt="">
					</div>
					<div class="title">Поиск товара и <br>поставщика</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/service2.png" alt="">
					</div>
					<div class="title">OEM <br>производство</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/service3.png" alt="">
					</div>
					<div class="title">Доставка <br>оптовых заказов</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/service4.png" alt="">
					</div>
					<div class="title">Сопровождение <br>на выставках</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/service5.png" alt="">
					</div>
					<div class="title">Таможенная <br>очистка</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/service6.png" alt="">
					</div>
					<div class="title">Переводчик <br>в Китае</div>
				</div>
			</div>
		</div>
	</div>

	<div id="scheme" class="scheme" style="background-image: url(img/bg2.png)">
		<div class="container">
			<h2>Схема работы</h2>
			<div class="scheme_items">
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/contact.png" alt="">
						</div>
						<div class="num">1</div>
						<div class="title">Вы оставляете заявку</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/noun_Work_Group_1876429.png" alt="">
						</div>
						<div class="num">2</div>
						<div class="title">Мы находим поставщиков</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/noun_Signing_Contract_1874150.png" alt="">
						</div>
						<div class="num">3</div>
						<div class="title">Заключаем контракт. Фиксируем ключевые характеристики товара в договоре</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/noun_Add_to_Cart_528370.png" alt="">
						</div>
						<div class="num">4</div>
						<div class="title">Мы выкупаем товар. Перед выкупом и отправкой, проверяем качество каждой единицы товара,  делаем фотоотчет</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/noun_Credit_Card_528398.png" alt="">
						</div>
						<div class="num">5</div>
						<div class="title">Оплачиваете товар любым удобным вам способом</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/noun_Global_Location_1990299.png" alt="">
						</div>
						<div class="num">6</div>
						<div class="title">Под ключ организуем консолидацию груза в Китае и доставляем в Россию</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="shop_tur" class="shop_tur">
		<div class="container">
			<h2>Шоп-тур в Гуанчжоу</h2>
			<div class="shop_tur_content">
				<div class="shop_tur_left">
					<div class="date_title">Даты заездов: по запросу</div>
					<div class="title">Программа тура:</div>
					<div class="shop_tur_day">1 день</div>
					<div class="shop_tur_text">Прилет в Гуанчжоу. Встреча в аэропорту, трансфер в отель <br>выбранной категории. Ознакомительная прогулка по городу. Ужин</div>
					<div class="shop_tur_day">2-6 день</div>
					<div class="shop_tur_text">Завтрак в отеле</div>
					<div class="shop_tur_day">7 день</div>
					<div class="shop_tur_text">Завтрак в отеле. Трансфер в аэропорт. Вылет в Москву</div>

					<div class="title">Стоимость тура  в Гуанчжоу:</div>
					<div class="shop_tur_text">Lido Hotel 3*, ½ DBL, стоимость за 1 чел = 430 $<br>
					Ocean Hotel 4*, ½ DBL, стоимость за 1 чел = 470 $<br>
					The Garden Hotel 5*, ½ DBL, стоимость за 1 чел = 780 $</div>

					<div class="read_more">Читать подробнее</div>
					<div class="shop_tur_text shop_tur_text_hide">Lido Hotel 3*, ½ DBL, стоимость за 1 чел = 430 $<br>
					Ocean Hotel 4*, ½ DBL, стоимость за 1 чел = 470 $<br>
					The Garden Hotel 5*, ½ DBL, стоимость за 1 чел = 780 $<br>
					Lido Hotel 3*, ½ DBL, стоимость за 1 чел = 430 $<br>
					Ocean Hotel 4*, ½ DBL, стоимость за 1 чел = 470 $<br>
					The Garden Hotel 5*, ½ DBL, стоимость за 1 чел = 780 $
					</div>
				</div>
				<div class="shop_tur_right">
					<form method="post">
						<div class="form_title">Оставить заявку </div>
						<input type="text" name="Name" placeholder="Имя" required>
						<input type="text" name="Phone" placeholder="Телефон" required>
						<input type="email" name="Email" placeholder="E-mail:" required>
						<div class="form__info">
							<input type="checkbox" id="call_condit" name="conditions">
							<label for="call_condit">С правилами сайта ознакомлен! </label>
							<div class="error_message">Вы пропустили это поле</div>
						</div>
						<button class="submit_btn" type="submit">Оставить заявку</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div id="certificate" class="certificate" style="background-image: url(img/bg3.png)">
		<div class="container">
			<h2>Cертификаты</h2>
			<div class="certificate_items">
				<a href="img/certificate1.png" class="item" data-fancybox="certificate">
					<img src="img/certificate1.png" alt="">
				</a>
				<a href="img/certificate2.png" class="item" data-fancybox="certificate">
					<img src="img/certificate2.png" alt="">
				</a>
				<a href="img/certificate3.png" class="item" data-fancybox="certificate">
					<img src="img/certificate3.png" alt="">
				</a>
			</div>
		</div>
	</div>

	<div id="reviews" class="reviews">
		<div class="container">
			<h2>Отзывы</h2>
			<div class="reviews_items">
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/user_photo.png" alt="">
						</div>
						<div class="text_wrap">
							<div class="title">Александр,  г.Москва</div>
							<div class="text">От работы компании DFC остались только положительные впечатления. Это хорошая и надежная компания. По сравнению с другими подобными службами здесь адекватные цены и быстрая доставка. </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/user_photo.png" alt="">
						</div>
						<div class="text_wrap">
							<div class="title">Александр,  г.Москва</div>
							<div class="text">От работы компании DFC остались только положительные впечатления. Это хорошая и надежная компания. По сравнению с другими подобными службами здесь адекватные цены и быстрая доставка. </div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item_content">
						<div class="img_wrap">
							<img src="img/user_photo.png" alt="">
						</div>
						<div class="text_wrap">
							<div class="title">Александр,  г.Москва</div>
							<div class="text">От работы компании DFC остались только положительные впечатления. Это хорошая и надежная компания. По сравнению с другими подобными службами здесь адекватные цены и быстрая доставка. </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="news" class="news">
		<div class="container">
			<div class="news_title_wrap">
				<h2>Новости</h2>
				<a href="#" class="all_news">Все новости <i class="fas fa-chevron-right"></i></a>
			</div>
			<div class="news_items">
				<div class="item">
					<div class="img_wrap">
						<img src="img/news1.png" alt="">
					</div>
					<div class="text_wrap">
						<a href="#" class="title">Китай изменил политику по вывозу товаров из с...</a>
						<div class="meta">
							<div class="date">17.10.2018</div>
							<div class="like"><i class="far fa-thumbs-up"></i> 34</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/news2.png" alt="">
					</div>
					<div class="text_wrap">
						<a href="#" class="title">Китайское правительство ЗА сотрудничество с Россией</a>
						<div class="meta">
							<div class="date">11.10.2018</div>
							<div class="like"><i class="far fa-thumbs-up"></i> 38</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/news3.png" alt="">
					</div>
					<div class="text_wrap">
						<a href="#" class="title">Президент Китая планирует рабочий визит с Президен...</a>
						<div class="meta">
							<div class="date">05.09.2018</div>
							<div class="like"><i class="far fa-thumbs-up"></i> 62</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img_wrap">
						<img src="img/news4.png" alt="">
					</div>
					<div class="text_wrap">
						<a href="#" class="title">В Москве пройдет конференция“Бизнесс с К...</a>
						<div class="meta">
							<div class="date">01.09.2018</div>
							<div class="like"><i class="far fa-thumbs-up"></i> 88</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="faq" class="faq">
		<div class="container">
			<h2>FAQ</h2>
			<div class="faq_items">
				<div class="item">
					<div class="guestion">Как изменить свой заказ?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Как отправить посылку?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Как оформить доставку?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Как выбрать поставщика?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Что такое таможенная очистка?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Как я могу быстрее доставить товары?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Какой срок доставки товаров с Китая?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="item">
					<div class="guestion">Где узнать стоимость доставки?</div>
					<div class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
			</div>
		</div>
	</div>


<?php include_once('footer.php') ?>
