<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
    <ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i>
        Dashboard
        </li>
    
    </ol>
    </div>

</div>

<div class="row">
    
<div class="col-lg-4 col-md-6">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <div class="row">
        <div class="col-xs-3">
            
            <i class="fa fa-tasks fa-5x"></i>
            </div>
        <div class="col-xs-9 text-right">
            <div class="huge">
            <?php echo $count_products; ?>
            </div>
            <div>Products</div>
            </div>
        </div>
        
        </div>
        <a href="index.php?view_products">
        <div class="panel-footer">
            <span class="pull-left">
                View Details
            </span>
            <span class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
            </div>
        </a>
    </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
    <div class="panel panel-green">
    <div class="panel-heading">
        <div class="row">
        <div class="col-xs-3">
            
            <i class="fa fa-users fa-5x"></i>
            </div>
        <div class="col-xs-9 text-right">
            <div class="huge">
            <?php echo $count_customers;?>
            </div>
            <div>Sold</div>
            </div>
        </div>
        
        </div>
        <a href="index.php?view_p_cats">
        <div class="panel-footer">
            <span class="pull-left">
                View Details
            </span>
            <span class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
            </div>
        </a>
    </div>
    </div>
    
        <div class="col-lg-4 col-md-6">
    <div class="panel panel-yellow">
    <div class="panel-heading">
        <div class="row">
        <div class="col-xs-3">
            
            <i class="fa fa-tags fa-5x"></i>
            </div>
        <div class="col-xs-9 text-right">
            <div class="huge">
            <?php echo $count_p_cat;?>
            </div>
            <div>Bought</div>
            </div>
        </div>
        
        </div>
        <a href="index.php?view_bought">
        <div class="panel-footer">
            <span class="pull-left">
                View Details
            </span>
            <span class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
            </div>
        </a>
    </div>
    </div>
    
 
    
    
</div>

<hr class="dotted short">

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
        <i class="fa fa-money fa-fw"></i> New Orders
        
        </h3>
        
        </div>
    <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered tab">
            <thead>
            <th>Product No</th>
                    <th>Product Name</th>
                  <th>Product Price</th>
                   <th>Quantity</th>
                   <th>Color</th>
                    
            
            </thead>
                   <tbody><?php
                $i=0;
                $get_pro ="select * from stock order by 1 DESC";
                $run_pro = mysqli_query($con,$get_pro);
                
                while($row_pro=mysqli_fetch_array($run_pro)){
                  $pro_id = $row_pro['product_id'];
                    $pro_name = $row_pro['product_name'];
                    $pro_price = $row_pro['unitprice'];
                    $pro_keywords = $row_pro['quantity'];
                    $pro_desc = $row_pro['color'];
                    
                   $i++; 
                
                ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $pro_name;?></td>
                       <td><?php echo $pro_price;?></td>
                   
                   
                <td><?php echo $pro_keywords;?></td>
               
                <td><?php echo $pro_desc;?></td>
               
              <?php }?>
                
                </tbody>
            </table>
        
        </div>
        <div class="pull-right">
        <a href="index.php?view_products">
            View All Products <i class="fa fa-arrow-circle-right"></i>
            
            
            </a>
        
        </div>
        
        
        </div>
    </div>
    
    </div>
   <!-- <div class="col-lg-4">
    <div class="panel">
        <div class="panel-body">
        <div class="mb-md thumb-info">
            <img src="../images/arch.jpg" alt="admin-thumb-info" class="rounded img-responsive">
            
            <div class="thumb-info-title">
            <span class="thumb-info-inner">Pappie</span>
                <span class="thumb-info-type">Developer</span>
            </div>
            </div>
        <div class="md-body">
            
            <div class="widget-content-expanded">
            <i class="fa fa-user"></i><span>Email:</span> daniel@gmail.com<br>
                <i class="fa fa-user"></i><span>Email:</span> daniel@gmail.com<br>
                <i class="fa fa-user"></i><span>Email:</span> daniel@gmail.com<br>
            </div>
            
            <hr class="dotted short">
            
            <h5 class="text-muted">About ME:</h5>
            <p>jtht tktjtr trkjtkrr rtjltjht tjtjlt 
            <a href="">yrhtee</a><br>
                jfuelklkkerlkllerlllak olk oilk. lkki
            </p>
            </div>
        </div>
        
        </div>
    </div>-->
    

</div>
