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
<input class="buttons" type="submit" value="Log in" name = "button_login"> <br>

<?php

$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("SET NAMES 'utf-8'");

if ($mysql->connect_error) {
    echo 'Error: ' . $mysql->connect_error;
    echo 'Num err: ' . $mysql->connect_errno;

}else {
    if (isset($_POST["button_login"])) {
        $namebase = $mysql->query("SELECT `username` FROM `usersreg`");
        $namecli = $_POST["name"];

    if ($namebase = $namecli) {
            header("Location: index.php");
    } else{
        echo "000";
    
    }
    
        $mysql->close();
    
    }

}

?>

</form>

</body>

</html>