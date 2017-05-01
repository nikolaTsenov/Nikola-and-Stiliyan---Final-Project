var div = document.getElementById("articles");
// var btn = document.getElementById("btn");
//
// btn.addEventListener("click",function () {

    var req = new XMLHttpRequest();
    req.open('GET','http://localhost/php/Nikola-and-Stiliyan---Final-Project/controller/indexController.php')
    req.onload = function () {

        var ourData = JSON.parse(req.responseText);
        renderHTML(ourData);

    }

    req.send();


// });

function renderHTML(data) {

    var htmlString = "";


    for (var i =0; i<data.length; i++){
        htmlString +="<div class='products'><a href='#'>"
            // + data[i].products_name + " "
            // + data[i].name + " "
            // + data[i].price + " "
            + "<img src =' "+ data[i].picture + "'  alt='tv'>"
            // + data[i].warranty + " "
            // + data[i].quantity + " "
           +"<h3>" + data[i].model + "</h3></a>";
            // + data[i].cname + " "
            // + data[i].mname + " "
        htmlString += "<a href='' id='link-button-for-articles'>"+"виж тук"+"</a>";
        htmlString += "</div>";
    }

    div.insertAdjacentHTML('beforeend',htmlString);

}



