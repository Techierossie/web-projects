<?php

include "server.php";

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM grocery WHERE id='$id'";
    mysqli_query ($conn, $sql);
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock page</title>
    
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }

        table{
            width: 90%;
            margin: auto;
            margin-top: 50px;
        }

        table, th, td{
            border: 2px solid black;
            border-collapse: collapse;
            padding: 0.5rem;
            text-align: center;
        }

        tr:nth-of-type(odd){
            background-color: green;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php  include_once("process.php"); ?>
    <div class="container">
        <table>
            <h2>stock page</h2>
            <tr>
                <th>SNO</th>
                <th>ProductName</th>
                <th>Category</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Date</th>
                <th>Total</th>
                <th colspan="2">Action</th>
            </tr>
        <?php
        $sn = 1;
        $sql = "SELECT * FROM grocery";
        $result = mysqli_query($conn, $sql);
    
        while($row = mysqli_fetch_assoc($result)): ?>
        
    
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $row['Productname']; ?></td>
                <td><?php echo $row['Category']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td><?php echo $row['Unit']; ?></td>
                <td><?php echo $row['Date']; ?></td>
                <td><?php echo $row['total']; ?></td>
                <td><a href="index.php?edit=<?=$row['id'];?>"><button>edit</button></a></td>
                <td><a href="stock.php?del=<?=$row['id'];?>"><button>delete</button></a></td>
            </tr>
        <?php  endwhile; ?>  
            </table>
       
    </div>
</body>
</html>

<!-- <?php

// $sno=1;
// $query= "SELECT * FROM grocery WHERE";
// $res= mysqli_query($conn, $query);

// while($row= mysqli_fetch_assoc($res)):?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?Php echo $row['Productname']; ?></td>
    <td><?php echo $row['Category']; ?></td>
    <td><?php echo $row['Price']; ?></td>
    <td><?php echo $row['Unit']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td><a href="#">edit</a></td>
    <td><a href="stock.php?del=<?$row['id'];?>delete</a></td>
</tr>
<?php //endwhile; ?>
</table> -->
