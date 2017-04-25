<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="elBag"/>
    <meta http-equiv="author" name="Nikola Tsenov, Stiliyan Blagoev" />
    <title>elBag</title>
    <link rel="stylesheet" href="../assets/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <?php
    include_once "../controller/skinController.php";
    ?>
    <link rel="stylesheet" href="../assets/css/<?php echo $style; ?>.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/<?php echo $loginStyle; ?>.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <nav id="userNav">
            <h1 id="siteHeading"><a href=""><img src="../assets/images/<?php echo $logo; ?>" alt="elBag_logo"/></a></h1>
            <form id="searchingForm">
                <input type="text" name="search" placeholder="Search..">
                <input type="submit" name="submitSearch" value="Търси" />
            </form>
            <?php
            // Include accountController to define whether the user is logged and has a valid session:
            include_once "../controller/accountController.php";
            // Include either logged.php or notLogged.php:
            include_once "../view/$accountBarPath.php";
            ?>
            <h2 id="subHeading">&quot;Добре дошли в <strong>elBag</strong> - най-големия сайт за електроника в България!&quot;</h2>
            <p id="skinsPar">Смени стила:</p>
            <button id="skin1">Популярен</button>
            <button id="skin2">Щадящ очите</button>
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
				    	if (strpos($currentDir, $links[$index]) !== false || (strpos($currentDir, 'homeController') !== false && $index == 0)) {
				    		echo "<li id='telephones'><a href='../view/" . $links[$index] . ".php' >$cats[$index]</a></li>";
				    	} else {
				    		echo "<li><a href='../view/" . $links[$index] . ".php' >$cats[$index]</a></li>";
				    	}
				    }
			    ?>
            </ul>
        </nav>
    </header>
    <div class="section-wrapper">