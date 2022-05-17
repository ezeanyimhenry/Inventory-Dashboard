<?php


if(isset($_GET['delete_p_cat'])){
    $delete_id = $_GET['delete_p_cat'];
    $delete_Pro = "delete from sold where pro_id = '$delete_id'";
    $run_delete = mysqli_query($con,$delete_Pro);
    if($run_delete){
        echo "<script>alert('Product deleted successfully')</script>";
                echo "<script>window.open('index.php?view_p_cats','_self')</script>";
    }
}



?>