<?php 
include "conn.php";

$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
$product_title='';$product_img1='';$product_img2='';$product_img3='';$product_price='';$product_keywords='';$product_desc='';$initial_price='';$shipping_fee='';$quantity='';
if(isset($_POST['submit'])){
   $product_title = mysqli_real_escape_string($con,$_POST['product_title']);
    $product_cat = mysqli_real_escape_string($con,$_POST['product_cat']);
    $initial_price = mysqli_real_escape_string($con,$_POST['initial_price']);
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    
   
                 
         mysqli_query($con, "insert into sold (pro_name,quantity_sold,pro_color,unit_price) values ('$product_title','$quantity','$product_cat', '$initial_price')");
    
    $sql = "SELECT quantity_sold FROM sold WHERE quantity_sold = $quantity";
    $run = mysqli_query($con, $sql);
    $fetch = mysqli_fetch_assoc($run);
    $quantity = $fetch['quantity_sold'];
    $sel = "SELECT quantity FROM stock WHERE product_name = '$product_title' && color = '$product_cat'";
    $exe = mysqli_query($con,$sel);
    $get = mysqli_fetch_assoc($exe);
    $quan = $get['quantity'];
    if($quantity <= $quan){
    $sub = $quan - $quantity;
        $update = mysqli_query($con, "UPDATE stock SET quantity = '$sub' WHERE product_name ='$product_title'");
        echo"<script>alert('DATA IS SUCCESSFULLY ADDED')</script>";
        echo "<script>window.open('index.php?view_sold','_self')</script>";
    }else{
        echo "<script>alert('OUT OF STOCK')</script>";
    }
         
             
         
     }
    



?>


    <div class="row">
        <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard/Insert Products
            
            </li>
            
            </ol>
        
        </div>
        
        </div>
    <div class="row">
        <div class="col-lg-12">
        
        <div class="panel panel-default">
            
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert Product</h3>
            
            </div>
            <div class="panel-body">
                <div align="center">
            <?php echo $msg4;?><br>
                </div>
            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                
                <label class="col-md-3 control-label"> Product Title: </label>
                <div class="col-md-6">
                    
                      <select class="form-control" name="product_title">
                    <option> Select a Product Category </option>
                    
                    <?php
                        $get_p_cat = "select product_name from stock";
                        $run_p_cat = mysqli_query($con,$get_p_cat);
                        
                        while ($row_p_cat=mysqli_fetch_array($run_p_cat)){
                           $p_id = $row_p_cat['id']; 
                            
                            $p_title = $row_p_cat['product_name']; 
                            echo "
                            <option value='$p_title'> $p_title </option>
                            
                            
                            ";
                        }
                        
                        ?>
                    
                    </select>
                    </div>
                    
                </div>
                
                <div class="form-group">
                
                <label class="col-md-3 control-label"> Product Color: </label>
                <div class="col-md-6">
                    
                    <select class="form-control" name="product_cat">
                    <option> Select a Product Category </option>
                    
                    <?php
                        $get_p_cats = "select * from colors";
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                        
                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                           $p_cat_id = $row_p_cats['id']; 
                            
                            $p_cat_title = $row_p_cats['color']; 
                            echo "
                            <option value='$p_cat_title'> $p_cat_title </option>
                            
                            
                            ";
                        }
                        
                        ?>
                    
                    </select> 
                    </div>
                    
                </div>
            
                 
               
               
                <div class="form-group">
                
                <label class="col-md-3 control-label">Price: </label>
                <div class="col-md-6">
                    
                    <input name="initial_price" type="text" class="form-control" value="<?php echo $initial_price;?>" required>
                    </div>
                    
                </div>
                
               
               
                 <div class="form-group">
                
                <label class="col-md-3 control-label"> Quantity: </label>
                <div class="col-md-6">
                    
                    <input name="quantity" type="text" class="form-control" value="<?php echo $quantity;?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                
                <label class="col-md-3 control-label">  </label>
                <div class="col-md-6">
                    
                    <input name="submit" type="submit" class="form-control btn btn-default" value="Insert Product" >
                    </div>
                    
                </div>
                </form>
            </div>
            
            
            </div>
        
        </div>
        
        </div>
    
     <script src="js/jquery.js">
        </script>
    <script src="js/bootstrap.min.js">
        </script>
        <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'texarea'});</script>
    

<?php 
include "conn.php";


?>