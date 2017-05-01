<?php

$name = $_REQUEST['name'];
$comments = $_REQUEST['Comment'];

    mysqli_query($con, "INSERT INTO comments(name, comments) VALUES('$name','$comments')");

$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<p id='comm-time'><a href='delete.php?id=" . $row['id'] . "'>
X</a></p>";
echo "<h1 id='comm-name'>" . $row['name'] . "</h1>";
echo "<p><span id='comments-data'>" . $row['date_publish'] . "<span><p></br></br>";
echo "<p id'='comm-mess'>" . $row['Comment'] . "</p>";
echo "</div>";
}
mysqli_close($con);
?>
<?php
require("db/db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
    echo "<div class='comments_content'>";
    echo "<p id='comm-del'><a href='delete.php?id=" . $row['id'] . "'>
X</a></p>";
    echo "<h1 id='comm-name'>" . $row['name'] . "</h1>";
    echo "<p><span id='comments-data'>" . $row['date_publish'] . "<span><p></br></br>";
    echo "<p id'='comm-mess'>" . $row['Comment'] . "</p>";
    echo "</div>";
}
mysqli_close($con);

