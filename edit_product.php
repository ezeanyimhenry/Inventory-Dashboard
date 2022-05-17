<?php 
include "conn.php";

if(isset($_GET['edit_product'])){
    $edit_id = $_GET['edit_product'];
    $get_p = "select * from stock where product_id='$edit_id'";
    $run_edit = mysqli_query($con,$get_p);
    $row_edit = mysqli_fetch_array($run_edit);
    $p_id = $row_edit['product_id'];
    $p_cat = $row_edit['color'];
    $p_name = $row_edit['product_name'];
    $quan = $row_edit['quantity'];
    $initial_product = $row_edit['unitprice'];
    
    
    
}

$get_p_cat = mysqli_query($con, "select * from colors where id ='$p_cat'");
$row_p_cat = mysqli_fetch_array($get_p_cat);

$p_cat_title = $row_p_cat['color'];






$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
$p_title='';$product_img1='';$product_img2='';$product_img3='';$product_price='';$product_keywords='';$product_desc='';
if(isset($_POST['update'])){
   $product_title = mysqli_real_escape_string($con,$_POST['product_title']);
    $product_cat = mysqli_real_escape_string($con,$_POST['product_cat']);
    $initial_prices = mysqli_real_escape_string($con,$_POST['initial_price']);
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    
    
    
             $sql= "UPDATE stock SET product_name='$product_title',color='$product_cat',unitprice='$initial_prices',quantity='$quantity' WHERE product_id='$p_id'";
                 $sql_run=mysqli_query($con,$sql);
    if($sql_run){
        
            echo"<script>alert('Product Sucessfully Edited!!!')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
         
     }else{
         echo"<script>alert('ERROR!!!')</script>";
       // echo "<script>window.open('index.php?edit_product=$p_id','_self')</script>";
    }
    
}


?>
<?php
$ms='';$ms1='';$ms2='';$ms3='';$ms4='';$ms5='';$ms6='';$ms7='';$ms8='';$ms9='';$ms10='';$ms11='';$ms12='';







?>

    <div class="row">
        <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard/Update Product
            
            </li>
            
            </ol>
        
        </div>
        
        </div>
    <div class="row">
        <div class="col-lg-6">
        
        <div class="panel panel-default">
            
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-pencil fa-fw"></i> Update Product</h3>
            
            </div>
            <div class="panel-body">
                <div align="center">
            <?php echo $msg4;?><br>
                </div>
            <form method="post" class="form-horizontal">
                <div class="form-group">
                
                <label class="col-md-3 control-label"> Product Title: </label>
                <div class="col-md-6">
                    
                    <input name="product_title" type="text" class="form-control" value="<?php echo $p_name; ?>" required>
                    </div>
                    
                </div>
                 <div class="form-group">
                
                <label class="col-md-3 control-label"> Quantity: </label>
                <div class="col-md-6">
                    
                    <input name="quantity" type="text" class="form-control" value="<?php echo $quan; ?>" required>
                    </div>
                    
                </div>
                            
                
                <div class="form-group">
                
                <label class="col-md-3 control-label"> Color: </label>
                <div class="col-md-6">
                    
                    <select class="form-control" name="product_cat">
                    <option value="<?php echo $p_cat_title;?>"><?php echo $p_cat_title;?> </option>
                    
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
                
                <label class="col-md-3 control-label"> Price: </label>
                <div class="col-md-6">
                    
                    <input name="initial_price" type="text" class="form-control" value="<?php echo $initial_product;?>" required>
                    </div>
                    
                </div>
              
                
                 
               
                
                <div class="form-group">
                
                <label class="col-md-3 control-label">  </label>
                <div class="col-md-6">
                    
                    <input name="update" type="submit" class="form-control btn btn-primary" value="Update Product" >
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