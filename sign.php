<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<title>Sign</title>

<link rel="stylesheet" href="style/style_sign.css" type="text/css">

</head>

<body>

<form method="POST">

<input class="input" type="text" placeholder="Name" name = "name"> <br><br><br>
<input class="input" type="text" placeholder="Password" name = "pass"> <br><br><br>
<input class="input" type="text" placeholder="Email" name = "email"> <br><br><br>
<form action="appendinn.php">
<input class="buttons" type="submit" value="Sign in" name = "button_sub"> <br>
</form>

<?php

$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("SET NAMES 'utf-8'");

if ($mysql->connect_error) {
    echo 'Error: ' . $mysql->connect_error;
    echo 'Num err: ' . $mysql->connect_errno;

}

?>

</form>

</body>

</html>