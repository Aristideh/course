<?php
$host='localhost';
$user='root';
$password='Vision@2030';
$db='login';

$conn= new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    echo "Failed to connect to database".conn->connect_error;
}
?>