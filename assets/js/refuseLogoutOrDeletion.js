var refuses = document.getElementsByClassName("refuse");
for (var index = 0; index < refuses.length; index++) {
	refuses[index].addEventListener("click", function(event){
	    event.preventDefault()
	});	
}
function clickAccordion1() {
	//Get the element with id="acc1" and click on it
	document.getElementById("acc1").click();
}
function clickAccordion2() {
	//Get the element with id="acc2" and click on it
	document.getElementById("acc2").click();
}