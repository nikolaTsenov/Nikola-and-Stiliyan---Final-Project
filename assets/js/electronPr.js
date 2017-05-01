var div = document.getElementById("articles");

var req = new XMLHttpRequest();
req.open('GET','../controller/electronController.php',true);
req.onload = function () {

    var ourData = JSON.parse(req.responseText);
    renderHTML(ourData);

}

req.send();

function renderHTML(data) {

    var htmlString = "";


    for (var i =0; i<data.length; i++){
        htmlString +="<div class='products'><a href='#'>"

            + "<img src =' "+ data[i].picture + "'  alt='tv'>"
            // + data[i].warranty + " "
            // + data[i].quantity + " "
            +"<h3>" + data[i].model + "</h3></a>"
            +"<p>" + data[i].cname + " </p>"
            +"<p>" + data[i].products_name + " </p>"
            +"<p>" + data[i].name + " </p>";
        // + data[i].mname + " "
        // + data[i].price + " "
        htmlString += "<a href='' id='link-button-for-articles'>"+"виж тук"+"</a>";
        htmlString += "</div>";

    }

    div.insertAdjacentHTML('beforeend',htmlString);

}