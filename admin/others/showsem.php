<?php

if (isset($_POST['course_code'])) {
    include("../../db.php");
    $code = $_POST['course_code'];
   
    $get_course = "select * from course where course_code='$code'";
    $run_course = mysqli_query($con, $get_course);
    $row_course = mysqli_fetch_array($run_course);
    $course_year = $row_course['year'];
    $k=1;
    $data="";
    for($i=$course_year;$i>0;$i--){
        $data .=' <div class="row ">';
        for($j=2;$j>0;$j--){
            $data .='
           <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Sem '.$k.'
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">';
                            for($m=1;$m<6;$m++){
                                $data .='      <div class="form-group">
                                
                                <select class="form-control" id="sem'.$k.'_'.$m.'" style="text-transform:uppercase">
                                    <option disabled selected>Please Select subject '.$m.'</option>';
                                    $get_sub = "select * from subject";
    $run_sub = mysqli_query($con, $get_sub);
   while($row_sub=mysqli_fetch_array($run_sub)){
    $subject_name = $row_sub['subject_name'];
    $subject_code = $row_sub['subject_code'];

    $data .='   <option value="'.$subject_code.'">('.$subject_code.')   '.$subject_name.'</option>';
   }
                                
  
                                    $data .='       </select>
                                <span class="help-block" id="sem'.$k.'_'.$m.'_error"></span>
                            </div>';
                            }
                              $data .='        </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
    
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div></div>';

          $k++;
        }
        $data .='
 </div>';
    }
    $data .="        <button type='button' class='btn btn-primary' onclick='add_subc($course_year,`$code`);'>Insert Course</button>
    <button type='reset' class='btn btn-warning'>Reset Button</button>";
    echo $data;
}
