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

    </section>
    <!-- This is for prod
        <!-- This is for products -->
    <script src="../assets/js/electronPr.js" ></script>
<?php
include_once "footer.php";
?>