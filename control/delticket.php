<?php
session_start();
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['id'])) 
    {
        $error = "wrong input";
    }
    else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        $conn = new mysqli($servername , $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        // sql to delete a record
        $sql = "DELETE FROM bt WHERE bt='id'";
        
        if ($conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }
}



?>

