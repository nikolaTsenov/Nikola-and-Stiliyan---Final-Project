<?php
if ((isset ($_COOKIE['skin']) && $_COOKIE['skin'] == 'skin1') || !isset ($_COOKIE['skin'])) {
	$logo = "Logoto.png";
	$style = "style1";
	$loginStyle = "loginStyle1";
	$registerStyle = "regStyle1";
	$oppositeStyleName = "Щадящ очите";
	$oppositeStyleNameForClass = "eyeFriendly";
}
if ((isset ($_COOKIE['skin']) && $_COOKIE['skin'] == 'skin2')) {
	$logo = "newnewlogo.png";
	$style = "style2";
	$loginStyle = "loginStyle2";
	$registerStyle = "regStyle2";
	$oppositeStyleName = "Популярен";
	$oppositeStyleNameForClass = "popular";
}

?>