<?php



if (!isset($_SESSION['teacher'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];
    $get_teacher="select teacher_code from teacher where email='$username'";
    $run_teacher = mysqli_query($con,$get_teacher);
    $row_teacher=mysqli_fetch_array($run_teacher);
    $teacher_code=$row_teacher['teacher_code'];
    

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
                Add file
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" id="Course_name2" style='text-transform:uppercase' onchange="viewtype(this.value,'<?php echo  $teacher_code; ?>')">
                                    <option disabled selected>Please Select a Subject</option>
                                
                                <?php

$get_sub = "select * from teacher_subject where teacher_code='$teacher_code'";
$run_sub = mysqli_query($con, $get_sub);

while ($row_sub = mysqli_fetch_array($run_sub)) {

    $subject_code = $row_sub['subject_code'];

    $get_subname = "select * from subject where subject_code='$subject_code'";
$run_subname = mysqli_query($con, $get_subname);
$row_subname = mysqli_fetch_array($run_subname);

  
    $data = '';
    $data .= '
<option value=' . $subject_code . ' >' . $row_subname['subject_name'] . ' (' . $subject_code . ')</option>';
    echo $data;
}   ?>
</select>
                                <span class="help-block" id="admin_name_error"></span>
                            </div>

                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <div class="type_section">




</div>
<div class="file_section">




</div>
                <!-- /.row (nested) -->
            </div>

            <!-- /.panel-body -->
        </div>


        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div><?php }?>