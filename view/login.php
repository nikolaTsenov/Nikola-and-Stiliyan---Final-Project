<div id="register" class="modal">

	<form class="modal-content animate" action="/action_page.php">
		<div class="imgcontainer">
			<span onclick="document.getElementById('register').style.display='none'"
				class="close" title="Close Modal">&times;</span> <img
				src="../assets/images/register/avatar.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label><b>Вашият e-mail:</b></label> <input type="text"
				placeholder="Въведете e-mail" name="uname" required> <label><b>Вашата парола:</b></label>
			<input type="password" placeholder="Въведете парола" name="psw"
				required>

			<button type="submit">Влез</button>
			<input type="checkbox" checked="checked"> Запомни ме
		</div>

		<div class="container" >
			<button type="button" 
				onclick="document.getElementById('register').style.display='none'"
				class="cancelbtn">Изход</button>
			<span class="psw">Нямате регистрация? <a href="#">Регистрирайте се в <strong>elBag</strong>!</a></span> 
		</div>
	</form>
</div>