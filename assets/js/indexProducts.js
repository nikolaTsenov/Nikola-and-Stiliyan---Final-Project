var div = document.getElementById("articles");

var selector = document.getElementById("currentSelectedDirectory").value;

console.log(selector);










var req = new XMLHttpRequest();
req.open('GET','../controller/indexController.php?curCat='+selector,true);
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
             +"<p>" + data[i].name + " </p>"
            +"<p>" + data[i].sname +" </p>";
            // + data[i].mname + " "
              // + data[i].price + " "
        htmlString += "<a href='' id='link-button-for-articles'>"+"виж тук"+"</a>";
        htmlString += "</div>";

    }

    div.insertAdjacentHTML('beforeend',htmlString);

}

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