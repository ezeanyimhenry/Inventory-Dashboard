<?php


if(isset($_GET['delete_bought'])){
    $delete_id = $_GET['delete_bought'];
    $delete_Pro = "delete from bought where b_id = '$delete_id'";
    $run_delete = mysqli_query($con,$delete_Pro);
    if($run_delete){
        echo "<script>alert('Product deleted successfully')</script>";
                echo "<script>window.open('index.php?view_bought','_self')</script>";
    }
}



?>