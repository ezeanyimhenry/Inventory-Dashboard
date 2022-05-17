<?php 
include "conn.php";

$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
$product_title='';$product_img1='';$product_img2='';$product_img3='';$product_price='';$product_keywords='';$product_desc='';$initial_price='';$shipping_fee='';$quantity='';
if(isset($_POST['submit'])){
   $product_title = mysqli_real_escape_string($con,$_POST['product_title']);
    $product_cat = mysqli_real_escape_string($con,$_POST['product_cat']);
    $initial_price = mysqli_real_escape_string($con,$_POST['initial_price']);
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    
   
                 
         mysqli_query($con, "insert into stock (product_name,quantity,color,unitprice) values ('$product_title','$quantity','$product_cat', '$initial_price')");
         
             echo"<script>alert('DATA IS SUCCESSFULLY ADDED')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
         
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
                    
                    <input name="product_title" type="text" class="form-control" value="<?php echo $product_title; ?>" required>
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