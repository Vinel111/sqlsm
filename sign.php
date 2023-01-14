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
<input class="buttons" type="submit" value="Sign in" name = "button_sub"> <br>

<?php

$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("SET NAMES 'utf-8'");

if ($mysql->connect_error) {
    echo 'Error: ' . $mysql->connect_error;
    echo 'Num err: ' . $mysql->connect_errno;

}else {

    if (isset($_POST["button_sub"])) {
        $username = $_POST["name"];
        $password = $_POST["pass"];
        $email = $_POST["email"];

        $mysql->query("CREATE TABLE usersreg(
            id INT (11) NOT NULL,
            username VARCHAR (50),
            password VARCHAR (15) NOT NULL,
            email VARCHAR (30),
   
            PRIMARY KEY (id)
            )");

        $mysql->query("SELECT * FROM `usersreg`");

        $mysql->query("INSERT INTO `usersreg` (`username`, `password`, `email`) VALUES ($username, $password, $email");
        
        $mysql->close();
    
    }

}

?>

</form>

</body>

</html>