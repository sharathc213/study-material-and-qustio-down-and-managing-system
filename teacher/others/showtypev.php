<?php

if (isset($_POST['sub_code'])&&isset($_POST['teacher_code'])) {
    include("../../db.php");
    $sub_code = $_POST['sub_code'];
    $teacher_code = $_POST['teacher_code'];
    // $get_course = "select * from course where course_code='$code'";
    // $run_course = mysqli_query($con, $get_course);
    // $row_course = mysqli_fetch_array($run_course);
    // $course_year = $row_course['year'];
    

    $data='


  
         
       
                 
               
                            <div class="form-group">
                                <label>Select Type</label>
                                <select class="form-control" id="file_type" style="text-transform:uppercase" onchange="viewfilev('.$teacher_code.',`'.$sub_code.'`);">
                                    <option disabled selected>Please Select a Subject</option>';
                                
                           

$get_type = "select * from file_type ";
$run_type = mysqli_query($con, $get_type);

while ($row_type = mysqli_fetch_array($run_type)) {

    $type_code = $row_type['type_code'];
    $type_name = $row_type['file_type'];
    $data .= '
   <option value=' . $type_code . ' >' .  $type_name . '</option>';
   
    

}

// print_r(array_unique($subar));
$data .= '</select>
                             

                      
                             
                   
        </div>
     
   ';
    echo $data;
}
