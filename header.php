<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="elBag"/>
    <meta http-equiv="author" name="Nikola Tsenov, Stiliyan Blagoev" />
    <title>elBag</title>
    <link rel="stylesheet" href="./assets/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="./assets/font-awesome-4.7.0/css/font-awesome.min.css"/>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <nav id="userNav">
            <h1 id="siteHeading"><a href=""><img src="./assets/images/<?php echo $logo; ?>" alt="elBag_logo"/></a></h1>
            <form id="searchingForm">
                <input type="text" name="search" placeholder="Search..">
                <input type="submit" name="submitSearch" value="Търси" />
            </form>
            <?php
            if (isset($_SESSION['username'])) {
                ?>
                <ul id="personalNav">
                    <li><a href="#">Моят акаунт</a></li>
                    <li><a href="#" style="color:#076d02"><i class="fa fa-heart" aria-hidden="true" style="color:#d80a0a" ></i> Фаворити</a></li>
                    <li><a href="#" style="color:#1261e2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Количка</a></li>
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
            <h2 id="subHeading">&quot;Добре дошли в <strong>elBag</strong> - най-големия сайт за електроника в България!&quot;</h2>
            <p id="skinsPar">Смени стила:</p>
            <button id="skin1">Стил 1</button>
            <button id="skin2">Стил 2</button>
        </nav>
        <nav class="productNav">
            <ul id="categories">
            	<?php 
				    $currentDir = $_SERVER['PHP_SELF'];
				    
				    $cats = array ('Телефони, Таблети &amp; Смарт технологии',
				    				'Лаптопи, IT продукти &amp; Офис',
				    				'ТВ, Електроника &amp; Фото',
				    				'Големи електроуреди',
				    				'Малки електроуреди'
				    );
				    $links = array ('index',
				    				'laptops',
				    				'electronics',
				    				'bigEls',
				    				'smallEls'
				    );
				    
				    for ($index = 0; $index < 5; $index++) {
				    	if (strpos($currentDir, $links[$index]) !== false) {
				    		echo "<li id='telephones'><a href='./" . $links[$index] . ".php' >$cats[$index]</a></li>";
				    	} else {
				    		echo "<li><a href='./" . $links[$index] . ".php' >$cats[$index]</a></li>";
				    	}
				    }
			    ?>
            </ul>
        </nav>
    </header>
    <div class="section-wrapper">