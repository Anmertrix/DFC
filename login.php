<?php include_once('head.php') ?>

<?php include_once('header.php') ?>


	<section id="form_page" class="form_page">
		<div class="container">
			<div class="form_page_content">
				<div class="form_page_left hidden-sm hidden-xs">
					<div class="form_page_title">Добро пожаловать</div>
				</div>
				<div class="form_page_right">
					<form method="post">
						<div class="form_title">Мой аккаунт</div>

						<div class="login_form">
							<div><input type="email" placeholder="Введите ваш E-mail"></div>
							<div class="password_field">
								<input type="password" placeholder="пароль">
								<a href="#" class="forgot_pass">Забыл пароль</a>
							</div>
						</div>
						
						<div class="submit_btn_wrap">
							<button class="submit_btn" type="submit">Войти</button>
							<a href="#" class="login_link">зарегистрироваться</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	


<?php include_once('footer.php') ?>
