<?php
include_once "header.php";
?>
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
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
    	<section id="articles">
			<h2 class="categories-header">Телевизори &amp; Аксесоари</h2>
            <div class="categsContainer" id="televisions">

            </div>
            <h2 class="categories-header">Видео проектори &amp; Екрани</h2>
            <div class="categsContainer" id="videosScreens">

            </div>
            <h2 class="categories-header">Системи за домашно кино &amp; Аудио Hi-Fi</h2>
            <div class="categsContainer" id="homeKinoAndAudio">

            </div>
            <h2 class="categories-header">Електроника</h2>
            <div class="categsContainer" id="electronica">

            </div>
            <h2 class="categories-header">Конзоли &amp; Игри</h2>
            <div class="categsContainer" id="consolsAndGames">

            </div>
            <h2 class="categories-header">Фотоапарати</h2>
            <div class="categsContainer" id="photos">

            </div>
            <h2 class="categories-header">Видеокамери</h2>
            <div class="categsContainer" id="videoCameras">

            </div>
            <h2 class="categories-header">Фото &amp; Видеоаксесоари</h2>
            <div class="categsContainer" id="photoAndVideoCameras">

            </div>
   		 </section>
    <!-- This is for prod
        <!-- This is for products -->
    <script src="../assets/js/electronicsProduct.js" ></script>
<?php
include_once "footer.php";
?>