// Call the first slide:
var slideIndex = 1;
showSlides(slideIndex);
// Function that navigates the slides forwards and backwards with the arrows:
function plusSlides(n) {
  showSlides(slideIndex += n);
}
// Function for displaying the selected by the dot slide:
function currentSlide(n) {
  showSlides(slideIndex = n);
}
// Function that displays the new slides:
function showSlides(n) {
	// Variable for loop-use:
	var i;
	// get the techBrand divs:
	var slides = document.getElementsByClassName("techBrand");
	// Get the dots below the image:
	var dots = document.getElementsByClassName("dot");
	// Start from the start when the last slide is passed:
    if (n > slides.length) {slideIndex = 1} 
    // Start from the end when slide is picked backwards from the first one:
    if (n < 1) {slideIndex = slides.length}
    // Hide all slides:
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    // Change appearance of all dots:
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    // Display the selected slide:
    slides[slideIndex-1].style.display = "block";
    // Display the dot that goes with the selected slide:
    dots[slideIndex-1].className += " active";
}

// Start to change slides from the first slide:
var slIndex = 0;
changeSlides();
// Function that automatically changes the slide every 5 seconds:
function changeSlides() {
	// Variable for loop-use:
    var j;
    // get the techBrand divs:
    var sls = document.getElementsByClassName("techBrand");
    // Get the dots below the image:
    var pts = document.getElementsByClassName("dot");
    // Hide all slides:
    for (j = 0; j < sls.length; j++) {
    	sls[j].style.display = "none";  
    }
    // Increase the number of the current slide by one:
    slIndex++;
    // If the slide is the last one start from 1:
    if (slIndex > sls.length) {slIndex = 1}
    // Change the name of the class of all dots:
    for (j = 0; j < pts.length; j++) {
    	pts[j].className = pts[j].className.replace(" active", "");
    }
    // Display the nest slide:
    sls[slIndex-1].style.display = "block"; 
    // Change the class of the dot that goes with the slide to 'active':
    pts[slIndex-1].className += " active";
    // Change image every 5 seconds:
    setTimeout(changeSlides, 5000);
}