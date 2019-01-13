<?php include_once('head.php') ?>

<?php include_once('header.php') ?>


	<section id="form_page" class="form_page">
		<div class="container">
			<div class="breadcrumbs_wrap">
				<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
					<!-- Breadcrumb NavXT 6.2.1 -->
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="Главная" href="https://mydomen.com" class="home">
							<span property="name">Главная</span>
						</a>
						<meta property="position" content="1">
						</span> / Форма доставки
				</div>
			</div>
			<div class="form_page_content">
				<div class="form_page_left">
					<div class="form_page_title">Заполните форму доставки</div>
				</div>
				<div class="form_page_right">
					<form method="post">
						<div class="delivery_form">
							<div><input type="text" placeholder="Пункт отправления *"></div>
							<div><input type="text" placeholder="Пункт назаначения *"></div>
							<div><input type="text" placeholder="ВЕС (кг)"></div>
							<div><input type="text" placeholder="ОбЪЁм (м.куб)"></div>
							<div><input type="text" placeholder="Наименование груза"></div>
							<div>
								<select name="Delivery method" required>
									<option>Способ доставки *</option>
									<option value="Способ 1">Способ 1</option>
									<option value="Способ 2">Способ 2</option>
									<option value="Способ 3">Способ 3</option>
									<option value="Способ 4">Способ 4</option>
								</select>
							</div>
							<div>
								<label class="checkbox_label">
									<input type="checkbox" name="Insurance" class="checkbox_input" value="Insurance" checked />
									<span class="checkmark"></span>
									Оформление страховки
								</label>
							</div>
							<div>
								<label class="checkbox_label">
									<input type="checkbox" name="Customs clearance" class="checkbox_input" value="Customs clearance" checked />
									<span class="checkmark"></span>
									Таможенное оформление
								</label>
							</div>
							<div>
								<textarea name="Comment" rows="3" placeholder="Комментарий"></textarea>
							</div>
						</div>
						
						<div class="submit_btn_wrap_2">
							<button class="submit_btn" type="submit">Оставить заявку</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	


<?php include_once('footer.php') ?>
