/**
 * Get the value of the cookie with name = "skin"
 * Take the cookiename as parameter (cname).
 * Create a variable (name) with the text to search for (cname + "=").
 * Decode the cookie string, to handle cookies with special characters, e.g. '$'
 * Split document.cookie on semicolons into an array called ca (ca = decodedCookie.split(';')).
 * Loop through the ca array (i = 0; i < ca.length; i++), and read out each value c = ca[i]).
 * If the cookie is found (c.indexOf(name) == 0), return the value of the cookie (c.substring(name.length, c.length).
 * If the cookie is not found, return "".
 */
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

var cookieName = "skin";
var getSkinCookieValue = getCookie(cookieName);
var newCookieValue;

if (getSkinCookieValue == "skin1") {
	newCookieValue = "skin2";
} else {
	newCookieValue = "skin1";
}
	
var skinButton = document.getElementById('skin0');	
skinButton.onclick = function() {setSkinCookie('skin',newCookieValue,365)};

/**
 * 
 * @param cookieName - explained below
 * @param cookieValue - explained below
 * @param expDays - explained below
 * The function sets cookie and reloads page in order for the new cookie to take effect
 */
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