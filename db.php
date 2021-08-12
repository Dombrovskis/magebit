<?php

$servername = "localhost";
$username = "root";
$pass= "";
$dbname = "magebit";
$conn = new mysqli($servername,$username,$pass,$dbname);

if($conn->connect_error){
    die("Can`t connect to the data base". $conn->connect_error);
}else{
    echo'safe';
}



?>