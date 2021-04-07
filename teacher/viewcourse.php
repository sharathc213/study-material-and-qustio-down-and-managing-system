<?php



if (!isset($_SESSION['teacher'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
 
    $username = $_SESSION['username'];
    $get_college="select college_code from college where email='$username'";
    $run_college = mysqli_query($con,$get_college);
    $row_college=mysqli_fetch_array($run_college);
    $college_code=$row_college['college_code'];

?>
<script src="./js/jquery.min.js"></script>

<script src="./view/view.js"></script>
<script src="./eddit/eddit.js"></script>

    <script>
       viewcourse("<?php echo $college_code; ?>");
    </script>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Admins
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                   
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->




    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

<?php } ?>