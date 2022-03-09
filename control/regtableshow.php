<?php
include_once 'db.php';
if(isset($_REQUEST['mydata'])){
    
    
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $selectquery = "SELECT * FROM registrationTable";
    $query = mysqli_query ($conobj, $selectquery);
    //$nums = mysqli_num_rows ($query);
    
    
    echo "<table border=1 align=center>
            <tr>
                <th>User Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Catagory</th>
                <th>Date of Birth</th>
                
            </tr>";

    while ($res = mysqli_fetch_assoc($query)){
        
            echo "<tr>
                <td>" .$res['username']. "</td>
                <td>" .$res['phone']. "</td>
                <td>" .$res['email']. "</td>
                <td>" .$res['catagory']. "</td>
                <td>" .$res['dob']. "</td>
            
            </tr>";
        }
        echo "</table>";
    }
?>