<!DOCTYPE html>
<?php
	require_once '../config.php';

	session_start();
	if(isset($_SESSION['sess_user'])){
		header('Location: ../profile/');
	}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ГП  Центральная Лаборатория при Госгеолагенстве при Правительстве КР</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="../img/logo2.png">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
			body{margin:40px;}
			.alert-success{
				text-align: center;
			}
			.alert-danger {
				text-align: center;
			}
			.alert-info {
				text-align: center;
			}
			.alert-warning{
				text-align: center;
			}

			div.polaroid {
				width: 80%;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				margin-bottom: 25px;
			}

			div.container {
				text-align: center;
				padding: 10px 20px;
			}

			.attention-img{
				width: auto;
			}
			.permission{
				font:bold;
				font-size: 30px;
				color: #3b5998;
			}
		</style>

	</head>
	<body>
		<?php

		if(isset($_GET['log'])){
			if(isset($_GET['err'])){
				?>
					<div class="alert alert-warning">
						<strong>Ooops!</strong> Error while login to profile. <a href="../log/?log=in">Try again</a>
					</div>
				<?php
			}
			?>
			<?php
			if(isset($_GET['succ'])){
				?>
				<div class="alert alert-success">
					<strong>Success!</strong> Login with new database. Good Luck!!!
				</div>
			<?php
			}
			$log_in = $_GET['log'];
			?>
			<div class="container">
				<section id="content">
					<form action="log_function.php?<?php if(isset($_GET['log'])){ echo "log"; }?>&<?php if(isset($_GET['mobile'])){ echo "mobile";}?>" method="post">
						<h1>Авторизоваться</h1>
						<div>
							<input type="text" name="username" placeholder="Username" required="" id="username" />
						</div>
						<div>
							<input type="password" name="password" placeholder="Password" required="" id="password" />
						</div>
						<div>
							<input type="submit" name="login_submit" value="Enter" />
							<a href="#">Забыли пароль?</a>
							<a href="?sign=up">Зарегистрироваться</a>
						</div>
					</form><!-- form -->
					<div class="button">
						<a href="../?">Главная</a>
					</div><!-- button -->
				</section><!-- content -->
			</div><!-- container -->
			<script src="js/index.js"></script>
			<?php
		}
		?>
		<?php
		if(isset($_GET['sign'])){
			?>
			<center>
			<div class="polaroid">
				<img class="attention-img" src="../img/icon-attention.png" alt="attention" >
				<div class="permission">
					<p>permission denied for not super users!!!</p>
				</div>
			</div>
			</center>
			<?php
		}
		if(isset($_GET['permission_sign'])){
			if(isset($_GET['sign'])){
			if(isset($_GET['err'])){
				?>
				<div class="alert alert-danger">
					<strong>Error!</strong> Make another username because this already exist. <a href="../log/?sign=up&permission_sign">Click here to sign up again.</a>
				</div>
			<?php
			}
			if(isset($_GET['pass'])){
			?>
				<div class="alert alert-info">
					<strong>Error message!</strong> This passwords are not matched. <a href="../log/?sign=up&permission_sign">Try again</a>
				</div>
			<?php
			}
			$sign_up = $_GET['sign'];
			?>
				<div class="container">
					<section id="content">
						<form action="log_function.php?sign=up&mobile&permission_sign" method="POST">
							<h1>Зарегистрироваться</h1>
							<div>
								<input type="text" name="username" placeholder="Username" required="" id="username" />
							</div>
							<div>
								<input type="password" name="password" placeholder="Password" required="" id="password" />
							</div>
							<div>
								<input type="password" name="password_again" placeholder="Password again" required="" id="password" />
							</div>
							<div>
								<input type="submit" name="sugnup_submit" value="Enter" />
								<a href="#">Забыли пароль?</a>
								<a href="?log=in">Авторизоваться</a>
							</div>
						</form><!-- form -->
						<div class="button">
							<a href="../?">Главная</a>
						</div><!-- button -->
					</section><!-- content -->
				</div><!-- container -->
				<script src="js/index.js"></script>
				<?php
			}
		}
		?>
	</body>
</html>
