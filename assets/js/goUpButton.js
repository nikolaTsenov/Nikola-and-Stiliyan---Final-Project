/**
 * This function will appear and disappear the goUp button in case the screen is over 599px.
 * y is matchMedia query
 */
window.onscroll = function() {goUp()};
// get the div of the button:
var goUpButton = document.getElementById('goUp');

function goUp() {
	if (y.matches) { // If media query matches
		// set a number for pixels:
		var pix = 100;
		// I will use jquery library to make the button disappear and appear:
		$(document).ready(function(){
	        $("#goUp").hide();
	        $(window).scroll(function(){
	        	
                 if($(window).scrollTop()>pix){
                    $("#goUp").fadeIn();
                 }
                 else
                 {
                    $("#goUp").fadeOut();
                 }
                 
	        });
	    });
	} else {
		// I don't need this function to anything in this case...
	}
}
// create matchMedia query:
var y = window.matchMedia("(min-width: 599px)")
goUp(y) // Call listener function at run time
y.addListener(goUp) // Attach listener function on state changes