/**
 * Created by user on 4/30/2017.
 */



function createCom(contact) {
    var content = "<div class='comments_content'>";
    content += "<p id='comm-time'>" + "<a href='delete.php?id=" + "$row['id']" +"X</a></p>";
    content += "<h1 id='comm-name'>" . $row['name'] + "</h1>";
    content += "<p><span id='comments-data'>" . $row['date_publish'];
    content += "<p id'='comm-mess'>" . $row['Comment'] + "</p>";
    content += "</div>";

    return content;
}

function addNewContact() {
    // var name = document.getElementById('name').value;
    // var phone = document.getElementById('phone').value;
    // var email = document.getElementById('mail').value;

    var name = form.name.value;
    var comments = form.comments.value;

    function commentSubmit() {
        if (form.name.value == '' && form.comments.value == '') { //exit if one of the field is blank
            alert('Enter your message !');
            return;
        }
    }

    var newComment = {
        name: name,
        comment: comments,
    };
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controller/showComments.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send('data=' + JSON.stringify(newComment));

    xhr.onload = function () {
        if (xhr.status == 200) {
            if (!editMode)
                document.getElementById('table').innerHTML += createCom(newComment);

            document.getElementById('result').innerHTML = xhr.responseText;
            reloadTable();
        }
    }
}

    function reloadTable() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../controller/showComments.php', true);

        xhr.onload = function () {
            if (xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                var content = '';
                for (var i = 0; i < data.length; i++) {
                    content += createRow(data[i]);
                }

                document.getElementById('comment_logs').innerHTML = content;
            }
        }
        xhr.send(null);
    }

    document.addEventListener('DOMContentLoaded', function () {
        reloadTable();
    });












//     var name = form.name.value;
//     var comments = form.comments.value;
//     var xmlhttp = new XMLHttpRequest(); //http request instance
//
//     xmlhttp.onreadystatechange = function() {
//         //display the content of insert.php once successfully loaded-->
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//             document.getElementById('comment_logs').innerHTML = xmlhttp.responseText;
//             //the chatlogs from the db will be displayed inside the div section
//         }
//     }
//     xmlhttp.open('GET', 'insert.php?name=' + name + '&comments=' + comments, true);
//     //open and send http request
//     xmlhttp.send();
// }
//
// $(document).ready(function(e) {
//     $.ajaxSetup({ cache: false });
//     setInterval(function() { $('#comment_logs').load('logs.php'); }, 200);
// });
// // window.location.reAload(false);