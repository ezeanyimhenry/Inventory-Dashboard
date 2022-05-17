<?php
    
include "conn.php";


$get_products = mysqli_query($con, "select * from stock");
$count_products= mysqli_num_rows($get_products);
$get_customers = mysqli_query($con, "select * from sold");
$count_customers= mysqli_num_rows($get_customers);
$get_p_cat = mysqli_query($con, "select * from bought");
$count_p_cat= mysqli_num_rows($get_p_cat);
/*$get_orders = mysqli_query($con, "select * from customers_orders");
$count_orders= mysqli_num_rows($get_orders);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/dash.css">
    </head>
    <body>
      <div id="wrapper">
          <?php include "sidebar.php"; ?>
        <div id="page-wrapper">
          <div class="container-fluid">
            
            
            <?php
              if(isset($_GET['dashboard'])){
                  include "dashboard.php";
              }
              if(isset($_GET['insert_products'])){
                  include "insert_product.php";
              }
              if(isset($_GET['view_products'])){
                  include "view_products.php";
              }
              if(isset($_GET['delete_product'])){
                  include "delete_product.php";
              }
              if(isset($_GET['edit_product'])){
                  include "edit_product.php";
              }
              if(isset($_GET['insert_p_cats'])){
                  include "insert_sold.php";
              }
              if(isset($_GET['view_p_cats'])){
                  include "view_sold.php";
              }
              if(isset($_GET['delete_p_cat'])){
                  include "delete_sold.php";
              }
              if(isset($_GET['edit_p_cat'])){
                  include "edit_sold.php";
              }
              if(isset($_GET['insert_p_bought'])){
                  include "insert_bought.php";
              }
              if(isset($_GET['view_bought'])){
                  include "view_bought.php";
              }
              if(isset($_GET['edit_bought'])){
                  include "edit_bought.php";
              }
              if(isset($_GET['delete_bought'])){
                  include "delete_bought.php";
              }
               if(isset($_GET['view_cats'])){
                  include "view_cats.php";
              }
              if(isset($_GET['add_cat'])){
                  include "add_cats.php";
              }
               if(isset($_GET['edit_cats'])){
                  include "edit_cats.php";
              }
              
              if(isset($_GET['add_store'])){
                  include "add_store.php";
              }
               if(isset($_GET['edit_store'])){
                  include "edit_store.php";
              }
              if(isset($_GET['view_store'])){
                  include "view_store.php";
              }
              
             if(isset($_GET['rev'])){
                  include "rev.php";
              }
              
              ?>
            
            
            </div>
          
          
          </div>
        
        </div>  
        
        
        
        
              <div id="bttp" class="btt">
    <a href="#"> <i class="fa fa-arrow-circle-up"></i></a>
    
    </div>
        
        <script>
    myID = document.getElementById("bttp");

        var myScrollFunc = function() {
          var y = window.scrollY;
          if (y >= 100) {
            myID.className = "btt show"
          } else {
            myID.className = "btt hide"
          }
        };

        window.addEventListener("scroll", myScrollFunc);

    
    </script>
    
    <script src="js/jquery.js">
        </script>
    <script src="js/bootstrap.min.js">
        </script>
        <script src="js/data-table.js">
        </script>
         <script src="js/datatables.min.js">
        </script>
    </body>
</html>
