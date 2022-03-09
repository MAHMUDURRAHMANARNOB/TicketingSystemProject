<?php
$servername ="localhost";
$username ="root";
$password ="";
// Create connection

$conn=new mysqli($servername , $username, $password);// MySQLi connection object
// Che//ck connection

function CheckUser($conn,$table,$username,$password)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE name='". $username."' AND password='". $password."'");
return $result;
}


if ($conn->connect_error){
die("Connection failed: ". $conn->connect_error);
}
// Create database


$sql="CREATE DATABASE project"; //query string


if ($conn->query($sql))

{
echo "Database created successfully";
}
else{
echo "Error creating database: ". $conn->error;
}
$conn->close();// close MySQLi connection object
?>