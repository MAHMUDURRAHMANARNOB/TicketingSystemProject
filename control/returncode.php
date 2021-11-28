<!DOCTYPE HTML>

<html lang = "en">
<head>
<?php
 include_once '../control/db.php';
?>
</head>
<body>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(!empty($_POST["id"])){
   
        $id = $_POST["id"];
     
    

    
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "project";


   $conn = new mysqli($servername , $username, $password, $dbname);

   if($conn->connect_error)
   {
       die("connection failed");
   }

   $smt = $conn->prepare("INSERT INTO bt(bt) VALUES(?)");
   $smt->bind_param("s",$id);
   //$sql = "INSERT INTO registrationTable(username,phone,email,catagory,dob,password)
        //VALUES ('$name',$phone,'$email','$cat','$dob','$passwords')";

        $id = $_POST["id"];
        
    
    if($smt->execute()){
        echo 
        "Thank you";

 }
    else {
    echo "<center><h1>OOPS!!<br>Failed</h1></center>";
    }

    
    $smt->close();
    $conn->close();
    
        
    }
    else {
        echo "<center><h1>OOPS!!<br>Please enter all fields</h1></center>";
    }
}
?>

</body>
</html>