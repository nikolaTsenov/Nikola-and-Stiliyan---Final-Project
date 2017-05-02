function displayElectronics () { 
	
	
	
	/* Show all laptops and televisions */
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
			var htmlDiv = document.getElementById('televisions');
			
			var htmlString = "";
			
			for (var i =0; i<ourData.length; i++){
		        htmlString +="<div class='products' id='televisions"+i+"'><a href='../view/product.php?id="+ourData[i].id+"'>"

		            + "<img src =' "+ ourData[i].picture + "'  alt='tv'>"
		           
		            +"<p>" + ourData[i].products_name + " </p>"
		           
		        htmlString += "<a href='../view/product.php?id="+ourData[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString += "</div>";

		    }
			
			htmlDiv.innerHTML = htmlString;
		}
	}
	xhttp.open('GET', '../controller/getProductsFromSubCatService.php?sc=televisions', true);
	xhttp.send(null);
	
	/* Show all computers and videosScreens */
	
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
			var htmlDiv2 = document.getElementById('videosScreens');
			
			var htmlString2 = "";
			
			for (var i =0; i<ourData2.length; i++){
		        htmlString2 +="<div class='products' id='videosScreens"+i+"'><a href='../view/product.php?="+ourData2[i].id+"'>"

		            + "<img src =' "+ ourData2[i].picture + "'  alt='tv'>"
		            
		             +"<p>" + ourData2[i].products_name + " </p>"
		             
		        htmlString2 += "<a href='../view/product.php?id="+ourData2[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString2 += "</div>";

		    }
			
			htmlDiv2.innerHTML = htmlString2;
		}
	}
	xhttp2.open('GET', '../controller/getProductsFromSubCatService.php?sc=videosScreens', true);
	xhttp2.send(null);

	/* Show all homeKinoAndAudio */
	
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
			
			var htmlDiv3 = document.getElementById('homeKinoAndAudio');
			
			var htmlString3 = "";
			
			for (var i =0; i<ourData3.length; i++){
		        htmlString3 +="<div class='products' id='homeKinoAndAudio"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData3[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData3[i].products_name + " </p>"
		             
		        htmlString3 += "<a href='../view/product.php?id="+ourData3[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString3 += "</div>";

		    }
			
			htmlDiv3.innerHTML = htmlString3;
		}
	}
	xhttp3.open('GET', '../controller/getProductsFromSubCatService.php?sc=homeKinoAndAudio', true);
	xhttp3.send(null);
	
	/* Show all electronica */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp4 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp4 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp4.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData4 = JSON.parse(xhttp4.responseText);
			
			var htmlDiv4 = document.getElementById('electronica');
			
			var htmlString4 = "";
			
			for (var i =0; i<ourData4.length; i++){
		        htmlString4 +="<div class='products' id='electronica"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData4[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		           // +"<h3>" + ourData4[i].model + "</h3></a>"
		           //  +"<p>" + ourData4[i].cname + " </p>"
		            +"<p>" + ourData4[i].products_name + " </p>"
		           //  +"<p>" + ourData4[i].name + " </p>"
		           // +"<p>" + ourData4[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString4 += "<a href='../view/product.php?id='"+ourData4[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString4 += "</div>";

		    }
			
			htmlDiv4.innerHTML = htmlString4;
		}
	}
	xhttp4.open('GET', '../controller/getProductsFromSubCatService.php?sc=electronica', true);
	xhttp4.send(null);
	
    /* Show all consolsAndGames */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp5 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp5 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp5.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData5 = JSON.parse(xhttp5.responseText);
			
			var htmlDiv5 = document.getElementById('consolsAndGames');
			
			var htmlString5 = "";
			
			for (var i =0; i<ourData5.length; i++){
		        htmlString5 +="<div class='products' id='consolsAndGames"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData5[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData5[i].products_name + " </p>"
		           
		        htmlString5 += "<a href='../view/product.php?id="+ourData5[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString5 += "</div>";

		    }
			
			htmlDiv5.innerHTML = htmlString5;
		}
	}
	xhttp5.open('GET', '../controller/getProductsFromSubCatService.php?sc=consolsAndGames', true);
	xhttp5.send(null);
	
	 /* Show all photos */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp6 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp6 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp6.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData6 = JSON.parse(xhttp6.responseText);
			
			var htmlDiv6 = document.getElementById('photos');
			
			var htmlString6 = "";
			
			for (var i =0; i<ourData6.length; i++){
		        htmlString6 +="<div class='products' id='photos"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData6[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData6[i].products_name + " </p>"
		           
		        htmlString6 += "<a href='../view/product.php?id="+ourData6[i].id +"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString6 += "</div>";

		    }
			
			htmlDiv6.innerHTML = htmlString6;
		}
	}
	xhttp6.open('GET', '../controller/getProductsFromSubCatService.php?sc=photos', true);
	xhttp6.send(null);
	
	/* Show all videoCameras */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp7 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp7 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp7.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData7 = JSON.parse(xhttp7.responseText);
			
			var htmlDiv7 = document.getElementById('videoCameras');
			
			var htmlString7 = "";
			
			for (var i =0; i<ourData7.length; i++){
		        htmlString5 +="<div class='products' id='videoCameras"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData7[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData7[i].products_name + " </p>"
		           
		        htmlString7 += "<a href='../view/wirelessNetWorking.php?id="+ourData7[i].id +"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString7 += "</div>";

		    }
			
			htmlDiv7.innerHTML = htmlString7;
		}
	}
	xhttp7.open('GET', '../controller/getProductsFromSubCatService.php?sc=videoCameras', true);
	xhttp7.send(null);
	
	/* Show all photoAndVideoCameras */
	
	if(typeof XMLHttpRequest !== 'undefined') xhttp8 = new XMLHttpRequest();
	else {
	   var versions = ["MSXML2.XmlHttp.5.0", 
				        "MSXML2.XmlHttp.4.0",
				        "MSXML2.XmlHttp.3.0", 
				        "MSXML2.XmlHttp.2.0",
				        "Microsoft.XmlHttp"]
	
	for(var i = 0; i < versions.length; i++) {
	   try {
	       xhttp8 = new ActiveXObject(versions[i]);
	       break;
	   }
	   catch(e){}
	} // end for
	}
	xhttp7.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// successfuly received response
			var ourData8 = JSON.parse(xhttp7.responseText);
			
			var htmlDiv8 = document.getElementById('photoAndVideoCameras');
			
			var htmlString8 = "";
			
			for (var i =0; i<ourData8.length; i++){
		        htmlString5 +="<div class='products' id='photoAndVideoCameras"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData8[i].picture + "'  alt='tv'>"
		            
		            +"<p>" + ourData8[i].products_name + " </p>"
		           
		        htmlString8 += "<a href='../view/wirelessNetWorking.php?id="+ourData8[i].id +"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString8 += "</div>";

		    }
			
			htmlDiv8.innerHTML = htmlString8;
		}
	}
	xhttp8.open('GET', '../controller/getProductsFromSubCatService.php?sc=photoAndVideoCameras', true);
	xhttp8.send(null);
	
}


document.addEventListener('DOMContentLoaded', function() {
	displayElectronics();
});