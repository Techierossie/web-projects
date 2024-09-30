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
    <title>Login System</title>
    <link rel = "stylesheet" href ="all.css">
    
</head>
<body> 
<div class = "header">
    <h2>Login</h2>
</div>
<?php include "process.php";
            if(count($errors)>0){

        ?>
        <div class="alert alert-danger">
            <?php
            foreach($errors as $err){

            ?>
                <li><?php echo($err); ?></li>
            <?php }?>
            </div>
            <?php }?>
<div class="form">
<form method="post" action="login.php">                                                                                                                                                                                                                                                                                                                                                                                                                                                              
<?php include ('errors.php');?>
<div class="input">
    <label>Username</label>
    <input type="text" name="username" >
</div>
<div class="input">
    <label>Password</label>
    <input type="password" name="password">
</div>
<div class="input">
    <button type="submit" class="btn" name="log_btn">Login</button>
</div>
<p> Not yet a member? <a href= "register.php">Sign up</a>
</p>
</form>
</div>
</body>
</html>
