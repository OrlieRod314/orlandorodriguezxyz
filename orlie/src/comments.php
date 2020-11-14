<h2> Comments</h2>
<bold>Add a comment!</bold>
<fieldset>
<legend><input id="user" type="text" placeholder="Input name"></legend>
<input id="comment" type="text" placeholder="Input comment text">
</fieldset>
<button id="post">Post</button><br><br>
<hr>

<?php

$article = isset($_GET["name"]) ? $_GET["name"] : $name;

$hostname = "localhost";
$username = "orlie_comments";
$password = "JxSLRkdutW";
$db = "orlie_comments";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if (!$dbconnect) {
    echo "login did not work";
    die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_GET["user"]) && isset($_GET["comment"])) {
    $vals = "( '" . htmlspecialchars($_GET["user"]) . "', '" . htmlspecialchars($_GET["comment"]) . "', '" . $article . "' )";
    $sql = "INSERT INTO Comments (User, Comment, Article) VALUES " . $vals;

    mysqli_query($dbconnect, $sql);
}

$query = mysqli_query($dbconnect, "SELECT * FROM Comments WHERE Article='" . $article . "'")
    or die(mysqli_error($dbconnect));


while ($row = mysqli_fetch_assoc($query)) {
    echo '<fieldset>';
    echo '<legend>' . $row["User"] . '</legend>';
    echo $row["Comment"];
    echo '</fieldset>';
}

mysqli_close($dbconnect);

?>
