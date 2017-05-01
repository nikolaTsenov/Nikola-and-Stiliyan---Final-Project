<?php
include_once "header.php";
?>
		<aside class="leftAside">
			<h3 id="telCat">Категории - Малки електроуреди</h3>
			<ul id="telList">
				<li><a href="">Прахосмукачки &amp; Ютии</a></li>
				<li><a href="">Приготвяне на напитки</a></li>
				<li><a href="">Кухненски уреди</a></li>
			</ul>
		</aside>
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles"></section>
    <script src="../assets/js/smallEls.js"></script>
<?php
include_once "footer.php";
?>