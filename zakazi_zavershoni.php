<?php include_once('head.php') ?>

<?php include_once('header_2.php') ?>


	<section id="page_wrap" class="page_wrap">
		<div class="container">
			<div class="breadcrumbs_wrap">
				<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
					<!-- Breadcrumb NavXT 6.2.1 -->
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="Главная" href="https://mydomen.com" class="home">
							<span property="name">Главная</span>
						</a>
						<meta property="position" content="1">
						</span> / Завершенные заказы
				</div>
			</div>
			<div class="page_wrap_content">
				<div class="page_wrap_left hidden-sm hidden-xs">
					<div class="page_wrap_title">Ваши заказы</div>

					<ul class="page_wrap_links">
						<li><a href="#">Активные (12)</a></li>
						<li class="active"><a href="#">Завершенные (4)</a></li>
					</ul>
				</div>
				<div class="page_wrap_right">
					<div class="title_wrap">
						<h1 class="title">Завершенные заказы   <span>4</span></h1>
						<a href="#" class="create_order">Создать заказ</a>
					</div>
					<ul class="page_wrap_links_mob">
						<li><a href="#">Активные (12)</a></li>
						<li class="active"><a href="#">Завершенные (4)</a></li>
					</ul>
					<div class="sort_wrap">
						<div class="date_sort">
							<input type="text" name="daterange" value="01.10.2018 - 22.10.2018" />
						</div>
						<div class="search_sort">
							<input type="text" placeholder="Поиск">
							<i class="fas fa-chevron-down"></i>
							<ul>
								<li>Выкуплено</li>
								<li>Не выкупался</li>
							</ul>
						</div>
					</div>
					<div class="order_tables">
						<div class="order_table">
							<div class="order_table_head">
								<div>Заказ</div>
								<div>Создан</div>
								<div>Изменен</div>
								<div>Доставка</div>
								<div>Сумма</div>
								<div>Статус заказа</div>
							</div>
							<div class="order_table_items">
								<div class="order_table_item">
									<div># 3334587</div>
									<div>16.10.2018</div>
									<div>18.10.2018</div>
									<div>Авиационная</div>
									<div>15 000 ₽</div>
									<div><span style="color: #dd3c57">Завершен</span></div>
									<div><a href="#" class="fa_eye"><span class="show_order">Смотреть заказ </span><i class="far fa-eye"></i></a></div>
								</div>
								<div class="order_table_item">
									<div># 5844658</div>
									<div>14.10.2018</div>
									<div>18.10.2018</div>
									<div>Авиационная</div>
									<div>8 000 ₽</div>
									<div><span style="color: #dd3c57">Завершен</span></div>
									<div><a href="#" class="fa_eye"><span class="show_order">Смотреть заказ </span><i class="far fa-eye"></i></a></div>
								</div>
								<div class="order_table_item">
									<div># 5988642</div>
									<div>10.10.2018</div>
									<div><span style="color: #919191">__. __. ____</span></div>
									<div>Морская</div>
									<div>36 050 ₽</div>
									<div><span style="color: #dd3c57">Завершен</span></div>
									<div><a href="#" class="fa_eye"><span class="show_order">Смотреть заказ </span><i class="far fa-eye"></i></a></div>
								</div>
								<div class="order_table_item">
									<div># 5922456</div>
									<div>16.10.2018</div>
									<div>18.10.2018</div>
									<div>Авиационная</div>
									<div>15 000 ₽</div>
									<div><span style="color: #dd3c57">Завершен</span></div>
									<div><a href="#" class="fa_eye"><span class="show_order">Смотреть заказ </span><i class="far fa-eye"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="show_more_tables">
						<span class="hidden-xs">Показать за период с 01 сентября по 30 сентября</span>
						<span class="visible-xs">Показать еще <i class="fas fa-redo"></i></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	


<?php include_once('footer.php') ?>
