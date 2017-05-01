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
			<div class="mainAvatarWrapper">
				<div class="avatarContainer">
					<img src="<?php echo $pathToAvatarPic; ?>" alt="Avatar" />
				</div>
				<button class="accordion" id="accForm">Смяна на снимката</button>
				<form class="formPannel" action="../controller/changeAvatarController.php" method="post" enctype='multipart/form-data' onsubmit="return Validate(this);" >
					<input type='hidden' name='MAX_FILE_SIZE' value='5000000' />
					<div class="file-drop-area">
						<span class="fake-btn">Изберете снимка</span> <span
							class="file-msg js-set-number">или довлачете и пуснете</span>
						<input class="file-input" type="file"  name="fileUpload" onchange="javascript: document.getElementById('fileName').value = this.value" >
					</div>
					<input type="text" id="fileName" class="file_input_textbox" readonly="readonly">
					<input name="uploadSubmit" type="submit" value="Качи снимка" id="uploadSubmit" class="changeButton" >
				</form>
			</div>
			<p class="informativeMsg" ><?php echo "Вашето потребителско име е <strong>" . $user->name . "</strong>"; ?></p>
			<button class="accordion" id="accUname">Смяна потребителско име</button>
			<form class="formPannel" action="../controller/changeNameController.php" method="post" >
				<div class="forContent">
					<label for="changeUserName">Сменете името на профила си </label>
					<input type="text" name="changeUserName" id="changeUserName" placeholder="<?php echo $user->name . "..."; ?>"/>
					<button type="submit" name="submitNameChange" class="changeButton" >Смени</button>
				</div>
			</form>
			<p class="informativeMsg" ><?php echo "Вашият имейл е <strong>" . $user->email . "</strong>"; ?></p>
			<button class="accordion" id="accMail">Смяна на e-mail</button>
			<form action="../controller/changeEmailController.php" class="formPannel" method="post" >
				<div class="forContent">
					<label for="changeEmail">Сменете e-mail-а си </label>
					<input type="text" name="changeEmail" id="changeEmail" placeholder="<?php echo $user->email . "..."; ?>"/>
					<button type="submit" name="submitEmailChange" class="changeButton" >Смени</button>
				</div>
			</form>
			<p class="informativeMsg" ><?php $fnmsg = isset($user->first_name) ? $user->first_name : 'недефинирано'; echo "Първото Ви име е " . $fnmsg; ?></p>
			<button class="accordion" id="accFN">Редактиране на първо име</button>
			<form action="../controller/changeFirstNameController.php" class="formPannel" method="post">
				<div class="forContent">
					<label for="changeFirstName">Първо име<?php echo " ( " . $fnmsg . " ) "; ?> </label>
					<input type="text" name="changeFirstName" id="changeFirstName" placeholder="<?php echo $fnmsg . "..."; ?>"/>
					<button type="submit" name="submitFirstNameChange" class="changeButton" >Смени</button>
				</div>
			</form>
			<p class="informativeMsg" ><?php $lnmsg = isset($user->last_name) ? $user->last_name : 'недефинирана'; echo "Фамилията Ви е " . $lnmsg; ?></p>
			<button class="accordion" id="accLN">Редактиране на фамилия</button>
			<form action="../controller/changeLastNameController.php" class="formPannel" method="post">
				<div class="forContent">
					<label for="changeLastName">Фамилия<?php echo " ( " . $lnmsg . " ) "; ?> </label>
					<input type="text" name="changeLastName" id="changeLastName" placeholder="<?php echo $lnmsg . "..."; ?>"/>
					<button type="submit" name="submitLastNameChange" class="changeButton" >Смени</button>
				</div>
			</form>
			<p class="informativeMsg" ><?php $phmsg = isset($user->phone) ? $user->phone : 'няма телефон'; echo "Телефон: " . $phmsg; ?></p>
			<button class="accordion" id="accTel">Смяна на телефона</button>
			<form action="../controller/changePhoneController.php" class="formPannel" method="post">
				<div class="forContent">
					<label for="changePhone">Телефон<?php echo " ( " . $phmsg . " ) "; ?> </label>
					<input type="text" name="changePhone" id="changePhone" placeholder="08XXXXXXXX"/>
					<button type="submit" name="submitPhoneChange" class="changeButton" >Смени</button>
				</div>
			</form>
		
			<p class="informativeMsg" >Изглед(skin) на сайта: <?php echo $currentStyle; ?></p>
			<button class="accordion" id="acc0">Смяна на изгледа на сайта</button>
			<div class="formPannel">
				<div class="forContent">
					<p id="profSkinsPar">Смени стила:</p>
		            <button onclick="clickAccordion0()" class="refuse" >Не желая да сменям текущия скин!</button>
		            <button class="<?php echo $oppositeStyleNameForClass; ?>" id="skin0"><?php echo $oppositeStyleName; ?></button>
	            </div>
			</div>
			<p class="informativeMsg" >Излизане от профила</p>
			<button class="accordion" id="acc1">Излизане от профила</button>
			<form class="formPannel" id="sessDestroyForm" action="../controller/logoutController.php" method="post" >
				<div class="forContent">
					<label for="submitDestroy">Излез от профила си</label>
					<button onclick="clickAccordion1()" class="refuse" >Не още!</button>
					<input type="submit" name="submitDestroy" value="Изход" class="submitFormPannel" />
				</div>
			</form>
			<p class="informativeMsg" >Изтриване от профила</p>
			<button class="accordion" id="acc2">Изтриване на профила</button>
			<form class="formPannel" id="deleteForm" action="../controller/deleteAccountController.php" method="post" >
				<div class="forContent">
					<label for="submitFormPannel" >Наистина ли искате да изтриете акаунта си? <i class="fa fa-frown-o" aria-hidden="true"></i></label>
					<button onclick="clickAccordion2()" class="refuse" >Не, оставам!</button>
					<input type="submit" name="submitDeleteAccount" value="Изтрий" class="submitFormPannel" />
				</div>
			</form>	
		</div>	
	</div>
	<div id="securityData" class="mainContentOfSelected">
		<h1 class="myData">Сигурност</h1>
		<div class="personalData">
			<p class="informativeMsg" id="addressInfoMsg" ><?php //$adrmsg = isset($user->address_id) ? $user->address_id : 'няма адрес'; echo "Адресът за доставка е " . $adrmsg; ?></p>
			<button class="accordion" id="accAddr">Редактиране на адрес</button>
			<form class="formPannel" action="../controller/changeAddressController.php" method="post" >
				<div class="forContent">
					<table>
						<tr>
						<td><label for="changeAddress" id="addressInfoMsg2"><!--  Адрес за доставка--><?php // echo " ( " . $adrmsg . " ) "; ?> </label></td>
						</tr>
						<tr>
							<td><label for="changeAddressStr">Адрес(по шаблона) </label></td>
							<td><input type="text" name="changeAddressStr" id="changeAddressStr" placeholder="<?php echo "ул.Тинтява 6 ет.1 ап.1"; ?>"/></td>
						</tr>
						<tr>
							<td><label for="changeAddressCity">Град(по шаблона) </label></td>
							<td><input type="text" name="changeAddressCity" id="changeAddressCity" placeholder="<?php echo "гр. София"; ?>"/></td>
						</tr>
						<tr>
							<td><label for="changeAddressPC">Пощенски код(по шаблона) </label></td>
							<td><input type="text" name="changeAddressPC" id="changeAddressPC" placeholder="<?php echo "1700"; ?>"/></td>
						</tr>
						<tr>
							<td><button type="submit" name="submitAddressChange" class="changeButton" >Смени</button></td>
						</tr>
					</table>
				</div>
			</form>
			<?php // var_dump($user); // - for testing ?>
		</div>
	</div>
	<div id="ordersData" class="mainContentOfSelected">
	</div>
	<div id="favouritesData" class="mainContentOfSelected">
	</div>
</div>
<a href="" id="addressAnchor" style="display:none"><?php echo $user->name; ?></a>
<?php
	include_once "profileFooter.php";
?>