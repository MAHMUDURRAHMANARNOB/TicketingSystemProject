<?php
include_once '../control/db.php';
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/logincheck.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Buyer";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
    <tittle><h1 style= "color:yellow; font-family:Bahnschrift; font-size: 50px" align="center"> Buyer Form<br></h1></tittle>

    <link rel="stylesheet" href = "../css/style.css">
    <style>
        .myDiv {
        border: 5px outset black;
        background-color: #4FDA15  ;
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
                  <a href="../control/return.php">Return Ticket</a>
                  <a href="print.php">Your purchase</a>
                  <a href="ProjectLogin.php">Logout</a>
              </div>
        </li>
              
        <li class="dropdown">
              <a class="dropbtn" href="#">About</a>
              <div class="dropdown-content">
                  <a href="help.php">Help</a>
              </div>
        </li>
        <li><a href="help.php">Contact</a></li>
      <li><a href="#">Home</a></li> 
    </ul>
      </br>





    <center>
    <center>
    <div >
    <table border= "2" height ="300px" width="30%">
    <tr bgcolor = Harlequin>
        <th colspan="2"> Find Your Bus</th>
        
      </tr>
      
      <tr bgcolor="beige">
        <th>From</th>
        <th>
          <select id="departure">
          <option>Select Departure </option>
            <option value="Dhaka">Dhaka </option>
            <option value="Cox Bazar">Cox's Bazar </option>
          </select>
        </form></th>
      </tr>

      <tr bgcolor="beige">
        <th>To</th>
        
        <th> 
          <select id="destination">
          <option>Select Destination</option>
            <option value="Dhaka">Dhaka </option>
            <option value="Cox Bazar">Cox's Bazar </option>
          </select>
        </form></th>
      </tr>
      <tr bgcolor="beige">
        <th>Date of journey</th>
        
        <th> <input type="date"  name="doj" id="date" required> </th>
      </tr>
      
        <tr bgcolor = Harlequin>
      <th colspan="2">
      <input style=" height: 30px; width: 100px" type="button" value= "Search Buses" id="ticketsearch" onclick="ajaxB()">
      </th>
      </tr>
    </table>
    </div>
    <div class="myDiv">
        
    <h1><center>All Availabe Tickets</center></h1>
            <table border="0" align="center">
              <tr>
                  <th>Departure</th>
                  <th>Destination</th>
                  <th>Date</th>
                  <th>Seat</th>
                  <th>Bus</th>
                  <th>Time</th>
                  <th>Operation</th>
              </tr>
            <tbody>
                <?php
                    $connection = new db();
                    $conobj=$connection->OpenCon();
                    
                    $selectquery = "SELECT * FROM ticket;";
                    $query = mysqli_query ($conobj, $selectquery);
                    //$nums = mysqli_num_rows ($query);
                    while ($res = mysqli_fetch_assoc($query)){
                    ?>
                      <tr>
                          <td><?php echo $res['departure'] ?></td>
                          <td><?php echo $res['destination'] ?></td>
                          <td><?php echo $res['date_of_journey'] ?></td>
                          <td><?php echo $res['seat'] ?></td>
                          <td><?php echo $res['bus'] ?></td>
                          <td><?php echo $res['time'] ?></td>
                          <td><a href="payment.php?msg=".$res['id'].""">Confirm</i></a></td>
                      </tr>
                
                <?php

                    }

                ?>
            
            </tbody>
            </table>
    </div>
  

<div class="myDiv">   
    <h2 id = "heading02">Bus details will load here..</h2>
</div>

<div class="myDiv">
<form action= "http://localhost/TicketingSystem/control/review.php" method="post" enctype ="multipart/form-data">
    <h2>Review/Complain </h2><input type = text placeholder = "Your opinion matters" name="review" requied>

    <input style=" height: 30px; width: 100px" type = "Submit" name = "bro" value= "Submit Review">
</div>
    <script type="text/javascript" src="../javascript/script.js"></script>
</body>
</center>
</html>