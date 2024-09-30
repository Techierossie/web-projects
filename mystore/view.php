<?php

include "server.php";

$sql= "SELECT *FROM ecommerce";

$result= mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
    
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    table{
     width:90%;
     margin:auto;
     margin-top:50px;   
    }

    table, th, td{
        border: 2px solid black;
        border-collapse:collapse;
        text-align:center;
        padding: 0.5rem;
    }

    tr:nth-of-type(even){
        background-color:aqua;
    }

    h2{
        margin-top:50px;
        text-align:center;
        color:rgb(46, 22, 180);
    }

    th{
        color:rgb(46, 22, 180);
    }

</style>
</head>
<body>
    <div class="container">
        <h2>STORE PAGE</h2>
        <table>
        <tr>
            <th>SNO</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Unit</th>
            <th>Price</th>
            <th>Date</th>
            <th>Total</th>
            <th colspan="2">Action</th>
        </tr>
        
    <?php

$sn = 1;
$sql = "SELECT * FROM ecommerce";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)): ?>


                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['productname']; ?></td>
                <td><?php echo $row['productcategory']; ?></td>
                <td><?php echo $row['productunit']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['total']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>"><button>Delete</button></a></td>
                </tr>
            
        <?php  endwhile; ?>
            </table>
        
    </div>
</body>
</html>