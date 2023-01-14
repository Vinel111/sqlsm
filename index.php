<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<title>Sitebdone</title>
<link href="style/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    
<h1>Добро пожаловать</h1>

<section class="btn_pos">

<form method="POST">

<input class="buttons" type="submit" value="Log in" name = "btn_log"> <br><br><br><br><br>
<input class="buttons" type="submit" value="Sign up" name = "btn_signing"> <br><br><br><br><br>
<input class="buttons" type="submit"><br>

</form>

</section>

<?php

$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("SET NAMES 'utf-8'");

if ($mysql->connect_error) {
    echo 'Error: ' . $mysql->connect_error;
    echo 'Num err: ' . $mysql->connect_errno;

}else {
     $mysql->query("CREATE TABLE usersreg (
         id INT (11) NOT NULL UNIQUE,
         username VARCHAR (20) UNIQUE,
         password INT (15) NOT NULL UNIQUE,
         email VARCHAR (30),

         PRIMARY KEY (id)
         )");

    $mysql->close();

}

if (isset($_POST["btn_log"])) {
    header("Location: log.php");

}

else if (isset($_POST["btn_signing"])) {
    header("Location: sign.php");

}

?>

</body>

</html>