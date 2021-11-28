<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="project";

$conn = new mysqli($servername , $username, $password , $dbname );

$sql = "CREATE TABLE registrationTable(
username VARCHAR(64),
phone INT(20) PRIMARY KEY,
email VARCHAR (30),
catagory VARCHAR(10),
dob date,
password VARCHAR (30)
)";

$result = $conn -> query($sql);

if($result)
{
    echo "<center><h1>Created</h1></center>";
}
else
{
    echo "<center><h1>FAILED!!</h1></center>";
}

$conn->close();

?>