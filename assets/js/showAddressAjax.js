
var username = document.getElementById('addressAnchor').innerHTML;

function displayAddress (forSend) {  
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
			var addressData = JSON.parse(this.responseText);
			console.log(addressData);
			// get informative paragraph and label of form for address change:
			var addressPar = document.getElementById('addressInfoMsg');
			var addressLabel = document.getElementById('addressInfoMsg2');
			
			if (addressData.constructor === Array) {
				addressPar.innerHTML = 'Адресът за доставка: '+addressData[1]+', '+addressData[2]+', ПК: '+addressData[3];
				
				addressLabel.innerHTML = '( '+addressData[1]+', '+addressData[2]+', ПК: '+addressData[3]+' )';
			} else {
				addressPar.innerHTML = 'Адресът за доставка: не сте дали адрес';
				
				addressLabel.innerHTML = '( няма адрес )';
			}
		}
	}
	xhttp.open('GET', '../controller/showAddressController.php?n='+forSend, true);
	xhttp.send(null);
}

document.addEventListener('DOMContentLoaded', function() {
	displayAddress(username);
});