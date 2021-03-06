

               
<?php

include("../../db.php");
if( isset($_POST['cat_code'])){

$cat_code=$_POST['cat_code'];



                        
        $get_cat = "select * from course_cat where cat_code='$cat_code'";
        $run_cat = mysqli_query($con,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);

        $cat_name = $row_cat['cat_name'];
      

    $data = ' 
    <form role="form">

    <div class="form-group">
        <label>Course Catogary Name</label>
        <input class="form-control" id="update_course_cat_name" style="text-transform:uppercase"  value="'.$cat_name.'">
        <p class="help-block"  id="update_course_cat_name_error"></p>
    </div>


    <button type="button" class="btn btn-primary" onclick="updatecat('.$cat_code.');">Update Course Catagory</button>
    
</form>
   ';

     echo $data;
    }



?>

