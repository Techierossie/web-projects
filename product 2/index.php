<?php

include "server.php";

$productdb = ""; 
$categorydb = ""; 
$pricedb = ""; 
$unitdb = ""; 
$datedb = ""; 

$update = false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product2</title>
</head>
<body>
<?php
include_once "process.php";

?>
    <div class="container">
        <form action="process.php" method="POST">
   <?php 
   if($update==true): ?>
        <h2>Update Grocery</h2>
    <?php 
    else: ?>
        <h2>Add Grocery</h2>
    <?php endif; ?>
        <label>Product Name</label>
        <input type="text" name="product"  value="<?=$productdb; ?>"><br><br>
        <label>Category</label>
        <input type="text" name="category" value="<?=$categorydb; ?>"><br><br>
        <label>Price</label>
        <input type="text" name="price" value="<?=$pricedb; ?>"><br><br>
        <label>Unit</label>
        <input type="text" name="unit" value="<?=$unitdb; ?>"><br><br>
        <label>Date</label>
        <input type="date" name="date" value="<?=$datedb; ?>"><br><br>

        <?php
        if($update==true): ?>
            <input type="submit" name="update" value="Update">
        <?php else:   ?>
            <input type="submit" name="submit" value="Submit">
        <?php endif; ?>

    </form>
    </div>
</body>
</html>