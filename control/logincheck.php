<?php
include('db.php');

session_start();
$error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter user name or password";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"registrationtable",$username,$password);

if ($userQuery->num_rows > 0)
{
  while($row = mysqli_fetch_assoc($userQuery))
  {
    //<?php echo $row["userType"]
    if($row["catagory"] == "Buyer")
    {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header('Location: buyer.php');
    }
    
    else if($row["catagory"] == "Seller")
    {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header('Location: seller.php');
    }
    else if($row["catagory"] == "admin")
    {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header('Location:admin.php');
    }
    else
    {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header('Location: manager.php');
    }
  }
}
else {
$error = "<center><h1> Username or Password Is Invalid <br><h1></center>";
}
$connection->CloseCon($conobj);

}
}

?>