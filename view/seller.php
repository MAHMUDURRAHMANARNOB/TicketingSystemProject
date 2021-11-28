<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
    <link rel="stylesheet" href = "../css/style.css">
    <center>
    <style>
        .myDiv {
        border: 5px outset black;
        background-color: lightblue;
        text-align: center;
        }
    </style>
    <tittle><h1 style= "color:yellow; font-family:Bahnschrift; font-size: 50px" > Seller Form<br></h1></tittle>
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
      <li><a href="#">Home</a></li>   
       
    </ul>
    <br><br>
<form name="" action="../control/ticketinsert.php" onsubmit="return SellerValidateForm()" method="post"  > 
    <table border= "2" height ="300px" width="30%">
       
    <tr bgcolor = Harlequin>
        <th colspan="2"> SELL YOUR TICKET</th>
        
      </tr>
      
      <tr bgcolor="beige">
        <th>From</th>
        
        <th><input type="text" placeholder="Enter City" name="from" id="from" enctype ="multipart/form-data"></th>
      </tr>
      <tr bgcolor="beige">
        <th>To</th>
        
        <th> <input type="text" placeholder="Enter City" name="to" id="to"> </th>
      </tr>
      <tr bgcolor="beige">
        <th>Date</th>
        
        <th> <input type="date"  name="date" id="date"> </th>
      </tr>

      </tr>
      <tr bgcolor="beige">
      <th>Seat</th>
        
        <th> <input type="text" placeholder="Seat" name="seat" id="seat" > </th>
      </tr>
      <tr bgcolor="beige">
      <th>Bus</th>
        
        <th> <input type="text" placeholder="Bus" name="bus" id="bus"> </th>
      </tr>

      <tr bgcolor="beige">
      <th>Time</th>
        
      <td><center><select name="time" id="time">
        
        <option> Morning</option> 
        <option> Night</option>
        
        </select></center></td>
      </tr>

      
      
     <tr bgcolor = Harlequin>
      <th colspan="2">
      <input style=" height: 30px; width: 100px" type="Submit" value= "Submit Ticket">
      </th>
      </tr>
    </table>
    </form>
    <div class="myDiv">
    <h1 id="heading">Search tickets by Date</h1>
    <input autocomplete="off" type="date" id="date_of_journey">
    <input type="button" value="Search" id="date_of_journey" onclick="ajaxS()">
    </div>

    <div class="myDiv">   
    <h2 id = "heading03">Details will load here..</h2>
    </div>  

    <div class="myDiv"> 
    <form name="review" action= "http://localhost/TicketingSystem/control/review.php" method="post" enctype ="multipart/form-data">
    <h2>Review/Complain </h2><input type = text placeholder = "Your opinion matters" name="review" required>
    
    
    <input style=" height: 30px; width: 100px" type = "Submit" name = "bro" value= "Submit Review">
    </div> 
    
    <script type="text/javascript" src="../javascript/script.js"></script>
    <script src = "../javascript/validation.js"></script>
</body>
</center>
</html>

