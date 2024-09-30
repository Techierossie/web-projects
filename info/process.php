<script src="sweetalert/dist/sweetalert.min.js"></script>

<?php

include "server.php";


// initializing variables
$username="";
$email="";
$upload="";
$password="";
$cpassword="";
$errors= array();

// Registration

if(isset($_POST['reg_submit'])){
    // receive all input values from the form
    $username=( $_POST['username']);
    $email= ($_POST['email']);
    $upload= ($_POST['filetoupload']);
    $password=md5($_POST['pass']);
    $cpassword= md5($_POST['cpass']);

    // form validation

    if($password!==$cpassword){
        array_push($errors, "Password mismatch");
    }
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($upload)){
        array_push($errors, "Image is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    
    // check  database to make sure a user does not already exist with same username/password
    $sql = "SELECT * FROM users WHERE username='$username' OR password= '$password'";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
    // if user already exist

        array_push($errors, "Username already exist");
        
    }
    
    // finally register if no errors
    if(count($errors)==0){
    $sql= "INSERT INTO `users`(`id`, `username`, `email`, `photos`, `password`, `cpassword`) VALUES (id, '$username','$email', '$upload', '$password', '$cpassword')";
    $result= mysqli_query($conn, $sql);
    echo "<h1> Welcome ".$_SESSION['username']=$username,"</h1>";
    if($result=true){
        echo "<script>
                swal('Done','Registration successful!.', 'success')
            </script>";
    }
  }else{
    echo 
    "<script>
          swal('Error','Registration failed.', 'error')
          .then(function(result){
              if (true) {
                  window.location = 'register.php';
              }
          })
      </script>";
    
  }
 

}



// login user 

if(isset($_POST['log_btn'])){
    $username= ($_POST['username']);
    $password= ($_POST['password']);
    $password=md5($_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is Requirred");
    }
    if(empty($password)){
        array_push($errors, "Password is Requirred");
    }

//     $sql = "SELECT * FROM forms WHERE username='$user' AND password='$pass' LIMIT 1";
//     $result = mysqli_query($conn, $sql);
//     if(mysqli_num_rows($result)==1){
//       header("Location: dashboard.php");
//     }
//     else{
//       echo "invalid username or password";
//     }
 

    
         $sql= "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
         $result= mysqli_query($conn, $sql);
         if(mysqli_num_rows($result)>0){
           session_start();
         $row= mysqli_fetch_assoc($result);
         $_SESSION['username'] =$row['username'];
             header('Location:index.php');
             exit();

            echo
            "<script>
            swal('Done','Login successful!.', 'success')
            </script>";
         }
    
          else{
             echo
             "Not Found, Incorrect Username or Password";
        //      "<script>
        //      swal('Error','Registration failed.', 'error')
        //      .then(function(result){
        //          if (true) {
        //              window.location = 'reg.php';
        //          }
        //      })
        //  </script>";
            
         }
        }
        ?>

    


































































































































































       