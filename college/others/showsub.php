<?php

if (isset($_POST['cou_code'])&&isset($_POST['college_code'])) {
    include("../../db.php");
    $code = $_POST['cou_code'];
    $college_code = $_POST['college_code'];
    $get_course = "select * from course where course_code='$code'";
    $run_course = mysqli_query($con, $get_course);
    $row_course = mysqli_fetch_array($run_course);
    $course_year = $row_course['year'];
    
    $subar=[];
    $data='


  
         
       
                 
               
                            <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" id="subject" style="text-transform:uppercase">
                                    <option disabled selected>Please Select a Subject</option>';
                                
                           

$get_sub = "select * from college_compination where  college_code='$college_code'";
$run_sub = mysqli_query($con, $get_sub);

while ($row_sub = mysqli_fetch_array($run_sub)) {

    $com_code = $row_sub['compination_code'];
    $get_subject = "select * from subject_course where  compination_code='$com_code' and course_code='$code'";
    
$run_subject = mysqli_query($con, $get_subject);

while ($row_subject = mysqli_fetch_array($run_subject)) {
    
   
       for($k=1;$k<=($course_year*2);$k++){
    
        for($m=1;$m<=5;$m++){
           
              $s="sem_".$k."_sub_".$m;
            array_push($subar,$row_subject[$s]);   
        }   
       }
    
}
    

}
$ua=array_unique($subar);
foreach ($ua as $value) {
//    echo $value;
   $get_subjectname = "select * from subject where  subject_code='$value'";
   $run_subjectname = mysqli_query($con, $get_subjectname);
  $row_subjectname = mysqli_fetch_array($run_subjectname);
  $subname=$row_subjectname['subject_name'];
   $data .= '
   <option value=' . $value . ' >' . $subname . ' (' . $value. ')</option>';
   
  }

// print_r(array_unique($subar));
$data .= '</select>
                                <span class="help-block" id="sub_error"></span>

                            <button type="button" class="btn btn-primary" onclick="add_teachersub();">Insert teacher</button>
                             
                   
        </div>
     
   ';
    echo $data;
}
