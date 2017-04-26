// Get e-mail input:
var email = document.getElementById('email');
//Get name input:
var name = document.getElementById('username');

// Get submit button:
var submitButton = document.getElementById('submit');

// Email validation:
//Define security limits for email:
var emailDownSecurityLimit = 5;
var emailUpperSecurityLimit = 40;
// Set flags for valid email:
var validEmail = true;
/**
 * 
 * @param characters
 * @returns checks if the mail is the desired length
 * checks if the mail contains "@" or "."
 */
function checkMailLength (characters) {
	if((characters.length < emailDownSecurityLimit) || (characters.length > emailUpperSecurityLimit)) {
		validEmail = false;
		document.getElementById('submit').disabled = true;
		document.getElementById('emailError').innerHTML = 'Моля използвайте между '+emailDownSecurityLimit+' и '+emailUpperSecurityLimit+' символа за e-mail.';
	} else if(characters.includes("@") === false || characters.includes(".") === false) {
		validEmail = false;
		document.getElementById('submit').disabled = true;
		document.getElementById('emailError').innerHTML = 'Моля въведете валиден e-mail.';
	} else {
		validEmail = true;
		document.getElementById('submit').disabled = false;
		document.getElementById('emailError').innerHTML = '';
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
// Name validation:
/**
 * This function disables the submit button if certain name requirements are not met onblur
 * The if else statement is for validating the string length
 */
function checkCharacters (characters) {
	var nameDownSecurityLimit = 3;
	var nameUpperSecurityLimit = 25;
	if((characters.length < nameDownSecurityLimit) || (characters.length > nameUpperSecurityLimit)) {
		document.getElementById('submit').disabled = true;
		document.getElementById('usernameError').innerHTML = 'Моля използвайте между '+nameDownSecurityLimit+' и '+nameUpperSecurityLimit+' символа за име.';
	}else {
		document.getElementById('submit').disabled = false;
		document.getElementById('usernameError').innerHTML = '';
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

