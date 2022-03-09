<?php
include_once '../control/db.php';
?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href = "../css/style.css">
    <link rel="stylesheet" href = "../css/admin.css">
    <tittle><h1 style= "color:#151D3B; font-family:Bahnschrift; font-size: 50px" align="center"> ADMIN FORM<br></h1></tittle>
    
</head>
<body>
<ul>
      <li class="dropdown">
              <a class="dropbtn" href="#">Account</a>
              <div class="dropdown-content">
                  <a href="../control/buyerUpdate.php">Edit Account</a>
                  <a href="../view/ProjectLogin.php">Logout</a>
              </div>
        </li>
              
        <li class="dropdown">
              <a class="dropbtn" href="#">About</a>
              <div class="dropdown-content">
                  <a href="help.php">Help</a>
              </div>
        </li>
        <li class="dropdown">
              <a class="dropbtn" href="#">Manage</a>
              <div class="dropdown-content">
                  <a href="../control/adminAdd.php">Add User</a>
                  <a href="../control/adminRemove.php">Remove User</a>
                  <a href="../control/cancelTicket.php">Cancel Tickets</a>
              </div>
        </li>
      <li class="dropdown"><a class="dropbtn" href="../view/admin.php">Home</a></li>   
    </ul>
        
    <br><br>
    
    <center><h1>HELLO ADMIN!!</h1></center>
    </div>
        
    <div class="myDiv">
    <h1 id="heading">Details</h1>
    <!--<input autocomplete="off" type="text" id="catagory"-->
    <input class="button" type="button"  value="Registration Table" id="regtable" onclick="ajax1()">
    <input class="button" type="button"  value="Ticket Table" id="ticket" onclick="ajax2()">
    <input class="button" type="button"  value="Reviews" id="reviews" onclick="ajax3()">
    <!-- <input class="button" type="button"  value="Search" onclick="ajax()"> -->
    <div>   
    <h2 id = "heading02">Details will load here..</h2>
      <div>     
    </div>
    <div>
    <h1 id="heading">Search Details by Catagory</h1>
    <input  autocomplete="off" type="text" id="catagory">
    <input class="button" type="button"  value="Search by Category" id="catagory" onclick="ajaxC()">
    <!-- <input class="button" type="button"  value="Search by Date" id="date_of_journey" onclick="ajaxS()"> -->
    
    <div>   
    <h2 id = "heading03">Details will load here..</h2>
      <div>     
    </div>
<script type="text/javascript" src="../javascript/script.js"></script>
</body>
</html>
