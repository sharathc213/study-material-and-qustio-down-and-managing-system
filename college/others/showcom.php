<?php

if (isset($_POST['com']) && isset($_POST['college_code'])) {
    include("../../db.php");
    $com = $_POST['com'];
    $college_code = $_POST['college_code'];
    $get_course = "select * from subject_course where compination_code='$com'";
    $run_course = mysqli_query($con, $get_course);
    $row_course = mysqli_fetch_array($run_course);
    $course_code = $row_course['course_code'];
    $get_year = "select * from course where course_code='$course_code'";
    $run_year = mysqli_query($con, $get_year);
    $row_year = mysqli_fetch_array($run_year);
    $course_year = $row_year['year'];
    $k = 1;
    $data = '
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
                            ';





    $data = "";
    for ($i = $course_year; $i > 0; $i--) {
        $data .= ' <div class="row ">';
        for ($j = 2; $j > 0; $j--) {
            $data .= '
           <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Sem ' . $k . '
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">';
            for ($m = 1; $m < 6; $m++) {
                $g = "sem_" . $k . "_sub_" . $m;
                $c = $row_course[$g];

                $get_cou = "select * from subject where subject_code='$c'";
                $run_cou = mysqli_query($con, $get_cou);
                $row_cou = mysqli_fetch_array($run_cou);


                $data .= '      <div class="form-group">
                                
   
                                    <input  class="form-control" type="text" value="' . $row_cou['subject_name'] . '(' . $c . ')  " disabled></input>
                          
                            </div>';
            }
            $data .= '        </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
    
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div></div>';

            $k++;
        }
        $data .= '
 </div>';
    }
    $data .= '        <button type="button" class="btn btn-primary" onclick="add_cour(`'.$college_code.'`,'.$com.');">Add Course</button>
   ';
    echo $data;
}
?>