<?php

include "server.php";


if (isset($_POST['submit'])){

    // variable declarations

    $productname= $_POST['product'];
    $cat= $_POST['category'];
    $price= $_POST['price'];
    $unit= $_POST['unit'];
    $dat= $_POST['date'];

    $sql= "INSERT INTO grocery VALUES (null, '$productname', '$cat', '$price', '$unit', '$dat', '$unit' * '$price')";
    $result= mysqli_query($conn, $sql);

    if($result){
        header("location: stock.php");
    }

}




// UPDATE SECTION WHEN EDIT BTN WAS CLICKED.
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;

    
    // echo $id;

    $sql = "SELECT * FROM grocery WHERE id='$id'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);

    $productdb = $row['Productname'];
    $categorydb = $row['Category'];
    $pricedb = $row['Price'];
    $unitdb = $row['Unit'];
    $datedb = $row['Date'];
    
}

?>

