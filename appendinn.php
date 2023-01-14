<?php 

$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("SET NAMES 'utf-8'");

$username = $_POST["name"];
$password = $_POST["pass"];
$email = $_POST["email"];

$mysql->query("CREATE TABLE usersreg1(
    id INT (11) NOT NULL,
    username VARCHAR,
    password VARCHAR,
    email VARCHAR (30),
   
    PRIMARY KEY (id)
    )");

$mysql->query("SELECT * FROM `usersreg`");

$mysql->query("INSERT INTO `usersreg` (`username`, `password`, `email`) VALUES ($username, $password, $email");
        
$mysql->close();

?>