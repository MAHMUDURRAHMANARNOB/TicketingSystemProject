<?php
include_once 'db.php';
if(isset($_REQUEST['mydata'])){
    
    
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $selectquery = "SELECT * FROM reviews";
    $query = mysqli_query ($conobj, $selectquery);
    //$nums = mysqli_num_rows ($query);
    
    
    echo "<table border=1 align=center>
            <tr>
                <th>Id</th>
                <th>Reviews</th>
                
            </tr>";
   
    while ($res = mysqli_fetch_assoc($query)){
        
             echo "<tr>
                <td>" .$res['id']. "</td>
                <td>" .$res['reviews']. "</td>
            
            </tr>";
        }
        echo "</table>";
    }
?>