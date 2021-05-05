         
<?php
// include Database connection file 
include("../../db.php");

$ugpg=$_POST['ugpg'];



$get_course="select * from course where course_cat=$ugpg";




// Design initial table header 
$data = '<div class="form-group row">
<div class="col-md-3">
<label >Select Your Course :</label>
</div>
<div class="col-md-9">
<select class="form-control" id="disabledInput" onchange="viewsub(this.value);" >
 
<option selected disabled>Please Select Course</option>';


                        
                          
                            
                            $run_course = mysqli_query($con,$get_course);
      
                            while($row_course=mysqli_fetch_array($run_course)){
                                
                                $course_name= $row_course['course_name'];
                                
                                $course_code =$row_course['course_code'];
                              
                              
        $data .= "
            <option value='$course_code'>$course_name ($course_code)</option>";
    
    }


$data .= ' </select></div>
         ';

echo $data;

?>






