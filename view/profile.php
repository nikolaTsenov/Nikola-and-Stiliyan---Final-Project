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
	<div class="errors" >
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
				<input type="text" name="changeUserName" id="changeUserName"/>
				<button type="submit" name="submitNameChange">Смени</button>
			</form>
			<form action="" class="changeName">
				<label for="changeUserName">Сменете името си </label>
				<input type="text" id="changeUserName"/>
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