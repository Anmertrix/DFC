<?php include_once('head.php') ?>

<?php include_once('header_2.php') ?>


	<section id="form_page" class="form_page profil_page">
		<div class="container">
			<div class="form_page_content">
				<div class="form_page_left">
					<div class="form_page_title">Настройки профиля</div>
				</div>
				<div class="form_page_right">
					<div class="user_info">
						<div class="photo_wrap">
							<img src="img/user_photo_profil.png" alt="">
							<a href="#" class="edit_photo">Изменить фото</a>
						</div>
						<div class="text_wrap">
							<div class="name">Соколов Андрей андреевичь</div>
							<div class="city">Г. Москва</div>
							<div class="date">На сайте с 20 октября 2018</div>
							<div class="links">
								<a href="#">Сообщения (1)</a>
								<a href="#">Уведомления (2)</a>
							</div>
						</div>
					</div>

					<form method="post">
						<div class="label">Имя и фамилия (ФИО) <span>*</span></div>
						<input type="text" name="Departures" placeholder="Введите ваше ПОлное имя" required>
						<div class="label">Дата рождения <span>*</span></div>
						<input type="text" class="dmask" name="Name" placeholder="дд  /  ММ  /  ГГГГ" required>
						<div class="label">Регион (область, край) <span>*</span></div>
						<select name="Delivery method" required>
							<option>Выбрать</option>
							<option value="Регион 1">Регион 1</option>
							<option value="Регион 2">Регион 2</option>
							<option value="Регион 3">Регион 3</option>
							<option value="Регион 4">Регион 4</option>
						</select>
						<div class="label">Город (населенный пункт) <span>*</span></div>
						<select name="Delivery method" required>
							<option>Выбрать</option>
							<option value="Город 1">Город 1</option>
							<option value="Город 2">Город 2</option>
							<option value="Город 3">Город 3</option>
							<option value="Город 4">Город 4</option>
						</select>
						<div class="label">Адрес <span>*</span></div>
						<input type="text" name="Departures" placeholder="Улица, дом, квартира" required>
						<div class="label">Почтовый индекс <span>*</span></div>
						<input type="text" name="Departures" placeholder="ХХХХХ" required>
						<div class="label">Номер паспорта <span>*</span></div>
						<input type="text" name="Departures" placeholder="ХХ - ХХ     ХХХХХХ" required>
						<div class="label">Номер телефона <span>*</span></div>
						<input type="text" class="pmask" name="Departures" placeholder="+7  ( ХХХ )  ХХ  ХХ  ХХХ " required>
						<div class="label">Email <span>*</span></div>
						<input type="text" name="Departures" placeholder="ivanov7@gmail.com" required>
						<div class="submit_btn_wrap_2">
							<button class="submit_btn" type="submit">Сохранить профиль</button>
						</div>
					</form>
				</div>
				<div class="edit_btn_wrap">
					<a href=""><i class="far fa-edit"></i> Редактировать</a>
				</div>
			</div>
		</div>
	</section>
	


<?php include_once('footer.php') ?>
