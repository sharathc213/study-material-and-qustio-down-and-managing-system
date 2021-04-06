<?php



if (!isset($_SESSION['college'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];
    $get_college="select college_code from college where email='$username'";
    $run_college = mysqli_query($con,$get_college);
    $row_college=mysqli_fetch_array($run_college);
    $college_code=$row_college['college_code'];


    $couar=[];
    

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
                Assign subject
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                         
                            <div class="form-group">
                                <label>Select Teacher</label>
                                <select class="form-control" id="teacher_name" style='text-transform:uppercase' >
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
                            <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" id="Course_name" style='text-transform:uppercase' onchange="viewsub(this.value,'<?php echo  $college_code; ?>')">
                                    <option disabled selected>Please Select a Course</option>
                                
                                <?php

$get_course ="SELECT  c.compination_code,s.course_code FROM subject_course s INNER JOIN college_compination c on 
c.compination_code = s.compination_code WHERE c.college_code='$college_code'";
$run_course = mysqli_query($con, $get_course);

while ($row_course = mysqli_fetch_array($run_course)) {

    $course_code = $row_course['course_code'];
 
    array_push($couar,$course_code); 
   
}  

$ca=array_unique($couar);
foreach ($ca as $cvalue) {
$cou="select * from course where course_code='$cvalue'";
$run_cou = mysqli_query($con, $cou);
$row_cou = mysqli_fetch_array($run_cou);
// $coursename=$row_cou['course_name'];
// array_push($couar,$coursename); 

$data = '';
$data .= '
<option value=' . $cvalue . ' >'.$row_cou['course_name'].'('. $cvalue.')</option>';
echo $data;
}
?>
</select>
                                <span class="help-block" id="teacher_email_error"></span>
                            </div>
                            <div class="sub_sec"></div>


                            <!-- <button type="button" class="btn btn-primary" onclick="add_teacher -->
                            <!-- <button type="reset" class="btn btn-warning">Reset Button</button> -->
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php } ?>