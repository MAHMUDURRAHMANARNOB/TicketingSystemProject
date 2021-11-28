<?php
session_start(); 
include('db.php');


if(empty($_SESSION["username"])) 
{
header("Location: ../control/logincheck.php"); 
// Redirecting To Home Page
}

?>
<link rel="stylesheet" href = "../css/style.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <p align="center">Hi, <h2 align="center"><?php echo $_SESSION["username"]; ?></h2></p>
    <style>
        .myDiv {
        border: 5px outset black;
        background-color: green;
        text-align: center;
        }
    </style>
</head>
<body style = "background: url(https://c.files.bbci.co.uk/116EB/production/_109730417_gettyimages-1139730157resize.jpg); background-size: 100% ;">
<br>
    <ul>
      <li class="dropdown">
              <a class="dropbtn" href="#">Account</a>
              <div class="dropdown-content">
                  <a href="../control/buyerUpdate.php">Edit Account</a>
                  <a href="ProjectLogin.php">Logout</a>
        </li>
              </div>
       <li class="dropdown">
              <a class="dropbtn" href="#">About</a>
              <div class="dropdown-content">
                  <a href="help.php">Help</a>
              </div>
        </li>
        <li><a href="help.php">Contact</a></li>
      <li><a href="../view/seller.php">Home</a></li>   
       
    </ul>
    <br><br>
    <div align="center" class="myDiv">
        <?php
        $connection = new db();
        $connobj =$connection->OpenCon();

        $userQuery=$connection->CheckUser($connobj,"registrationtable",$_SESSION["username"],$_SESSION["password"]);

        if($userQuery->num_rows > 0)
        {
            echo "<form action = '' method = 'post'>";
            while($row = $userQuery->fetch_assoc())
            {
                echo "Phone : <input type = 'text' name='phone' id='phone'  value=".$row["phone"]."><br>";
                echo "Email : <input type = 'text' name='email' id='email'value=".$row["email"]."><br>";
                echo "Password : <input type = 'text' name='password' id='password' value=".$row["password"]."><br>";
            }
            echo "<input name = 'update' type = 'submit' value = 'Update'>";
        }else {
            echo "0 results";
        }

        ?>
    </div>


<?php



$error = "";

if(isset($_POST['update'])){
if(empty($_POST['phone']) || empty($_POST['email'])  || empty($_POST['password']))
{
    $error = "input gives is invalide";
}
else 
{
    $connection = new db();
    $connobj = $connection->OpenCon();

    $userQuery=$connection->UpdateUser($connobj,"registrationtable",$_SESSION["username"],$_POST["phone"],$_POST["email"],$_POST["password"]);

    echo $userQuery;
    $connection->CloseCon($connobj);
}
}



?>
<script src = "../javascript/validation.js"></script>

</body>