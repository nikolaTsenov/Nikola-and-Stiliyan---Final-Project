// Get the two buttons for changing skin:
var skin1 = document.getElementById('skin1');
var skin2 = document.getElementById('skin2');
// Assign them a function with three parameters:
// 1 - cookie name; 2 - cookie value; 3 - expiration days;
skin1.onclick = function() {setSkinCookie('skin','skin1',365)};
skin2.onclick = function() {setSkinCookie('skin','skin2',365)};

function setSkinCookie(cookieName, cookieValue, expDays) {
	var date = new Date();
	// Set expiration time:
    date.setTime(date.getTime() + (expDays*24*60*60*1000));
    // Prepare the expiration time for participating in the cookie set(with a new var 'expires'):
    var expires = "expires="+ date.toUTCString();
    // Set cookie:
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    // Reload the screen after setting the cookie:
    window.location.reload(true);
}