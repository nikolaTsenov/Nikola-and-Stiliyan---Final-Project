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

        </section>
    <script src="../assets/js/bigEls.js"></script>
<?php
include_once "footer.php";
?>