function displaySmallEls () { 
	
	
	
	/* Show all hoovers  */
	if(typeof XMLHttpRequest !== 'undefined') xhttp = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			//console.log(xhttp.responseText); - for testing
			var ourData = JSON.parse(xhttp.responseText);
			console.log(xhttp.responseText);
			var htmlDiv = document.getElementById('hoovers');
			
			var htmlString = "";
			
			for (var i =0; i<ourData.length; i++){
		        htmlString +="<div class='products' id='hoovers"+i+"'><a href='../view/product.php?id="+ourData[i].id+"'>"

		            + "<img src =' "+ ourData[i].picture + "'  alt='tv'>"
		           
		            +"<p>" + ourData[i].products_name + " </p>"
		           
		        htmlString += "<a href='../view/product.php?id="+ourData[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString += "</div>";

		    }
			
			htmlDiv.innerHTML = htmlString;
		}
	}
	xhttp.open('GET', '../controller/getProductsFromSubCatService.php?sc=hoovers', true);
	xhttp.send(null);
	
	/* Show all preparingDrinks */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp2 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp2 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp2.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData2 = JSON.parse(xhttp2.responseText);
			console.log(xhttp2.responseText);
			var htmlDiv2 = document.getElementById('preparingDrinks');
			
			var htmlString2 = "";
			
			for (var i =0; i<ourData2.length; i++){
		        htmlString2 +="<div class='products' id='preparingDrinks"+i+"'><a href='../view/product.php?="+ourData2[i].id+"'>"

		            + "<img src =' "+ ourData2[i].picture + "'  alt='tv'>"
		            
		             +"<p>" + ourData2[i].products_name + " </p>"
		             
		        htmlString2 += "<a href='../view/product.php?id="+ourData2[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString2 += "</div>";

		    }
			
			htmlDiv2.innerHTML = htmlString2;
		}
	}
	xhttp2.open('GET', '../controller/getProductsFromSubCatService.php?sc=preparingDrinks', true);
	xhttp2.send(null);

	/* Show all kitchenAppliances */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp3 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp3 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp3.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData3 = JSON.parse(xhttp3.responseText);
			console.log(ourData3);
			var htmlDiv3 = document.getElementById('kitchenAppliances');
			
			var htmlString3 = "";
			
			for (var i =0; i<ourData3.length; i++){
		        htmlString3 +="<div class='products' id='kitchenAppliances"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData3[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData3[i].products_name + " </p>"
		             
		        htmlString3 += "<a href='../view/product.php?id="+ourData3[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString3 += "</div>";

		    }
			
			htmlDiv3.innerHTML = htmlString3;
		}
	}
	xhttp3.open('GET', '../controller/getProductsFromSubCatService.php?sc=kitchenAppliances', true);
	xhttp3.send(null);
	
}


document.addEventListener('DOMContentLoaded', function() {
	displaySmallEls();
});
