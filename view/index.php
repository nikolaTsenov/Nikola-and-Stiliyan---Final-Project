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
		<div class="errors" style="display:<?php echo $errorsStyle; ?>" >
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

                <h1 class="categories-header">Телевизори</h1>

            <div class="products">
                <a href="#">
                <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание</h3></a>
              <div>
                  <a href="" id="link-button-for-articles">виж тук</a>
              </div>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>
            <div class="products">
                <a href="#">
                    <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
                    <h3>Тук ще стои линка на обявата и леко описание Тук ще стои линка на обявата и леко описани</h3></a>
                <a href="" id="link-button-for-articles">виж тук</a>
            </div>

        </section>
<?php
include_once "footer.php";
?>
