<?php



if (!isset($_SESSION['college'])  || !isset($_SESSION['username'])) {

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
<!-- 
    <script>
       viewteachersub("<?php echo $college_code; ?>");
    </script> -->
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
                    View Assigned Subjects
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <div class="form-group">
                                <label>Select Teacher</label>
                                <select class="form-control" id="teacher_name" onchange=" viewteachersub(this.value,'<?php echo $college_code; ?>');" style='text-transform:uppercase' >
                                    <option disabled selected>Please Select a Teacher</option>
                                
                                <?php

$get_teacher = "select * from teacher where college_code='$college_code'";
$run_teacher = mysqli_query($con, $get_teacher);

while ($row_teacher = mysqli_fetch_array($run_teacher)) {

    $teacher_name = $row_teacher['teacher_name'];

    $teacher_code = $row_teacher['teacher_code'];
    $data = '';
    $data .= '
<option value=' . $teacher_code . ' >' . $teacher_name . '</option>';
    echo $data;
}   ?>
</select>
                                <span class="help-block" id="teacher_name_error"></span>
                            </div>
                    <!-- /.table-responsive -->
<div class="table_sec"></div>
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