<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$phone,$email,$password)
 {
     $sql = "UPDATE $table SET phone='$phone',email='$email',password='$password' WHERE username='$username'";
     if($conn->query($sql) ===true)
     {
         $result = "recorded";
     }
     else 
     {
         $result = "failed";
     }
     return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>