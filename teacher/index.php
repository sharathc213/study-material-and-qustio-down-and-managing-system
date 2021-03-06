<?php 

    session_start();

    
    if(!isset($_SESSION['teacher'])  || !isset($_SESSION['username'])){
        
        echo "<script>window.open('../index.php#login','_self')</script>";
        
    }else{
        include("../db.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Studentscorner-Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <!-- DataTables CSS -->
          <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">




       
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php
            include('./include/sidebar.php')
            ?>
             
            <div id="page-wrapper">
                <div class="container-fluid">
                <?php
              
           
                // if(isset($_GET['viewteacher'])) {include("./viewteacher.php");}
                // if(isset($_GET['addteacher'])) {include("./addteacher.php");}
                if(isset($_GET['viewfile'])) {include("./viewfile.php");}
                if(isset($_GET['addfile'])) {include("./addfile.php");}
                if(isset($_GET['changepass'])) {include("./changepass.php");}
                if(isset($_GET['dashboard'])) {include("./dashboard.php");}
                // if(isset($_GET['viewsub'])) {include("./viewsubject.php");}
                // if(isset($_GET['addsub'])) {include("./addsubject.php");}
                    
            
    
            ?>

                  
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="./js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="./js/metisMenu.min.js"></script>
<!-- 
        Morris Charts JavaScript
        <script src="./js/raphael.min.js"></script>
        <script src="./js/morris.min.js"></script>
        <script src="./js/morris-data.js"></script> -->

  

         <!-- DataTables JavaScript -->
         <script src="./js/dataTables/jquery.dataTables.min.js"></script>
        <script src="./js/dataTables/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

              <!-- Custom Theme JavaScript -->
              <script src="./js/startmin.js"></script>

        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    <script src="./insert/insert.js"></script>
    <script src="./view/view.js"></script>
    <script src="./delete/delete.js"></script>
    <script src="./others/other.js"></script>
    <script src="./eddit/eddit.js"></script>
    </body>
</html>
<?php
    }
?>