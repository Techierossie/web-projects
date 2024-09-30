<?php

session_start();

include "server.php";

include "process.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel= "stylesheet" href="all.css">
    <script src="sweetalert/dist/sweetalert.min.js"></script>
    
</head>
<body>
  <div class= "header">
      <h2>Register</h2>
</div>
<?php 
   
    if(count($errors)>0){

?>
    <div class="alert alert-danger">
        <?php 
        foreach($errors as $err){

?>
    <li><?php echo $err; ?></li>
    <?php } ?>
    </div>
    <?php } ?>
<form method="post"  action="register.php"  enctype ="multipart/form-data>">
<?php include ('errors.php'); ?>
<div class= "input">
    <label>Username:</label>
    <input type= "text" name="username" value= "<?php echo $username;?>">
</div>
<div class= "input">
    <label>Email:</label>
    <input type= "email" name="email" value= "<?php echo $email;?>">
</div>
<div class= "input">
   <label> Select image to upload:</label>
    <input type= "file" name="filetoupload" id="filetoupload" value= "Upload Image">
</div>
<div class= "input">
    <label>Password:</label>
    <input type= "password" name="pass" value= "<?php echo $password;?>">
</div>
<div class= "input">
    <label>Confirm-password:</label>
    <input type= "password" name="cpass" value= "<?php echo $password;?>">
</div>
<div class= "input_btn">
    <button type= "submit" name="reg_submit" class="btn">Register</button>
    <p>
        Already a member? <a href= "login.php">Sign in</a>
</p>
</div>
</form>
</body>
</html>