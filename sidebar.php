<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    
    <span class="sr-only">Toggle Navigation</span>
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    
    
    
    </button>
    
    <a href="index.php?dashboard" class="navbar-brand">COMPANY NAME</a>
    </div>
    
    <ul class="nav navbar-right top-nav">
    <li class="dropdown">
        
        <a href="" class="dropdown-toggle" data-toggle="dropdown">
        
        <i class="fa fa-user"> <?php //echo $username;?> <b class="caret"></b></i>
        
        </a>
        <ul class="dropdown-menu">
        <li><a href="index.php?user_profile">
            <i class="fa fa-fw fa-user"></i>
            Profile
            </a>
            
            </li>
            <li><a href="index.php?view_products">
            <i class="fa fa-fw fa-envelope"></i>
            Products
                <span class="badge"><?php echo $count_products;?></span>
            </a>
            
            </li>
            <li><a href="index.php?view_customers">
            <i class="fa fa-fw fa-users"></i>
            Customers
                <span class="badge"><?php //echo $count_customers;?></span>
            </a>
            
            </li>
            <li><a href="index.php?view_cats">
            <i class="fa fa-fw fa-gear"></i>
            Product Categories
                <span class="badge"><?php //echo $count_p_cat;?></span>
            </a>
            
            </li>
            <li class="divider"></li>
            <li><a href="index.php?rev">
            <i class="fa fa-fw fa-power-off"></i>
            Revenue
                
            </a>
            
            </li>
            <li><a href="logout.php">
            <i class="fa fa-fw fa-power-off"></i>
            Log Out
                
            </a>
            
            </li>
        
        </ul>
        
        
        </li>
    
    
    </ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
    <li>
        <a href="index.php?dashboard">
            <i class="fa fa-fw fa-dashboard"></i> Company
            
                
            </a>
        
    </li>
        
        <li>
        <a href="#" data-toggle="collapse" data-target="#products">
            <i class="fa fa-fw fa-tag"></i> Products
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="products" class="collapse">
            <li>
                <a href="index.php?insert_products"> Insert Product</a>
                </li>
                <li>
                <a href="index.php?view_products"> View Products</a>
                
                </li>
            
            </ul>
        
    </li>
         <li>
        <a href="#" data-toggle="collapse" data-target="#productss">
            <i class="fa fa-fw fa-tag"></i> Product Categories
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="productss" class="collapse">
            <li>
                <a href="index.php?add_cat"> Insert category</a>
                </li>
                <li>
                <a href="index.php?view_cats"> View category</a>
                
                </li>
            
            </ul>
        
    </li>
     <li>
        <a href="#" data-toggle="collapse" data-target="#productsxs">
            <i class="fa fa-fw fa-tag"></i> Store
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="productsxs" class="collapse">
            <li>
                <a href="index.php?add_store"> Add Store</a>
                </li>
                <li>
                <a href="index.php?view_store"> View Store</a>
                
                </li>
            
            </ul>
        
    </li>
         <li>
        <a href="#" data-toggle="collapse" data-target="#p_cat">
            <i class="fa fa-fw fa-edit"></i> Product Sold
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="p_cat" class="collapse">
            <li>
                <a href="index.php?insert_p_cats"> Insert Product Sold</a>
                </li>
                <li>
                <a href="index.php?view_p_cats"> View Products Sold</a>
                
                </li>
            
            </ul>
        
    </li>
        
       <!-- <li>
        <a href="#" data-toggle="collapse" data-target="#cat">
            <i class="fa fa-fw fa-date"></i> Categories
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="cat" class="collapse">
            <li>
                <a href="index.php?insert_cats"> Insert Category</a>
                </li>
                <li>
                <a href="index.php?view_cats"> View  Category</a>
                
                </li>
            
            </ul>
        
    </li>-->
         <li>
        <a href="#" data-toggle="collapse" data-target="#slides">
            <i class="fa fa-fw fa-gear"></i> Product Bought
            <i class="fa fa-fw fa-caret-down"></i> 
                
            </a>
            <ul id="slides" class="collapse">
            <li>
                <a href="index.php?insert_p_bought"> Insert Product Bought</a>
                </li>
                <li>
                <a href="index.php?view_bought"> View  Product Bought</a>
                
                </li>
            
            </ul>
        
    </li>
    
      
    
    </ul>
    
    </div>
</nav>