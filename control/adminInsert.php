<!DOCTYPE HTML>

<html lang = "en">
<body>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(!empty($_POST["name"]) and !empty($_POST["phone"]) and !empty($_POST["email"])and !empty($_POST["cat"])and !empty($_POST["dob"])and !empty($_POST["passwords"])and !empty ($_POST["cpassword"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $cat = $_POST["cat"];
    $dob = $_POST["dob"];
    $passwords = $_POST["passwords"];
    $cpassword = $_POST["cpassword"];

    if($passwords == $cpassword){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";


        $conn = new mysqli($servername , $username, $password, $dbname);

    if($conn->connect_error)
        {
            die("connection failed");
        }

    $sql = "INSERT INTO registrationtable (username,phone,email,catagory,dob,password)
        VALUES ('$name',$phone,'$email','$cat','$dob','$passwords')";

        
        $res = $conn->query($sql);
        /* if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          } */
        if($res)
        {
            echo "<center><h1>Congratulation!!<br></h1>Account Created  Successfully</center>";
        }
        else 
        {
            echo "<center><h1>Error: <h1><center>" . $sql . "<br>" . mysqli_error($conn);
            /* echo $name,$phone,$email,$cat,$dob,$passwords, $sql; */
            echo "<center><h1>OOPS!!<br>Failed</h1></center>";
        } 
         $conn->close();
        /* mysqli_close($conn); */
    }
        else {
            echo "<center><h1>OOPS!!<br>Password Didn't match</h1></center>";

        }
    }
    else {
        echo "<center><h1>OOPS!!<br>Please enter all fields</h1></center>";
    }
}
?>

</body>
</html>