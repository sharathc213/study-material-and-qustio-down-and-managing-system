<?php

if (isset($_POST['course_code'])&&isset($_POST['college_code'])) {
    include("../../db.php");
    $code = $_POST['course_code'];
    $college_code = $_POST['college_code'];
    $get_course = "select * from course where course_code='$code'";
    $run_course = mysqli_query($con, $get_course);
    $row_course = mysqli_fetch_array($run_course);
    $course_year = $row_course['year'];
    $k=1;
    $data='
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                select compination
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" onchange="viewcom(`'.$college_code.'`);" id="course_compination" style="text-transform:uppercase">
                                    <option disabled selected>Please Select a Compination</option>';
                                
                           

$get_com = "select * from subject_course where course_code='$code'";
$run_com = mysqli_query($con, $get_com);

while ($row_com = mysqli_fetch_array($run_com)) {

    $course_name = $row_course['course_name'];

    $course_code = $row_com['course_code'];

    $com_code = $row_com['compination_code'];

    $data .= '
<option value=' . $com_code . ' >' . $course_name . ' (' . $com_code . ')</option>';
}

$data .= '</select>
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
     
   ';
    echo $data;
}
