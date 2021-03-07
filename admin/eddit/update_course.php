<?php
	if( isset($_POST['course_name']) && isset($_POST['sl_no']) && isset($_POST['course_code']) && isset($_POST['course_year']) && isset($_POST['course_cat']))
	{
  
		// include Database connection file 
		include("../../db.php");

		// get values 
	
         $course_name = $_POST['course_name'];
         $sl_no = $_POST['sl_no'];
         $course_code = $_POST['course_code'];
         $course_year = $_POST['course_year'];
         $course_cat = $_POST['course_cat'];
 
         $check="select * from course where course_code='$course_code' and sl_no!='$sl_no'" ;
         $result_check=mysqli_query($con,$check);
     if(mysqli_num_rows( $result_check)==0){  
      
         

		$update_query = "update course set course_name='$course_name',course_code='$course_code',course_cat='$course_cat',year=$course_year where sl_no=$sl_no ";
		if (!$result = mysqli_query($con,$update_query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
    }else {
        echo 110;
    }

}
      
	

?>



