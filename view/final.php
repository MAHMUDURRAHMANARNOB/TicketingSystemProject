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
    if(!empty($_POST["payment"]) and !empty($_POST["phone"]) and !empty($_POST["name"])and !empty($_POST["adres"])){
   
        $payment = $_POST["payment"];
        $phone = $_POST["phone"];
        $name = $_POST["name"];
        $adres = $_POST["adres"];
   
    

    
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "project";


   $conn = new mysqli($servername , $username, $password, $dbname);

   if($conn->connect_error)
   {
       die("connection failed");
   }

   $smt = $conn->prepare("INSERT INTO confirm(payment,phone,name,adres) VALUES(?,?,?,?)");
   $smt->bind_param("ssss",$payment,$phone,$name,$adres);

   //$sql = "INSERT INTO registrationTable(username,phone,email,catagory,dob,password)
        //VALUES ('$name',$phone,'$email','$cat','$dob','$passwords')";

        $payment = $_POST["payment"];
        $phone = $_POST["phone"];
        $name = $_POST["name"];
        $adres = $_POST["adres"];
        
    
    if($smt->execute()){
        echo 
        "<a href=print.php><input type=button value= Continue></a>";

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


