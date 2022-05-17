<?php 
include "conn.php";

if(isset($_GET['edit_store'])){
    $edit_id = $_GET['edit_store'];
    $get_p = "select * from store where id='$edit_id'";
    $run_edit = mysqli_query($con,$get_p);
    $row_edit = mysqli_fetch_array($run_edit);
    $p_id = $row_edit['id'];
    $color = $row_edit['name'];
   
    
    
    
}







$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
$p_title='';$product_img1='';$product_img2='';$product_img3='';$product_price='';$product_keywords='';$product_desc='';
if(isset($_POST['update'])){
   $product_title = mysqli_real_escape_string($con,$_POST['product_title']);
    
    
    
    
             $sql= "UPDATE store SET name='$product_title' WHERE id='$p_id'";
                 $sql_run=mysqli_query($con,$sql);
    if($sql_run){
        
            echo"<script>alert('Category Sucessfully Edited!!!')</script>";
        echo "<script>window.open('index.php?view_store','_self')</script>";
         
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
            <i class="fa fa-dashboard"></i> Dashboard/Update Store
            
            </li>
            
            </ol>
        
        </div>
        
        </div>
    <div class="row">
        <div class="col-lg-12">
        
        <div class="panel panel-default">
            
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-pencil fa-fw"></i>Update Store</h3>
            
            </div>
            <div class="panel-body">
                <div align="center">
            <?php echo $msg4;?><br>
                </div>
            <form method="post" class="form-horizontal">
                <div class="form-group">
                
                <label class="col-md-3 control-label">Store Title: </label>
                <div class="col-md-6">
                    
                    <input name="product_title" type="text" class="form-control" value="<?php echo $color; ?>">
                    </div>
                    
                </div>
                
                            
                
              
              
                 
              
                
                 
               
                
                <div class="form-group">
                
                <label class="col-md-3 control-label">  </label>
                <div class="col-md-6">
                    
                    <input name="update" type="submit" class="form-control btn btn-primary" value="Update Category" >
                    </div>
                    
                </div>
                </form>
            </div>
            
            
            </div>
        
        </div>
        
            
        
        </div>
    
    
