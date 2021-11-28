<?php
 include_once '../control/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .myDiv {
        border: 5px outset black;
        background-color: lightblue;
        text-align: center;
        }
    </style>
</head>
<body>
<div class="myDiv">
        
        <h1><center>All Availabe Tickets</center></h1>
                <table border="0" align="center">
                   <tr>
                      <th>Back Ticket NO:</th>
                      
                  </tr>
                <tbody>
                    <?php
                        $connection = new db();
                        $conobj=$connection->OpenCon();
                        
                        $selectquery = "SELECT * FROM bt;";
                        $query = mysqli_query ($conobj, $selectquery);
                        //$nums = mysqli_num_rows ($query);
                        while ($res = mysqli_fetch_assoc($query)){
                        ?>
                           <tr>
                              <td><?php echo $res['bt'] ?></td>
                              
                          </tr>
                    
                    <?php
    
                        }
    
                    ?>
                
                </tbody>
                </table>
        </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<form action= "delticket.php" method = "post">
  Delete Ticket:<input type="text" name="id" id="id" required placeholder=" enter the id to delete"><br><br> 
  <input type="Submit" value= "Confirm">
</body>
</html>

