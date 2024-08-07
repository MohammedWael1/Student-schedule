<?php

$name = $_POST['name'];
$marhala = $_POST['marhala'];
$mohafza = $_POST['mohafza'];
$golos = $_POST['golos'];
$natiga = $_POST['natiga'];
$id = $_POST['id'];

//////conect/////
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$conn = new mysqli($server_name,$username,$password,$db_name);
/////////////////////
$update = "UPDATE studentes SET name='$name',
marhala='$marhala',mohafza='$mohafza',golos='$golos',
natiga='$natiga' WHERE id = '$id' ";
 $conn -> query($update);
 header("location:index school.php");
?>