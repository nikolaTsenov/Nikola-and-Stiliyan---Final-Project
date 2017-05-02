
function displayMobiles () { 
	
	
	
	/* Show all telephones */
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
			
			var htmlDiv = document.getElementById('telephones');
			
			var htmlString = "";
			
			for (var i =0; i<ourData.length; i++){
		        htmlString +="<div class='' id='mobilePhones"+i+"'><a href='../view/product.php?id="+ourData[i].id+"'>"

		            + "<img src =' "+ ourData[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		            // +"<h3>" + ourData[i].model + "</h3></a>"
		             // +"<p>" + ourData[i].cname + " </p>"
		            +"<p>" + ourData[i].products_name + " </p>"
		             +"<p>" + ourData[i].name + " </p>"
		            // +"<p>" + ourData[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString += "<a href='../view/product.php?id="+ourData[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString += "</div>";

		    }
			
			htmlDiv.innerHTML = htmlString;
		}
	}
	xhttp.open('GET', '../controller/getProductsFromSubCatService.php?sc=telephones', true);
	xhttp.send(null);
	
	/* Show all smartwatches */
	
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
			
			var htmlDiv2 = document.getElementById('smartWatches');
			
			var htmlString2 = "";
			
			for (var i =0; i<ourData2.length; i++){
		        htmlString2 +="<div class='' id='smartWatches"+i+"'><a href='../view/product.php?="+ourData2[i].id+"'>"

		            + "<img src =' "+ ourData2[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		             +"<h3>" + ourData2[i].model + "</h3></a>"
		            //  +"<p>" + ourData2[i].cname + " </p>"
		            // +"<p>" + ourData2[i].products_name + " </p>"
		             +"<p>" + ourData2[i].name + " </p>"
		            // +"<p>" + ourData2[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString2 += "<a href='../view/product.php?="+ourData2[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString2 += "</div>";

		    }
			
			htmlDiv2.innerHTML = htmlString2;
		}
	}
	xhttp2.open('GET', '../controller/getProductsFromSubCatService.php?sc=smartWatches', true);
	xhttp2.send(null);

	/* Show all tablets */
	
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
			
			var htmlDiv3 = document.getElementById('tablets');
			
			var htmlString3 = "";
			
			for (var i =0; i<ourData3.length; i++){
		        htmlString3 +="<div class='' id='tablets"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData3[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		            +"<h3>" + ourData3[i].model + "</h3></a>"
		             +"<p>" + ourData3[i].cname + " </p>"
		            +"<p>" + ourData3[i].products_name + " </p>"
		             +"<p>" + ourData3[i].name + " </p>"
		            +"<p>" + ourData3[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString3 += "<a href='../view/product.php?="+ourData3[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString3 += "</div>";

		    }
			
			htmlDiv3.innerHTML = htmlString3;
		}
	}
	xhttp3.open('GET', '../controller/getProductsFromSubCatService.php?sc=tablets', true);
	xhttp3.send(null);
	
	/* Show all bateries */
	
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
			
			var htmlDiv4 = document.getElementById('tablets');
			
			var htmlString4 = "";
			
			for (var i =0; i<ourData4.length; i++){
		        htmlString4 +="<div class='' id='bateries"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData4[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		            +"<h3>" + ourData4[i].model + "</h3></a>"
		             +"<p>" + ourData4[i].cname + " </p>"
		            +"<p>" + ourData4[i].products_name + " </p>"
		             +"<p>" + ourData4[i].name + " </p>"
		            +"<p>" + ourData4[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString4 += "<a href='../view/product.php?='"+ourData4[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString4 += "</div>";

		    }
			
			htmlDiv4.innerHTML = htmlString4;
		}
	}
	xhttp4.open('GET', '../controller/getProductsFromSubCatService.php?sc=bateries', true);
	xhttp4.send(null);
	
    /* Show all accessories */
	
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
			
			var htmlDiv5 = document.getElementById('tablets');
			
			var htmlString5 = "";
			
			for (var i =0; i<ourData5.length; i++){
		        htmlString5 +="<div class='' id='accessories"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData5[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		            +"<h3>" + ourData5[i].model + "</h3></a>"
		             +"<p>" + ourData5[i].cname + " </p>"
		            +"<p>" + ourData5[i].products_name + " </p>"
		             +"<p>" + ourData5[i].name + " </p>"
		            +"<p>" + ourData5[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString5 += "<a href='../view/product.php?="+ourData5[i].id+"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString5 += "</div>";

		    }
			
			htmlDiv5.innerHTML = htmlString5;
		}
	}
	xhttp5.open('GET', '../controller/getProductsFromSubCatService.php?sc=accessories', true);
	xhttp5.send(null);
	
	 /* Show all smart home and VR glasses */
	
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
			
			var htmlDiv6 = document.getElementById('tablets');
			
			var htmlString6 = "";
			
			for (var i =0; i<ourData6.length; i++){
		        htmlString5 +="<div class='' id='smartHome"+i+"'><a href='#'>"

		            + "<img src =' "+ ourData6[i].picture + "'  alt='tv'>"
		            // + data[i].warranty + " "
		            // + data[i].quantity + " "
		            +"<h3>" + ourData6[i].model + "</h3></a>"
		             +"<p>" + ourData6[i].cname + " </p>"
		            +"<p>" + ourData6[i].products_name + " </p>"
		             +"<p>" + ourData6[i].name + " </p>"
		            +"<p>" + ourData6[i].sname +" </p>";
		            // + data[i].mname + " "
		              // + data[i].price + " "
		        htmlString6 += "<a href='../view/product.php?="+ourData6[i].id +"' id='link-button-for-articles'>"+"виж тук"+"</a>";
		        htmlString6 += "</div>";

		    }
			
			htmlDiv6.innerHTML = htmlString6;
		}
	}
	xhttp6.open('GET', '../controller/getProductsFromSubCatService.php?sc=smartHome', true);
	xhttp6.send(null);
	
}


