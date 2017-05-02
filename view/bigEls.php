<?php
include_once "header.php";
?>
		<aside class="leftAside">
			<h3 id="telCat">Категории - Големи електроуреди</h3>
			<ul id="telList">
				<li><a href="">Хладилна техника</a></li>
				<li><a href="">Перални &amp; сушилни за дрехи</a></li>
				<li><a href="">Съдомиялни машини</a></li>
				<li><a href="">Уреди за вграждане</a></li>
				<li><a href="">Готварски печки &amp; микровълнови</a></li>
				<li><a href="">Батерии, Климатици &amp; Уреди за отопление</a></li>
			</ul>
		</aside>
		<?php 
			// Include the register form when needed:
			include_once '../view/login.php';
		?>
		<!-- In the below section we will load all adds from the database, I will leave it empty for now -->
		<section id="articles">
			<h2 class="categories-header">Хладилна техника</h2>
            <div class="categsContainer" id="refrigerators">

            </div>
            <h2 class="categories-header">Перални &amp; сушилни за дрехи</h2>
            <div class="categsContainer" id="washingMachines">

            </div>
            <h2 class="categories-header">Съдомиялни машини</h2>
            <div class="categsContainer" id="dishWashers">

            </div>
            <h2 class="categories-header">Уреди за вграждане</h2>
            <div class="categsContainer" id="insertingDevices">

            </div>
            <h2 class="categories-header">Готварски печки &amp; Микровълнови</h2>
            <div class="categsContainer" id="ovens">

            </div>
            <h2 class="categories-header">Батерии, Климатици & Уреди за отопление</h2>
            <div class="categsContainer" id="airConditioners">

            </div>
        </section>
    <script src="../assets/js/bigElsProducts.js"></script>
<?php
include_once "footer.php";
?>