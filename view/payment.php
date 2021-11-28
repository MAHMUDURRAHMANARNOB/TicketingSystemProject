<?php
include('../control/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
    <form action="http://localhost/TicketingSystem/view/final.php" method="post" enctype ="multipart/form-data"> 
    Payment: 
    <select name="payment">
    
    <option value="bkash">bKash </option>
    <option value="dbbl">DBBL </option>
    <option value="visa">VISA </option>
    </select><br><br><br>
    Confirm phone no :<input type="text" name="phone" id="phone" required placeholder=" Confirm phone no"><br><br>
    Reciever Person Name  :<input type="text" name="name" id="name" required placeholder=" please enter reciever name"><br><br>
    Delivery Address : :<input type="text" name="adres" id="adres" required placeholder=" please enter reciever adres"><br><br>
    
    <input style="margin-right: 40px; height: 30px; width: 70px" type="Submit" value= "CONFIRM">
    </form>
    </div>
    
</body>
</html>
