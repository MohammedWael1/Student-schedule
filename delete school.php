<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "school";


$conn = new mysqli($server_name,$username,$password,$db_name);

$id= $_GET['id'];

$delete="DELETE FROM studentes WHERE id='$id'";
$conn -> query($delete);
header("location:index school.php");

?>