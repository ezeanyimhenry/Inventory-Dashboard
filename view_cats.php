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
        <i class="fa fa-dashboard"></i> Dashboard / View Categories
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
        <i class="fa fa-tags"></i> View Categories
        </h3>
       </div>
        <div class="panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered table-hover">
           
                <thead>
                <tr>
                    <th>Product No</th>
                    <th>Product Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                    
                    
                    </tr>
                
                </thead>
            <tbody><?php
                $i=0;
                $get_pro ="select * from colors order by 1 DESC";
                $run_pro = mysqli_query($con,$get_pro);
                
                while($row_pro=mysqli_fetch_array($run_pro)){
                  $pro_id = $row_pro['id'];
                    $pro_name = $row_pro['color'];
                   
                    
                   $i++;
                    // $total = $pro_price * $pro_keywords;
                
                ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $pro_name;?></td>
                     
               
                <td>
                   <a href="index.php?edit_cats=<?php echo $pro_id;?>">
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
                         window.location.href='delete_cat.php?delete_product=' +delid+'';
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
