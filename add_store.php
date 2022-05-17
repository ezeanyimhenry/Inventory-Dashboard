<?php 
include "conn.php";

$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
$product_title='';$product_img1='';$product_img2='';$product_img3='';$product_price='';$product_keywords='';$product_desc='';$initial_price='';$shipping_fee='';$quantity='';
if(isset($_POST['submit'])){
   $product_title = mysqli_real_escape_string($con,$_POST['product_title']);
    
    
   
                 
         mysqli_query($con, "insert into store (name) values ('$product_title')");
         
             echo"<script>alert('DATA IS SUCCESSFULLY ADDED')</script>";
        echo "<script>window.open('index.php?view_store','_self')</script>";
         
     }
    



?>


    <div class="row">
        <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard/Insert Store
            
            </li>
            
            </ol>
        
        </div>
        
        </div>
    <div class="row">
        <div class="col-lg-12">
        
        <div class="panel panel-default">
            
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert store</h3>
            
            </div>
            <div class="panel-body">
                <div align="center">
            <?php echo $msg4;?><br>
                </div>
            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                
                <label class="col-md-3 control-label"> Store Title: </label>
                <div class="col-md-6">
                    
                    <input name="product_title" type="text" class="form-control" value="<?php echo $product_title; ?>" required>
                    </div>
                    
                </div>
                
             <div class="form-group">
                
                
                <div class="col-md-6">
                    
                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
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