<?php

include "server.php";

if(isset($_GET['id'])){

    // variable declaration

    $user_id= $_GET['id'];

    $sql= "DELETE FROM ecommerce WHERE id= '$user_id'";
    $result= mysqli_query($conn, $sql);

    if($result==TRUE){
    echo "Record deleted successfully";
    header("location: view.php");
    }

    else{
        echo "error:" .$sql . "<br>" .$conn->error;
    }
}
?>