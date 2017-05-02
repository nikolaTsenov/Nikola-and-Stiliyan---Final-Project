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
				<li><a href="#telephones">Мобилни телефони</a></li>
				<li><a href="#smartWatches">Смарт часовници</a></li>
				<li><a href="#tablets">Таблети</a></li>
				<li><a href="#bateries">Външни батерии</a></li>
				<li><a href="#accessories">Аксесоари</a></li>
				<li><a href="#smartHome">Smart Home &amp; VR очила</a></li>
			</ul>
		</aside>
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles">
			
            <h2 class="categories-header">Мобилни телефони</h2>
            <div id="telephones">

            </div>
            <div class="seeAllFromCat" >
            	<a href="#">Виж всички</a>
            </div>
            <h2 class="categories-header">Смарт часовници</h2>
            <div id="smartWatches">

            </div>
            <h2 class="categories-header">Таблети</h2>
            <div id="tablets">

            </div>
            <h2 class="categories-header">Външни батерии</h2>
            <div id="bateries">

            </div>
            <h2 class="categories-header">Аксесоари</h2>
            <div id="accessories">

            </div>
            <h2 class="categories-header">Smart Home&amp;VR очила </h2>
            <div id="smartHome">

            </div>
        </section>


<!-- This is for products -->
<script src="../assets/js/indexProducts.js" ></script>
<?php
include_once "footer.php";
?>
