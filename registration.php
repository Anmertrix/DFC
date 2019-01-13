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
						</span> / Регистрация
				</div>
			</div>
			<div class="form_page_content">
				<div class="form_page_left hidden-sm hidden-xs">
					<div class="form_page_title">Добро пожаловать</div>
				</div>
				<div class="form_page_right">
					<form method="post">
						<div class="form_title">Регистрация</div>

						<div class="registration_form">
							<div><input type="email" placeholder="E-mail"></div>
							<div><input type="text" placeholder="Имя"></div>
							<div><input type="text" placeholder="Фамилия"></div>
							<div><input type="text" placeholder="пароль"></div>
							<div><input type="text" placeholder="Повторите пароль"></div>
						</div>
						
						<div class="submit_btn_wrap">
							<button class="submit_btn" type="submit">Зарегистрироваться</button>
							<a href="#" class="login_link">Авторизация</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	


<?php include_once('footer.php') ?>
