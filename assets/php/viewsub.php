<?php

if (isset($_POST['course'])) {
    include("../../db.php");
    $course = $_POST['course'];

    $get_course = "select * from course where course_code='$course'";
    $run_course = mysqli_query($con, $get_course);
    $row_course = mysqli_fetch_array($run_course);
    $course_year = $row_course['year'];
    
    $subar=[];
    $data='


  
         
       
                 
               
                            <div class="form-group row">
                               <div class="col-md-3">
                                <label>Please Select A subject :</label></div> <div class="col-md-9">
                                <select class="form-control" id="subject" onclick="viewmeterial(this.value);" style="text-transform:uppercase">
                                    <option disabled selected>Please Select a Subject</option>';
                                
                           


    // $com_code = $row_sub['compination_code'];
    $get_subject = "select * from subject_course where   course_code='$course'";
    
$run_subject = mysqli_query($con, $get_subject);

while ($row_subject = mysqli_fetch_array($run_subject)) {
    
   
       for($k=1;$k<=($course_year*2);$k++){
    
        for($m=1;$m<=5;$m++){
           
              $s="sem_".$k."_sub_".$m;
            array_push($subar,$row_subject[$s]);   
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
                             
                   
        </div>
     
   ';
    echo $data;
}
