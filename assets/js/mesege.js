function display() {

    if (typeof XMLHttpRequest !== 'undefined') xhttp = new XMLHttpRequest();
    else {
        var versions = ["MSXML2.XmlHttp.5.0",
            "MSXML2.XmlHttp.4.0",
            "MSXML2.XmlHttp.3.0",
            "MSXML2.XmlHttp.2.0",
            "Microsoft.XmlHttp"
        ]

        for (var i = 0; i < versions.length; i++) {
            try {
                xhttp = new ActiveXObject(versions[i]);
                break;
            } catch (e) {}
        } // end for
    }


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // successfuly received response
            //console.log(xhttp.responseText); - for testing
            var commenT = JSON.parse(xhttp.responseText);
            console.log(commenT);
            var htmlDiv = document.getElementById('comment_logs');

            var htmlString = "";

            for (var i = 0; i < commenT.length; i++) {
                htmlString += "<div class='comments_content'>";
                htmlString += "<p id='comm-time'>" + commenT[i].person_name + "</p>";
                // htmlString += "<p id='comm-time'><a href='delete.php?id=" + commenT[i].id_comm + "'>X</a></p>";
                htmlString += "<h1 id='comm-name'>" + commenT[i].comments + "</h1>";
                htmlString += "<p><span id='comments-data'>" + commenT[i].date_publish + "<span><p></br></br>";
                 // "<p id'='comm-mess'>".$row['Comment'].
                // "</p>";
                // "</div>";

                htmlString += "</div>";

            }

            htmlDiv.innerHTML = htmlString;
        }
    }
    xhttp.open('GET', '../controller/showComments.php', true);
    xhttp.send(null);
}



    // ADD COMMENTS

    function addNewComM() {
    var name = document.getElementById('commName').value;
    var comment = document.getElementById('queryText').value;

        if (name.length == '' && comment.length == '') { //exit if one of the field is blank
            alert('Enter your message !');
            return;
        }

    var newComm = {
        name: name,
        comment:comment

    };

    // if (editMode) {
    //     newComm.id = editcontactId;
    // }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controller/showComments.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send('data='+JSON.stringify(addNewComM));
        var htmlString = "";
    xhr.onload =  function() {
        if (xhr.status == 200) {

                document.getElementById('comment_logs').innerHTML += createCom(newComm);
            // document.getElementById('result').innerHTML = xhr.responseText;
            reloadTable();
        }
    }
}



function createCom(contact) {
  var  htmlString = "<div class='comments_content'>";
    htmlString += "<p id='comm-time'>" + contact.name+ "</p>";
    htmlString += "<h1 id='comm-name'>" + contact.comment+ "</h1>";
    htmlString += "<p><span id='comments-data'><span><p></br></br>";
    htmlString += "</div>";
    return htmlString;
}


document.addEventListener('DOMContentLoaded', function() {
    display();
});