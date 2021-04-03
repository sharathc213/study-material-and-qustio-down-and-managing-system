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
                Add course
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" id="Course_name" style='text-transform:uppercase' onchange="viewsem(this.value,'<?php echo  $college_code; ?>')">
                                    <option disabled selected>Please Select a Coure</option>
                                
                                <?php

$get_course = "select * from course order by sl_no desc";
$run_course = mysqli_query($con, $get_course);

while ($row_course = mysqli_fetch_array($run_course)) {

    $course_name = $row_course['course_name'];

    $course_code = $row_course['course_code'];
    $data = '';
    $data .= '
<option value=' . $course_code . ' >' . $course_name . ' (' . $course_code . ')</option>';
    echo $data;
}   ?>
</select>
                                <span class="help-block" id="admin_name_error"></span>
                            </div>

                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
<div class="sem-section">




</div>
<div class="sem-section2">




</div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div><?php }?>