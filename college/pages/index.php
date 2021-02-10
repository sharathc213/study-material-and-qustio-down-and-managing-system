<?php 

    session_start();

    
    if(!isset($_SESSION['college'])){
        
        echo "<script>window.open('../../index.php#login','_self')</script>";
        
    }else{
        include("../../db.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Studentscorner-college</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

       
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php
            include('./sidebar.php')
            ?>
             
            <div id="page-wrapper">
                <div class="container-fluid">
                <?php
                
                if(isset($_GET['dashboard'])){
                    
                    include("dashboard.php");
                    
            }   if(isset($_GET['insert_hsn'])){
                    
                    include("insert_hsn.php");
                    
            }   if(isset($_GET['insert_product'])){
                    
                    include("insert_product.php");
                    
            }  
                   if(isset($_GET['insert_seller'])){
                    
                    include("insert_seller.php");
                    
              }  
                    if(isset($_GET['view_seller'])){
                    
                    include("view_seller.php");
                    
            }   
                if(isset($_GET['add_purchase'])){
                    
                    include("add_purchase.php");
                    
            }  
                if(isset($_GET['view_purchase'])){
                    
                    include("view_purchase.php");
                    
            } 
             if(isset($_GET['insert_sail'])){
                    
                    include("insert_sail.php");
                    
            } 
                   if(isset($_GET['view_sail'])){
                    
                    include("view_sail.php");
                    
            } 
    
            ?>

                  
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
<?php
    }
?>