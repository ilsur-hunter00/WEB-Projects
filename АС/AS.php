<?php 
	session_start();
	error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Система поиска недвижимости КАИ</title>
	<link rel="stylesheet" href="Assets/CSS/main.css">
	<link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">

</head>

<body>
	<div id='wrapper'>
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex flex-row justify-content-center">
							<a href="AS.php">
								<img src="Assets/img/city.png" alt="logo" class="logo">	
							</a>
							<p class="logo_txt">Система поиска недвижимости КАИ</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="form">
			<div class="container">
				<div class="col-lg-12">
					<div class="row justify-content-center">
						<form action="includes/signin.php" method="post" class="pform">
							<h2 class="enter">Вход в систему</h2>

								<label class="uname">Логин</label>
								<input type="text" class="username" name="login" required="Это поле обязательно" placeholder="Введите логин">
							
								<label class="pword">Пароль</label>								
								<input type="text" class="password" name="password" required="Это поле обязательно" placeholder="Введите пароль">
							
							<button type="submit" class="btn btn-info">Войти</button>
							<p class="registration">							
								<a href="#darkness" class="reg">
									Регистрация
								</a>
							</p>
							<p class="msg">
								<?php
									echo $_SESSION['mess'];
									unset($_SESSION['mess']);
								?>
							</p>
						</form>
						<div id="darkness">
							<div id="registr">
								<form action="includes/signup.php" method="post" class="rform">
									<h2 class="enter">Регистрация</h2>

									<label class="uname">Придумайте логин</label>										
									<input type="text" class="username" name="login" placeholder="Введите логин">

									<label class="pword">Придумайте пароль</label>										
									<input type="text" class="password" name="password" placeholder="Введите пароль">

									<label class="pword">Повторите пароль</label>										
									<input type="text" class="password" name="password_confirm" placeholder="Подтвердите пароль">

									<button type="submit" class="btn btn-info">Зарегистрироваться</button>
									<a href="AS.php"><button type="button" class="btn btn-info">Закрыть окно</button></a>
									<p class="msg">
										<?php
											echo $_SESSION['message'];
											unset($_SESSION['message']);
										?>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<p>Студенты группы 4211 Вафин И.М., Абдуллаев Л.Х.</p>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>