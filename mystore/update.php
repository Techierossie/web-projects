<?php

include "server.php";

if(isset($_POST['update'])){

    // variable declaration
    $user_id= $_POST['id'];
    $product_name= $_POST['productname'];
    $product_category= $_POST['productcategory'];
    $product_unit= $_POST['productunit'];
    $pprice= $_POST['price'];
    $pdate= $_POST['date'];

    $sql= "UPDATE ecommerce SET 'id'='$user_id', 'productname'= '$product_name', 'productunit'='$product_unit', 'price'='$pprice', 'date'='$pdate')";
    $result= mysqli_query($conn, $sql);

    if($result==TRUE){
        echo "Record Updated successfully";
    
    }
    else{
        echo "Error:" . $sql ,"<br>" .$conn_errror;
    }
}


// UPDATE SECTION WHEN EDIT BTN WAS CLICKED.
if(isset($_GET['edit'])){
    $user_id = $_GET['edit'];
    $update = true;

    
    // echo $id;

    $sql = "SELECT * FROM ecommerce WHERE id ='$user_id'";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
   
        $product_name= $row['productname'];
        $product_category= $row['productcategory'];
        $product_unit= $row['productunit'];
        $pprice= $row['price'];
        $pdate= $row['date'];
        $id= $row['id'];

    }

    
}

//  edit section

// if(isset($_GET['id'])){

//     // variable declaration

//     $user_id= $_GET['id'];

//     $sql= "SELECT *FROM ecommerce WHERE 'id'= '$user_id";
//     $result= mysqli_query($conn, $sql);
// }
//     $row = mysqli_fetch_assoc($result);

//         $product_name= $row['productname'];
//         $product_category= $row['productcategory'];
//         $product_unit= $row['productunit'];
//         $pprice= $row['price'];
//         $pdate= $row['date'];
//         $id= $row['id'];

//         ?>
        <body>
        <h2> Product Update Form </h2>
        <form action="" method= "post">
        <div class="container">
        <h2>ADD NEW PRODUCT</h2>
       <label>Product Name</label>:<input type="text" name="productname" value= "<?php echo $productname; ?>"><br><br>
       <label>Product Category:</label><input type="text" name="productcategory" value= "<?php echo $productcategory; ?>"><br><br>
       <label>Product Unit:</label><input type="text" name="productunit" value= "<?php echo $productunit; ?>"><br><br>
      <label>Price:</label><input type="text" name="price" value= "<?php echo $unit; ?>"><br><br>
       <label>Total: </label><input type="text" name="total" value ="<?php echo $total; ?>"><br><br>
      <label>Date:</label><input type="date" name="date" value= "<?php echo $date; ?>"><br><br>
        <input type="submit" name="edit" value="edit"> 
    </form>  
</body>
</html> 

   <?php 

       header('Location:view.php');

   
        ?>
    
