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
     <tittle><h1 style= "color:yellow; font-family:Bahnschrift; font-size: 50px" align="center"> ADMIN FORM<br></h1></tittle>

     <style>
        .myDiv {
        border: 5px outset red;
        background-color: lightblue;
        text-align: center;
        }
    </style>
</head>
<body style = "background: url(https://c.files.bbci.co.uk/116EB/production/_109730417_gettyimages-1139730157resize.jpg); background-size: 100% ;">
<ul>
      <li class="dropdown">
              <a class="dropbtn" href="#">Account</a>
              <div class="dropdown-content">
                  <a href="../control/buyerUpdate.php">Edit Account</a>
                  <a href="../view/ProjectLogin.php">Logout</a>
        </li>
              </div>
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
      <li><a href="../view/admin.php">Home</a></li>   
       
    </ul>
        
    <br><br>
    
    <center><h1>HELLO ADMIN!!</h1></center>
    
     
    </div>
        
    <div class="myDiv">

    <h1 id="heading">Search Details by Catagory</h1>
    <!--<input autocomplete="off" type="text" id="catagory"-->
    <input type="button"  value="Registration Table" id="regtable" onclick="ajax1()">
    <input type="button"  value="Ticket Table" id="ticket" onclick="ajax2()">
    <input type="button"  value="Reviews" id="reviews" onclick="ajax3()">
    <input type="button"  value="Search" onclick="ajax4()">

    <div>   
    <h2 id = "heading02">Details will load here..</h2>
      <div>     

    </div>

    <div>

    <h1 id="heading">Search Details by Catagory</h1>
    <input autocomplete="off" type="text" id="catagory">
    <input type="button"  value="Registration Table" id="catagory" onclick="ajaxC()">
    

    <div>   
    <h2 id = "heading03">Details will load here..</h2>
      <div>     

    </div>

       
    
            
      
<script type="text/javascript" src="../javascript/script.js"></script>
</body>
</html>
