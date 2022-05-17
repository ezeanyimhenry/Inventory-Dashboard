<?php
include "conn.php";

if(isset($_GET['delete_product'])){
    $delete_id = $_GET['delete_product'];
    $delete_Pro = "delete from colors where id = '$delete_id'";
    $run_delete = mysqli_query($con,$delete_Pro);
    if($run_delete){
       // echo "<script>alert('Product deleted successfully')</script>";
                echo "<script>window.open('index.php?view_cats','_self')</script>";
    }
}



?>