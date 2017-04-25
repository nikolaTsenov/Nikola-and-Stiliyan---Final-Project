<?php
include_once "header.php";
?>


		<aside class="leftAside">
			<h3 id="telCat">Категории - Лаптопи, IT продукти &amp; Офис</h3>
			<ul id="telList">
				<li><a href="">Лаптопи &amp; Аксесоари</a></li>
				<li><a href="">Настолни компютри &amp; Монитори</a></li>
				<li><a href="">PC компоненти</a></li>
				<li><a href="">Software</a></li>
				<li><a href="">Периферия</a></li>
				<li><a href="">Принтери &amp; Скенери</a></li>
				<li><a href="">Wireless &amp; Networking</a></li>
			</ul>
		</aside>
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles">

        </section>




<?php
include_once "footer.php";
?>