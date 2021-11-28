<?php
include('../control/logincheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
    <center>
    <header><h1 style= "color:white; font-family:Times New Roman;" > Login Form<br></h1></header>
</head>

<body style = "background: url(https://c.files.bbci.co.uk/116EB/production/_109730417_gettyimages-1139730157resize.jpg); background-size: 100% ;">
<br><br><br>
     <form action="" method="post">
    <table border= "2" height ="250px" width="25%">
       
    <tr bgcolor = Harlequin>
        <th colspan="2">LOGIN</th>
      </tr>
      
      <tr bgcolor="beige">
        <th>User Name</th>
        
        <th><input type="text" placeholder="Type Username" name="username" required ></th>
      </tr>
      <tr bgcolor="beige">
        <th>Password</th>
        
        <th> <input type="password" placeholder="Type Password" name="password" required> </th>
      </tr>
        <tr bgcolor = Harlequin>
      <th colspan="2">
      <input  style="margin-right: 20px; height: 30px; width: 80px" name="submit" type="Submit" value= "LOGIN">
      </form>
      <a href="regform.php"><input style= "height: 31px; width: 81px" type="button" value= "Sign Up"></a>
      <br>

      

      
      
      
      </th>
      </tr>
    </table>
    

</body>
</center>
</html>