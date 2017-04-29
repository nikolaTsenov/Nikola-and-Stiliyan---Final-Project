<?php
    include_once "profileHeader.php";
    // set error msg:
    $errorMessage = isset($errorMessage) ? $errorMessage : '';
    // get the current dir from the url:
    $currentDir = $_SERVER['PHP_SELF'];
    // look for logiController in the url:
    if (strpos($currentDir, 'loginController') !== false) {
    	// in this case div.errors needs to be displayed
    	$errorsStyle = 'block';
    } else {
    	// in this case div.errors doesn't need to be displayed
    	$errorsStyle = 'none';
    }
    
?>
<div id="profileContainer">
	<div class="errors" id="errorMess">
		<p class="errorMsg" ><?php echo $errorMessage; ?></p>
	</div>
	<nav id="profileNavigation" class="tab">
		<button class="tablinks" onclick="openTab(event, 'profileManager')" id="defaultOpen">Управление на профила</button>
		<button class="tablinks" onclick="openTab(event, 'securityData')">Сигурност</button>
		<button class="tablinks" onclick="openTab(event, 'ordersData')">Поръчки</button>
		<button class="tablinks" onclick="openTab(event, 'favouritesData')">Любими</button>
	</nav>
	<div id="profileManager" class="mainContentOfSelected">
		<h1 class="myData">Моят Профил</h1>
		<div class="personalData">
			<div class="avatarContainer">
				<img src="" alt="" />
			</div>
			<form action="../controller/changeNameController.php" class="changeName" method="post" >
				<p><?php echo $user->name; ?></p>
				<label for="changeUserName">Сменете името на профила си </label>
				<input type="text" name="changeUserName" id="changeUserName" placeholder="<?php echo $user->name . "..."; ?>"/>
				<button type="submit" name="submitNameChange">Смени</button>
			</form>
			<form action="../controller/changeEmailController.php" class="changeName" method="post" >
				<p><?php echo $user->email; ?></p>
				<label for="changeEmail">Сменете e-mail-а си </label>
				<input type="text" name="changeEmail" id="changeEmail" placeholder="<?php echo $user->email . "..."; ?>"/>
				<button type="submit" name="submitEmailChange">Смени</button>
			</form>
			<form action="../controller/changeFirstNameController.php" class="changeName" method="post">
				<p><?php $fnmsg = isset($user->first_name) ? $user->first_name : 'недефинирано'; echo "Първото Ви име е " . $fnmsg; ?></p>
				<label for="changeFirstName">Първо име<?php echo " ( " . $fnmsg . " ) "; ?> </label>
				<input type="text" name="changeFirstName" id="changeFirstName" placeholder="<?php echo $fnmsg . "..."; ?>"/>
				<button type="submit" name="submitFirstNameChange">Смени</button>
			</form>
			<form action="../controller/changeLastNameController.php" class="changeName" method="post">
				<p><?php $lnmsg = isset($user->last_name) ? $user->last_name : 'недефинирана'; echo "Фамилията Ви е " . $lnmsg; ?></p>
				<label for="changeLastName">Фамилия<?php echo " ( " . $lnmsg . " ) "; ?> </label>
				<input type="text" name="changeLastName" id="changeLastName" placeholder="<?php echo $lnmsg . "..."; ?>"/>
				<button type="submit" name="submitLastNameChange">Смени</button>
			</form>
			<form action="../controller/changePhoneController.php" class="changeName" method="post">
				<p><?php $phmsg = isset($user->phone) ? $user->phone : 'няма телефон'; echo "Телефон: " . $phmsg; ?></p>
				<label for="changePhone">Телефон<?php echo " ( " . $phmsg . " ) "; ?> </label>
				<input type="text" name="changePhone" id="changePhone" placeholder="08XXXXXXXX"/>
				<button type="submit" name="submitPhoneChange">Смени</button>
			</form>
		</div>
		<button class="accordion" id="acc0">Смяна на изгледа на сайта</button>
		<div class="formPannel">
			<div class="forContent">
				<p id="profSkinsPar">Смени стила:</p>
	            <button onclick="clickAccordion0()" class="refuse" >Не желая да сменям текущия скин!</button>
	            <button class="<?php echo $oppositeStyleNameForClass; ?>" id="skin0"><?php echo $oppositeStyleName; ?></button>
            </div>
		</div>
		<button class="accordion" id="acc1">Излизане от профила</button>
		<form class="formPannel" id="sessDestroyForm" action="../controller/logoutController.php" method="post" >
			<div class="forContent">
				<label for="submitDestroy">Излез от профила си</label>
				<button onclick="clickAccordion1()" class="refuse" >Не още!</button>
				<input type="submit" name="submitDestroy" value="Изход" class="submitFormPannel" />
			</div>
		</form>
		<button class="accordion" id="acc2">Изтриване на профила</button>
		<form class="formPannel" id="deleteForm" action="../controller/deleteAccountController.php" method="post" >
			<div class="forContent">
				<label for="submitFormPannel" >Наистина ли искате да изтриете акаунта си? <i class="fa fa-frown-o" aria-hidden="true"></i></label>
				<button onclick="clickAccordion2()" class="refuse" >Не, оставам!</button>
				<input type="submit" name="submitDeleteAccount" value="Изтрий" class="submitFormPannel" />
			</div>
		</form>		
	</div>
	<div id="securityData" class="mainContentOfSelected">
	</div>
	<div id="ordersData" class="mainContentOfSelected">
	</div>
	<div id="favouritesData" class="mainContentOfSelected">
	</div>
</div>
<?php
	include_once "profileFooter.php";
?>