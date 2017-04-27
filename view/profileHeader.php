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
    <link rel="stylesheet" href="../assets/css/profile.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <header id="header">
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