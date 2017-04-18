<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="elBag" />
	<meta http-equiv="author" name="Nikola Tsenov, Stiliyan Blagoev" />
	<title>elBag</title>
	<link rel="stylesheet" href="./assets/css/reset.css" type="text/css" />
	<link rel="stylesheet"
		href="./assets/font-awesome-4.7.0/css/font-awesome.min.css" />
	<?php 
	if ((isset ($_COOKIE['skin']) && $_COOKIE['skin'] == 'skin1') || !isset ($_COOKIE['skin'])) {
		$logo = "Logoto.png";
	?>
	<link rel="stylesheet" href="./assets/css/style1.css" type="text/css" />
	<?php 
	}
	if ((isset ($_COOKIE['skin']) && $_COOKIE['skin'] == 'skin2')) {
		$logo = "newnewlogo.png";
	?>
	<link rel="stylesheet" href="./assets/css/style2.css" type="text/css" />
	<?php 
	}
	?>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="userNav">
				<h1 id="siteHeading">
					<a href=""><img src="./assets/images/<?php echo $logo; ?>"
						alt="elBag_logo" /></a>
				</h1>
				<form id="searchingForm">
					<input type="text" name="search" placeholder="Search.."> <input
						type="submit" name="submitSearch" value="Търси" />
				</form>
				<?php
				if (isset ( $_SESSION ['username'] )) {
				?>
				<ul id="personalNav">
					<li><a href="#">Моят акаунт</a></li>
					<li><a href="#" style="color: #076d02"><i class="fa fa-heart"
							aria-hidden="true" style="color: #d80a0a"></i> Фаворити</a></li>
					<li><a href="#" style="color: #1261e2"><i
							class="fa fa-shopping-cart" aria-hidden="true"></i> Количка</a></li>
				</ul>
				<?php
				} else {
				?>
				<ul id="profileAccess">
					<li><a href="#">Регистрация</a></li>
					<li><a href="#">Влез в профила си</a></li>
				</ul>
				<?php
				}
				?>
				<h2 id="subHeading">
					&quot;Добре дошли в <strong>elBag</strong> - най-големия сайт за
					електроника в България!&quot;
				</h2>
				<p id="skinsPar">Смени стила:</p>
				<button id="skin1">Стил 1</button>
				<button id="skin2">Стил 2</button>
			</nav>
			<nav class="productNav">
				<ul id="categories">
					<li><a href="./index.php">Телефони, Таблети &amp; Смарт технологии</a></li>
					<li><a href="./laptops.php">Лаптопи, IT продукти
							&amp; Офис</a></li>
					<li id="telephones"><a href="./electronics.php">ТВ, Електроника &amp; Фото</a></li>
					<li><a href="./bigEls.php">Големи електроуреди</a></li>
					<li><a href="./smallEls.php">Малки електроуреди</a></li>
				</ul>
			</nav>
		</header>
		<aside class="leftAside">
			<h3 id="telCat">Категории - ТВ, Електроника &amp; Фото</h3>
			<ul id="telList">
				<li><a href="">Телевизори &amp; Аксесоари</a></li>
				<li><a href="">Видео проектори &amp; Екрани</a></li>
				<li><a href="">Системи за домашно кино &amp; Аудио Hi-Fi</a></li>
				<li><a href="">Електроника</a></li>
				<li><a href="">Конзоли &amp; Игри</a></li>
				<li><a href="">Фотоапарати</a></li>
				<li><a href="">Видеокамери</a></li>
				<li><a href="">Фото &amp; Видеоаксесоари</a></li>
			</ul>
		</aside>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles"></section>
		<div id="topBrands">
			<h1 id="brandsHeader">В нашия сайт може да изберете от хиляди
				артикули с различни брандове! Ето и нашите топ брандове в тази
				категория:</h1>
			<div class="slideshow-container">
				<?php
				$countTopBrands = 4;
				
				for($index = 1; $index <= $countTopBrands; $index ++) {
				?>
				<div class="techBrand fade">
					<div class="numbertext"><?php echo $index . " / " . $countTopBrands; ?></div>
					<div class="carouselImg">
						<img
							src="./assets/images/TopBrands/brand<?php echo $index; ?>.jpg"
							style="width: 100%; height: 100%">
					</div>
					<div class="text">Най-търсените брандове</div>
				</div>
				<?php
				}
				?>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a
					class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<div style="text-align: center">
				<?php
				for($index = 1; $index <= $countTopBrands; $index ++) {
					?>
					<span class="dot" onclick="currentSlide(<?php echo $index; ?>)"></span>
				<?php
				}
				?>
			</div>
		</div>
		<!-- The below button is hidden it serves to navigate to the top of the page -->
		<div id="goUp">
			<p>
				<a href="#userNav">Go Up <i class="fa fa-arrow-up"
					aria-hidden="true"></i></a>
			</p>
		</div>
		<footer id="footerContainer">
			<div id="footer">
				<div id="services">
					<h6>Услуги</h6>
					<ul>
						<li><a href="">Проверка на пратката</a></li>
						<li><a href="">Гаранция и сервиз</a></li>
						<li><a href="">30 дни право на връщане</a></li>
					</ul>
				</div>
				<div id="orders">
					<h6>Поръчкии и доставка</h6>
					<ul>
						<li><a href="">Моят акаунт</a></li>
						<li><a href="">Как да поръчам онлайн</a></li>
						<li><a href="">Доставка</a></li>
						<li><a href="">Често срещани въпроси</a></li>
					</ul>
				</div>
				<div id="contacts">
					<h6>Контакти</h6>
					<ul>
						<li><a href="">Пиши ни</a></li>
						<li><a href="">Къде да ни откриеш</a></li>
					</ul>
				</div>
			</div>
			<div id="rights">
				<marquee>Всички права запазени &#169; &#174; "Никола и Стилиян"!</marquee>
			</div>
		</footer>
	</div>
	<!-- The below js file is to regulate when the #goUp div to appear and disappear -->
	<script src="./assets/js/goUpButton.js"></script>
	<!-- The below js script is to fix the position of #productNav and to regulate it through matchMedia queries in JS -->
	<script src="./assets/js/fixProductNavPosition.js"></script>
	<!-- The below js script is for the carousel of thech brands -->
	<script src="./assets/js/carouselTechBrands.js"></script>
	<!-- The below js script is for changing skins -->
	<script src="./assets/js/changeSkin.js" ></script>
</body>
</html>