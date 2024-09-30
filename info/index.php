<?php
session_start();
include "server.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
</head>
<body>
    <div style ="text-align:center; padding:15px;">
    <p style= "font-size:50px; font-weight:bold;">
    Hello  <?php
    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $sql =mysqli_query($conn, $sql);
        $result=mysqli_query($conn, $sql);
        $sql="SELECT * FROM users WHERE 'email'= $email";
        while($row=mysqli_fetch_array($result)){
            echo $row['username'];

        }
    }
?>
</p>
<a href= "logout.php">Logout</a>
</body>
</html>