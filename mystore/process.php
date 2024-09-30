<!-- <?php

include "server.php";

if (isset($_POST['submit'])){

    // variable declaration

    $pname= $_POST['productname'];
    $pcat= $_POST['productcat'];
    $punit= $_POST['productunit'];
    $price= $_POST['pprice'];
    $date= $_POST['pdate'];


    $sql=  "INSERT INTO ecommerce VALUES (null, '$pname', '$pcat', '$punit'*'$price', '$date') ";
    $result= mysqli_query($conn, $sql);

    if ($result){
        echo "record add successfully";
    }


}
?>
 -->
