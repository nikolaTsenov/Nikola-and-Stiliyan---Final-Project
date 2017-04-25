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
    <link rel="stylesheet" href="../assets/css/<?php echo $registerStyle; ?>.css" type="text/css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div id="goBack">
	<h1 id="siteHeading"><a href="../view/index.php"><img src="../assets/images/<?php echo $logo; ?>" alt="elBag_logo"/></a></h1>
	<p>Към основното <br />съдържание</p>
</div>
<div id="registration-form">
	<div class='fieldset'>
    <legend>Регистрационна форма</legend>
		<form action="?page=register" method="post" data-validate="parsley" >
			<div class='row'>
				<label for='username'>Вашият e-mail:</label><br />
				<input type="text" placeholder="e-mail" name='username' id='email' data-required="true" data-error-message="Your email is required" onblur="checkCharacters(this.value),checkUsername(this.value)">
				<span id="emailError" class ="error"></span>
			</div>
			<div class='row'>
				<label for='username'>Потребителско име:</label><br />
				<input type="text" placeholder="Изберете име" name='username' id='username' data-required="true" data-error-message="Your username is required" onblur="checkCharacters(this.value),checkUsername(this.value)">
				<span id="usernameError" class ="error"></span>
			</div>
			<div class='row'>
				<label for="password">Вашата парола:</label><br />
				<input type="password" placeholder="Въведете парола"  name='password' id="password" data-required="true" data-type="password" data-error-message="Your password is required" onblur="checkCharacters(this.value)">
				<span id="passwordError" class ="error"></span>
			</div>
			<div class='row'>
				<label for="repeatPassword">Потвърдете вашата парола:</label><br />
				<input type="password" placeholder="Повторете паролата" name='repeatPassword' id = "repeatPassword" data-required="true" data-error-message="Your confirm password is required" onkeyup = "validatePassword(this.value)" onblur="checkCharacters(this.value)">
					<span id="rePasswordError" class ="error" >	
						
					</span>
			</div>
			<input name = "submit" id ="submit" type="submit" value="Регистрация!">
		</form>
	</div>
</div>
<div id="goBack2">
	<p><a href="../view/index.php">Към основното съдържание</a></p>
</div>
</body>
</html>