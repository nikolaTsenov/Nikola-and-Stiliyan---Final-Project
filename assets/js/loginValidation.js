// Get e-mail input:
var email = document.getElementById('email');

// Get submit button:
var submitButton = document.getElementById('submit');

// Email validation:
// Define security limits for email:
var emailDownSecurityLimit = 5;
var emailUpperSecurityLimit = 40;
// Set flag for valid email:
var validEmail = true;
/**
 * This function disables the submit button if certain email requirements are not met onblur
 * First if else statement is for validating the string length
 * Second if else statement is for checking whether the string contains "@" and "."
 */
email.onblur = function () {
	if (email.value.trim().length < emailDownSecurityLimit) {
		validEmail = false;
		document.getElementById("emailError").innerHTML = "Вашият e-mail трябва да е от поне "+emailDownSecurityLimit+" символа!";
		submitButton.disabled = true;
	} else if(email.value.trim().length > emailUpperSecurityLimit) {
		validEmail = false;
		document.getElementById("emailError").innerHTML = "Вашият e-mail не може да превишава "+emailUpperSecurityLimit+" символа!";
		submitButton.disabled = true;
	} else {
		validEmail = true;
		document.getElementById("emailError").innerHTML = "";
		submitButton.disabled = false;
	}
	var emailStr = email.value;
	if (emailStr.includes("@") === false || emailStr.includes(".") === false) {
		validEmail = false;
		document.getElementById("emailError").innerHTML = "Невалиден e-mail!";
		submitButton.disabled = true;
	} else {
		validEmail = true;
		document.getElementById("emailError").innerHTML = "";
		submitButton.disabled = false;
	}
}
/**
 * This function serves to complete the onblur function by setting behavior onkeyup
 */
email.onkeyup = function () {
	if (!validEmail) {
		document.getElementById("emailError").innerHTML = "";
	}
	if (email.value.trim().length < emailDownSecurityLimit) {
		submitButton.disabled = true;
	}
	if (email.value.trim().length >= emailDownSecurityLimit) {
		submitButton.disabled = false;
	}
	if (email.value.trim().length > emailUpperSecurityLimit) {
		submitButton.disabled = false;
	}
}

//Password validation:
/**
 * This function disables the submit button if certain password requirements are not met onblur
 * The if else statement is for validating the string length
 */
function checkPassSymbols (characters) {
	var passDownSecurityLimit = 6;
	var passUpperSecurityLimit = 30;
	if((characters.length < passDownSecurityLimit) || (characters.length > passUpperSecurityLimit)) {
		document.getElementById('submit').disabled = true;
		document.getElementById('passwordError').innerHTML = 'Моля използвайте между '+passDownSecurityLimit+' и '+passUpperSecurityLimit+' символа за парола.';
	}else {
		document.getElementById('submit').disabled = false;
		document.getElementById('passwordError').innerHTML = '';
	} 
}

