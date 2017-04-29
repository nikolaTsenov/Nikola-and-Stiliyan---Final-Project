<?php
    include_once "header.php";
    // set error msg:
    $errorMessage = isset($errorMessage) ? $errorMessage : '';
    // get the current dir from the url:
    $currentDir = $_SERVER['PHP_SELF'];
    // look for logiController in the url:
    if (strpos($currentDir, 'loginController') !== false) {
    	// in this case div.errors needs to be displayed
    	$errorsStyle = 'block';
    } else {
    	// in this case div.errors doesn't need to be displayed
    	$errorsStyle = 'none';
    }
    
?>
		<div class="errors" id="errorMess" style="display:<?php echo $errorsStyle; ?>" >
			<p class="errorMsg" ><?php echo $errorMessage; ?></p>
		</div>
		<aside class="leftAside">
			<h3 id="telCat">
				Категории - Телефони, Таблети &amp; Смарт технологии
			</h3>
			<ul id="telList">
				<li><a href="">Мобилни телефони</a></li>
				<li><a href="">Смарт часовници</a></li>
				<li><a href="">Таблети</a></li>
				<li><a href="">Външни батерии</a></li>
				<li><a href="">Аксесоари</a></li>
				<li><a href="">Smart Home &amp; VR очила</a></li>
			</ul>
		</aside>
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles">

                <h1 class="categories-header">ТЕЛЕФОН</h1>
        </section>
<?php
include_once "footer.php";
?>
