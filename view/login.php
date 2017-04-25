<?php $errorMessage = isset($errorMessage) ? $errorMessage : ''; ?>
<div id="register" class="modal">

	<form class="modal-content animate" action="../controller/loginController.php" method="post" >
		<div class="imgcontainer">
			<span onclick="document.getElementById('register').style.display='none'"
				class="close" title="Close Modal">&times;</span> <img
				src="../assets/images/register/avatar.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label><b>Вашият e-mail:</b></label> <input type="text"
				placeholder="Въведете e-mail" name="email" required> <label><b>Вашата парола:</b></label>
			<input type="password" placeholder="Въведете парола" name="psw"
				required>

			<button type="submit" name="submit" >Влез</button>
			<input type="checkbox" checked="checked"> Запомни ме
		</div>

		<div class="container" >
			<button type="button" 
				onclick="document.getElementById('register').style.display='none'"
				class="cancelbtn">Изход</button>
			<span class="psw">Нямате регистрация? <a href="../view/register.php">Регистрирайте се в <strong>elBag</strong>!</a></span> 
		</div>
	</form>
	<div class='error'>
		<?= $errorMessage ?>
	</div>
</div>