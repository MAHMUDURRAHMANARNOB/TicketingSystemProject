<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href = "../css/style.css">
     <link rel="stylesheet" href = "../css/admin.css">
<style>
        .myDiv {
        border: 5px outset red;
        background-color: lightblue;
        text-align: center;
        }
    </style>

<body style = "background: url(https://c.files.bbci.co.uk/116EB/production/_109730417_gettyimages-1139730157resize.jpg); background-size: 100% ;">
<ul>

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

<form action="http://localhost/TicketingSystem/control/adminRemoveCode.php" method="post" enctype ="multipart/form-data"> 
Name<input type="text" name="name" id="name" placeholder="Type your name">
<input style="margin-right: 40px; height: 30px; width: 70px" type="submit" value= "Delete">
</head>
<body>
    
</body>
</html>

