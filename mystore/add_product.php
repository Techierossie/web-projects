<?php

include "server.php";


if(isset($_POST['submit'])){
    // variable declaration
    $productname = $_POST['productname'];
    $productcategory = $_POST['productcategory'];
    $productunit = $_POST['productunit'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $total= $_POST['total'];

    $sql= "INSERT INTO ecommerce (productname, productcategory, productunit, price, date, total) VALUES ('$productname', '$productcategory', '$productunit','$price', '$date', '$total')";
    $result= mysqli_query($conn, $sql);

    if($result ==TRUE){
        echo "New record added successfully";


    }

    else{
        echo "error:" . $sql . "<br>" . $conn->error;
    }

}


?> 

<!-- <?php

// include "server.php";

// if (isset($_POST['submit'])){

    // variable declaration

//     $pname= $_POST['productname'];
//     $pcat= $_POST['productcategory'];
//     $punit= $_POST['unit'];
//     $price= $_POST['price'];
//     $ptotal= $_POST['total'];
//     $date= $_POST['date'];


//     $sql=  "INSERT INTO wholesalers VALUES (null, '$pname', '$pcat', '$punit', '$price', '$ptotal','$date','$punit'*'$price') ";
//     $result= mysqli_query($conn, $sql);

//     if ($result==TRUE){
//         echo "record add successfully";
//     }


// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product form</title>
</head>
<style>
    *{
        margin:auto;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        display: flex;
        flex-direction: column;
        width: 500px;
        height: 500px;
        align-items: center;
        justify-content: center;
        background-color: aqua;
        margin-top: 50px;
        padding: 20px;
        
    }

    h2{
        color: rgb(46, 22, 180);
        font-family: sans-serif;
        padding-bottom: 10px;

    }

    label{
        font-family: serif;
        font-size: medium;
        color: rgb(46, 22, 180);
        float:left;
    }

    input{
        width:90%;
        padding: 5px;
        outline: none;
    }
    
</style>
<body>
    <div class="container">
    <form action="add_product.php" method="POST">
        <h2>ADD NEW PRODUCT</h2>
       <label>Product Name</label>:<input type="text" name="productname"><br><br>
       <label>Product Category:</label><input type="text" name="productcategory"><br><br>
       <label>Product Unit:</label><input type="text" name="productunit"><br><br>
      <label>Price:</label><input type="text" name="price"><br><br>
       <label>Total: </label><input type="text" name="total"><br><br>
      <label>Date:</label><input type="date" name="date"><br><br>
        <input type="submit" name="submit" value="Submit"> 
    </form>   
    </div>
</body>
</html>