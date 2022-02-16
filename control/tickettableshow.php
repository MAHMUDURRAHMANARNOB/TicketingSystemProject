<?php
include_once 'db.php';
if(isset($_REQUEST['mydata'])){
    
    
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $selectquery = "SELECT * FROM ticket";
    $query = mysqli_query ($conobj, $selectquery);
    //$nums = mysqli_num_rows ($query);
    
    
    echo "<table border=1 align=center>
            <tr>
                <th>Departure</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Seat</th>
                <th>Bus</th>
                <th>Time</th>
            </tr>";
   
    while ($res = mysqli_fetch_assoc($query)){
        
             echo "<tr>
                <td>" .$res['departure']. "</td>
                <td>" .$res['destination']. "</td>
                <td>" .$res['date']. "</td>
                <td>" .$res['seat']. "</td>
                <td>" .$res['bus']. "</td>
                <td>" .$res['time']. "</td>
               
            </tr>";
        }
        echo "</table>";
    }
?>