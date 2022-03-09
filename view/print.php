<?php
include_once '../control/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h1><center>Ticket</center></h1>
    <table border="0" align="center">
                <tr>
                    <th>Payment</th>
                    <th>Phone</th>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
        <tbody>
            <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
                        
            $selectquery = "SELECT * FROM confirm WHERE phone=01674878084  ;";
            $query = mysqli_query ($conobj, $selectquery);
            //$nums = mysqli_num_rows ($query);
            while ($res = mysqli_fetch_assoc($query)){
            ?>
                <tr>
                    <td><?php echo $res['payment'] ?></td>
                    <td><?php echo $res['phone'] ?></td>
                    <td><?php echo $res['name'] ?></td>
                    <td><?php echo $res['adres'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>