<style>
}
#search .navbar-form{
    float: right;
}
#search{
    clear: both;
    border-top: solid 1px #333333;
    text-align: right;
}
#search .navbar-form .input-group{
    display: block;
}
#search .navbar-form .input-group .form-control{
    width: 100%;
}

</style>
<div class="row">
<div class="col-lg-12">
    <div class="breadcrumb">
    <div class="active">
        <i class="fa fa-dashboard"></i> Dashboard / View Products
         </div>
        </div>
   <form class="navbar-frm" id="search" method="post" action="index.php?search_products" style="float:right; margin-bottom:10px;">
       <div class="input-group">
          <input class="form-control" name="search_products" placeholder="Search" required>
        <span class="input-group-btn">
         <button class="btn btn-primary btn" type="submit" name="search" value="search">
                            <i class="fa fa-search"></i>
                        </button>
       </span>
       </div>
        </form>
    </div>
</div>

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        <i class="fa fa-tags"></i> View Products
        </h3>
       </div>
       <div>
        <form method="post">
            <input type="submit" name="calc" class="btn btn-primary" value="Calculate">
        </form>
       </div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
           
                <thead>
                <tr>
                    <th>Product No</th>
                    <th>Product Name</th>
                  <th>Product Price</th>
                   <th>Quantity</th>
                   <th>Color</th>
                   <th>Total</th>
                   <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                    
                    
                    </tr>
                
                </thead>
            <tbody><?php
                $i=0;
                $get_pro ="select * from sold order by 1 DESC";
                $run_pro = mysqli_query($con,$get_pro);
                
                while($row_pro=mysqli_fetch_array($run_pro)){
                  $pro_id = $row_pro['pro_id'];
                    $pro_name = $row_pro['pro_name'];
                    $pro_price = $row_pro['unit_price'];
                    $pro_keywords = $row_pro['quantity_sold'];
                    $pro_desc = $row_pro['pro_color'];
                    $date = $row_pro['date'];
                    
                   $i++;
                    $total = $pro_price * $pro_keywords;
                
                ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $pro_name;?></td>
                       <td><?php echo $pro_price;?></td>
                   
                   
                <td><?php echo $pro_keywords;?></td>
               
                <td><?php echo $pro_desc;?></td>
                <td><?php echo $total;?></td>
                <td><?php echo $date;?></td>
               
                <td>
                   <a href="index.php?edit_p_cat=<?php echo $pro_id;?>">
                     <button class="btn btn-success">
                        <i class="fa fa-pencil"></i></button>
                    
                    </a>  
                    
                    </td>
                <td>
                    <button class='btn btn-danger' onclick='deleteme(<?php echo $pro_id;?>)'> <i class="fa fa-trash"></i></button>
                    
                   
                    
                      
                    
                    </td>
                    
                    
                   
                </tr>
                
                <?php }?>
                
                <script>
                 function deleteme(delid){
                     if(confirm("Are you sure you want to delete?")){
                         window.location.href='index.php?delete_p_cat=' +delid+'';
                         return true;
                     }
                 }
                 
                 </script>
                
                </tbody>
            </table>
            </div>
        
        </div>
        
    </div>
    </div>
</div>
<?php
if(isset($_POST['calc'])){
   
    $bousumm= mysqli_query($con, "select sum(unit_price) from bought where counter = '0'");
$bousum = mysqli_fetch_row($bousumm)[0];
$soldsumm= mysqli_query($con, "select sum(unit_price) from sold where counter = '0'");
$soldsum = mysqli_fetch_row($soldsumm)[0];
$bouqtyy= mysqli_query($con, "select sum(b_quantity) from bought where counter = '0'");
$bouqty = mysqli_fetch_row($bouqtyy)[0];
$soqtyy= mysqli_query($con, "select sum(quantity_sold) from sold where counter = '0'");
$soqty = mysqli_fetch_row($soqtyy)[0];
   $total_qty = $soqty + $bouqty;
   $total_rev = $bousum + $soldsum;
 $insert = mysqli_query ($con, "insert into total (bought,sold,total_rev,date,qty_bou,qty_sold,total_qty) value ('$bousum','$soldsum','$total_rev',NOW(),'$bouqty','$soqty','$total_qty')");
 $update = mysqli_query($con,"update sold set counter = '1' where counter = '0'");
  $updatee = mysqli_query($con,"update bought set counter = '1' where counter = '0'");
 if($insert && $update && $updatee){
    echo "<script>window.open('rev.php','_self')</script>";
 }  
}
?>