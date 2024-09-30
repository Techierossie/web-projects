<?php

include "server.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sales</title>
    <style>
        .container{
        display:flex
        flex-direction:column;
        justify content:center;
        align-items:center; 
        }

        form{

        }
    </style>
</head>
<body>
    <h2>SALES FORM</h2>
    <div class="container">
    <form action="" method="post">
    <label>Customer Name</label>
     <input type= "text"  name="name" Placeholder="Enter Customer Name"><br><br>
     <label>Customer Address</label>
     <input type= "text"  name="address" placeholder="Enter Customer Address"><br><br>
     <label>Product </label>
     <select>
         <option value="Select">Select Product</option>
         <?php
            $sql = "SELECT * FROM grocery";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)):      ?>
         <option value="<?=$row['Productname']; ?>"><?=$row['Productname']; ?></option>
         <?php endwhile; ?>
     </select><br><br>
     <label>Product Quantity</label>
     <input type= "text"  name="quantity" placeholder="Enter Product Quality"><br><br>
     <label>Price</label>
     <input type= "text" name="price" placeholder=""><br><br>
     <label>Date</label>
     <input type= "date" value="date"  name=""><br><br>
     <input type="button" value="submit"></button>
    </form>
    </div>
</body>
</html>