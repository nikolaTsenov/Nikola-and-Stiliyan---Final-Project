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
			<h2 class="categories-header">Лаптопи &amp; Аксесоари</h2>
            <div id="laptopsAndAcc">

            </div>
            <h2 class="categories-header">Настолни компютри &amp; Монитори</h2>
            <div id="computers">

            </div>
            <h2 class="categories-header">PC компоненти</h2>
            <div class="categsContainer" id="pcComponents">

            </div>
            <h2 class="categories-header">Software</h2>
            <div class="categsContainer" id="software">

            </div>
            <h2 class="categories-header">Периферия</h2>
            <div class="categsContainer" id="perifery">

            </div>
            <h2 class="categories-header">Принтери &amp; Скенери </h2>
            <div class="categsContainer" id="printers">

            </div>
            <h2 class="categories-header">Wireless &amp; Networking </h2>
            <div class="categsContainer" id="wirelessNetWorking">

            </div>
        </section>


    <!-- This is for products -->
    <script src="../assets/js/laptopsProducts.js" ></script>

<?php
include_once "footer.php";
?>