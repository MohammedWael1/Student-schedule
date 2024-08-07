<?php

$name = $_POST['name'];
$marhala = $_POST['marhala'];
$mohafza = $_POST['mohafza'];
$golos = $_POST['golos'];
$natiga = $_POST['natiga'];

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$conn = new mysqli($server_name,$username,$password,$db_name);

$insert = "INSERT INTO studentes
( name, marhala, mohafza, golos, natiga)
VALUES
 ('$name','$marhala','$mohafza','$golos','$natiga')";
 $conn -> query($insert);
 header("location:index school.php");
?>