document.addEventListener('DOMContentLoaded', function() {
	displayMobiles();
});




/*

var req = new XMLHttpRequest();
req.open('GET','../controller/indexController.php?curCat='+selector,true);
req.onload = function () {

    var ourData = JSON.parse(req.responseText);
    renderHTML(ourData);

}

req.send();
*/
///*
//var req = new XMLHttpRequest();
//req.open('GET','../controller/showMobPhones.php',true);
//req.onload = function () {
//
//    var ourData = JSON.parse(req.responseText);
//    //var forRenderIn = document.getElementById('telephones');
//    renderHTML(ourData,document.getElementById('telephones'));
//
//}
//
//req.send();
///* Show SmartWatches */ 
//var req2 = new XMLHttpRequest();
//req2.open('GET','../controller/showSmartWatches.php',true);
//req2.onload = function () {
//
//    var ourData2 = JSON.parse(req.responseText);
//    //var forRenderIn = document.getElementById('telephones');
//    renderHTML(ourData2,document.getElementById('smartWatches'));
//
//}
//
//req2.send();

/*
function renderHTML(data,forRenderIn) {

    var htmlString = "";
    
    for (var i =0; i<data.length; i++){
        htmlString +="<div class='' id='mobilePhones"+i+"'><a href='#'>"

            + "<img src =' "+ data[i].picture + "'  alt='tv'>"
            // + data[i].warranty + " "
            // + data[i].quantity + " "
            +"<h3>" + data[i].model + "</h3></a>"
             +"<p>" + data[i].cname + " </p>"
            +"<p>" + data[i].products_name + " </p>"
             +"<p>" + data[i].name + " </p>"
            +"<p>" + data[i].sname +" </p>";
            // + data[i].mname + " "
              // + data[i].price + " "
        htmlString += "<a href='' id='link-button-for-articles'>"+"виж тук"+"</a>";
        htmlString += "</div>";

    }

    forRenderIn.insertAdjacentHTML('beforeend',htmlString);

}
*/
 // });












//
//
// var div = document.getElementById("articles");
// var btn = document.getElementById("defaultOpen");
//
// var req = new XMLHttpRequest();
// req.open('GET','../controller/indexController.php')
// req.onload = function () {
//
//     var ourData = JSON.parse(req.responseText);
//     renderHTML(ourData);
//
// }
//
// req.send();
//
// function renderHTML(data) {
//
//     var htmlString = "";
//
//
//     for (var i =0; i<data.length; i++){
//         htmlString +="<div class='products'><a href='#'>"
//             // + data[i].products_name + " "
//             // + data[i].name + " "
//             // + data[i].price + " "
//             + "<img src =' "+ data[i].picture + "'  alt='tv'>"
//             // + data[i].warranty + " "
//             // + data[i].quantity + " "
//             +"<h3>" + data[i].model + "</h3></a>";
//         // + data[i].cname + " "
//         // + data[i].mname + " "
//         htmlString += "<a href='' id='link-button-for-articles'>"+"виж тук"+"</a>";
//         htmlString += "</div>";
//     }
//
//     div.insertAdjacentHTML('beforeend',htmlString);
//
// }