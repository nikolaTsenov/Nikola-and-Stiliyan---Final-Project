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
		<form action="../controller/registerController.php" method="post" name="regForm" >
			<div class='row'>
				<label for='email'>Вашият e-mail:</label><br />
				<input type="text" placeholder="e-mail" name='email' id='email' onblur="checkMailLength(this.value)" required >
				<span id="emailError" class ="error"></span>
			</div>
			<div class='row'>
				<label for='username'>Потребителско име:</label><br />
				<input type="text" placeholder="Изберете име" name='username' id='username' onblur="checkCharacters(this.value)" required >
				<span id="usernameError" class ="error"></span>
			</div>
			<div class='row'>
				<label for="password">Вашата парола:</label><br />
				<input type="password" placeholder="Въведете парола"  name='password' id="password" class="passes" onblur="checkPassSymbols(this.value)" required ><br />
				<span id="passwordError" class ="error"></span><br />
			</div>
			<div class='row'>
				<label for="repeatPassword">Потвърдете вашата парола:</label><br />
				<input type="password" placeholder="Повторете паролата" name='repeatPassword' id = "repeatPassword" class="passes" onblur="checkPassSymbols(this.value)" required >
					<span id="rePasswordError" class ="error" >	
						
					</span>
			</div>
			<input name = "submit" id ="submit" type="submit" value="Регистрация!">
		</form>
	</div>
</div>
<?php
    // set error msg:
    $errorMessage = isset($errorMessage) ? $errorMessage : '';
    // get the current dir from the url:
    $currentDir = $_SERVER['PHP_SELF'];
    // look for logiController in the url:
    if (strpos($currentDir, 'registerController') !== false) {
    	// in this case div.errors needs to be displayed
    	$errorsStyle = 'block';
    } else {
    	// in this case div.errors doesn't need to be displayed
    	$errorsStyle = 'none';
    }
    
?>
<div class="errors" style="display:<?php echo $errorsStyle; ?>" >
	<p class="errorMsg" ><?php echo $errorMessage; ?></p>
</div>
<div id="goBack2">
	<p><a href="../view/index.php">Към основното съдържание</a></p>
</div>
<!-- The below js file is for front-end validation of the above form -->
<script src="../assets/js/registerValidation.js" ></script>
</body>
</html>