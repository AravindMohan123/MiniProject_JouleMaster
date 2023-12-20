<?php
$servername = "localhost";


$dbname = "id21609601_espdb";
$username = "id21609601_espdb";
$password = "Power@123";

$conn = mysqli_connect($servername,$dbname,$password,$username,);

if($conn){}else{ echo "not connected";}
?>