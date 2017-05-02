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
		<section id="articles">
			<h2 class="categories-header">Прахосмукачки &amp; Ютии</h2>
            <div class="categsContainer" id="hoovers">

            </div>
            <h2 class="categories-header">Приготвяне на напитки</h2>
            <div class="categsContainer" id="preparingDrinks">

            </div>
            <h2 class="categories-header">Кухненски уреди</h2>
            <div class="categsContainer" id="kitchenAppliances">

            </div>
		</section>
    <script src="../assets/js/smallElsProducts.js"></script>
<?php
include_once "footer.php";
?>