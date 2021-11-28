<!DOCTYPE html>
<html lang="en">
<head>
 <?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
       if(!empty("review"))
       {
           $review = $_POST["review"];

           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "project";


           $conn = new mysqli($servername , $username, $password, $dbname);

           if($conn->connect_error)
           {
               die("connection failed");
           }
        
           $smt = $conn->prepare("INSERT INTO reviews(reviews) VALUES(?)");
           $smt->bind_param("s",$review); 

           $review = $_POST["review"];

           if($smt->execute()){
            echo "<center><h1>Congratulation!!<br></h1>Account Created  Successfully</center>";
            }
            else {
            echo "<center><h1>OOPS!!<br>Failed</h1></center>";
            }

       }
}
?>

</head>
<body>
    
</body>
</html>