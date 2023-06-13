<?php
session_start();
$name=$_POST["names"];
$uname=$_POST["unames"];
$pass=$_POST["passs"];

$con = new mysqli('localhost','root1','root1','cv');
// $array = $con->query("select * from users where id = '$_SESSION[userId]' ");
$succes=$con->query("UPDATE users SET username='{$uname}',password='{$pass}',name='{$name}' WHERE id = '$_SESSION[userId]'");

if($succes){
    echo "updated successfully";
}






?>