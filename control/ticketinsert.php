<!DOCTYPE HTML>

<html lang = "en">
<body>
<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(!empty($_POST["from"]) and !empty($_POST["to"]) and !empty($_POST["date"]) and !empty($_POST["seat"]) and !empty($_POST["bus"]) and !empty($_POST["time"]))
   {

    $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];
    $seat = $_POST["seat"];
    $bus = $_POST["bus"];
    $time = $_POST["time"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername , $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("connection failed");
    }
    $smt = $conn->prepare("INSERT INTO ticket(Departure,destination,date_of_journey,seat,bus,time) VALUES(?,?,?,?,?,?)");
   $smt->bind_param("ssssss",$from,$to,$date,$seat,$bus,$time);
   
   $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];
    $seat = $_POST["seat"];
    $bus = $_POST["bus"];
    $time = $_POST["time"];

    if($smt->execute()){
        echo "<center><h1>Congratulation!!<br></h1>Account Created  Successfully</center>";
        }
        else {
        echo "<center><h1>OOPS!!<br>Failed</h1></center>";
        }
        $smt->close();
        $conn->close();
 
}
}
  

    ?>

    




    </body>
</html>