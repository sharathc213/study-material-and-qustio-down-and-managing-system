

               
<?php

include("../../db.php");
if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_course = "select * from course where sl_no='$sl_no'";
        $run_course = mysqli_query($con,$get_course);
        $row_course = mysqli_fetch_array($run_course);

        $course_name = $row_course['course_name'];
 
        $course_code = $row_course['course_code'];
        $course_year = $row_course['year'];
        $course_cat = $row_course['course_cat'];

        $get_cat = "select cat_name from course_cat where cat_code='$course_cat'";
        $run_cat = mysqli_query($con, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_name2 = $row_cat['cat_name'];


    $data = ' 
    <form role="form">
    <div class="form-group" >
    <label>course Code</label>
    <input id="update_course_code" class="form-control"   value="'.$course_code.'">
    <p class="help-block"  id="update_course_code_error"></p>

</div>
    <div class="form-group">
        <label>course Name</label>
        <input class="form-control" id="update_course_name" style="text-transform:uppercase"  value="'.$course_name.'">
        <p class="help-block"  id="update_course_name_error"></p>
    </div>
    <div class="form-group">
    <label>course catagery</label>
    <select id="update_course_cat" class="form-control" id="course_cat">
        <option value="'.$course_cat.'" selected >'.$cat_name2.' </option>';
    

        $get_cat = "select * from course_cat where cat_code!='$course_cat' order by cat_code desc";
        $run_cat = mysqli_query($con, $get_cat);

        while ($row_cat = mysqli_fetch_array($run_cat)) {

            $cat_name = $row_cat['cat_name'];

            $cat_code = $row_cat['cat_code'];
        
            $data .= '
<option value=' . $cat_code . ' >' . $cat_name . '</option>';
           
        } 
        $data .= '    
    </select>
    <span class="help-block" id="update_course_cat_error"></span>
</div>
<div class="form-group">
    <label>course Duration</label>
    <select name="update_course_year" class="form-control" id="update_course_year">
        <option value="'.$course_year.'" selected >'.$course_year.' Year</option>
        
        <option value="2">2 Year</option>
        <option value="3">3 Year</option>
        
    </select>
    <span class="help-block" id="update_course_year_error"></span>
</div>


    <button type="button" class="btn btn-primary" onclick="updatecourse('.$sl_no.');">Update course</button>
    
</form>
   ';

     echo $data;
    }



?>

