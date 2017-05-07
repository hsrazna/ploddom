<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	
	<link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="libs/bootstrap-grid/bootstrap-grid.css">
	<link rel="stylesheet" href="libs/bootstrap-select/bootstrap-select.css">
	<link rel="stylesheet" href="libs/font-awesome.min.css">
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="libs/superfish-master/dist/css/superfish.css">
	<link rel="stylesheet" href="css/main.css">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<?php require_once "include/header.php"; ?>
	<div class="az-blocks">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<?php require_once "include/sidebar.php"; ?>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
					<?php require_once "include/contacts.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "include/footer.php"; ?>

	<div class="hidden">
		<form id="small-dialog" class="zoom-anim-dialog common-form">
			<div class="ah-upimg">
				<img src="img/ah-popimg.png" style="width: 110px; height: 120px;" alt="ah-popimg.png">
			</div>
			<span class="form-title">ОСТАВЬТЕ ЗАЯВКУ</span>
			<span class="form-subtitle">И НАШ МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ В ТЕЧЕНИИ ОДНОЙ МИНУТЫ</span>
			<input type="text" class="phone" name="tel" placeholder="+7 (___) ___-__-__">
			<input type="submit" value="ОСТАВИТЬ ЗАЯВКУ">
		</form>
	</div>

	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="libs/bootstrap/bootstrap.min.js"></script>
	<script src="libs/bootstrap-select/bootstrap-select.js"></script>
	<script src="libs/owl.carousel/owl.carousel.min.js"></script>
	<script src="libs/superfish-master/dist/js/hoverIntent.js"></script>
	<script src="libs/superfish-master/dist/js/superfish.min.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>
