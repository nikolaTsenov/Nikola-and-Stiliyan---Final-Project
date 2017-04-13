/**
 * This function will fix the position of the product in case the screen is over 599px.
 * x is matchMedia query
 */
window.onscroll = function() {fixCategories()};

function fixCategories() {
	if (x.matches) { // If media query matches
		// get the user navigation:
		var userNav = document.getElementById('userNav'); 
		// get the height of the user navigation to determine when to fix the product navigation:
		var userNavHeight = userNav.clientHeight;
		// get the product navigation:
		var productNav = document.getElementsByClassName("productNav");
		// create a flag that indicates the scroll if the scroll is over 'userNavHeight' or not:
		var scrollFlag = false;
		//console.log(document.body.scrollTop);
		// fix the position of productNav and set the scrollFlag value:
	    if (document.body.scrollTop > userNavHeight || document.documentElement.scrollTop > userNavHeight) {
	    	for (var index=0; index < productNav.length; index++) {
	    		productNav[index].className = "productNavFixed";
	    	}
	    	scrollFlag = true;
	    } else {
	    	scrollFlag = false;
	    }
	    // get the elements of the new class of the product navigation
	    var productNavFixed = document.getElementsByClassName("productNavFixed");
	    // if the scroll is over 'userNavHeight' return the old class of the product navigation:
	    if (!scrollFlag && productNavFixed !== null) {
	    	for (var index2=0; index2 < productNavFixed.length; index2++) {
	    		productNavFixed[index2].className = "productNav";
	    	}
	    }
	} else {
		// I don't need this function to anything in this case...
	}
}
// create matchMedia query:
var x = window.matchMedia("(min-width: 599px)")
fixCategories(x) // Call listener function at run time
x.addListener(fixCategories) // Attach listener function on state changes