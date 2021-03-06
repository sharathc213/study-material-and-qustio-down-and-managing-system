<?php

	if(isset($_POST['cat_code']) && isset($_POST['cat_name']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
		
         $cat_code = $_POST['cat_code'];
         $cat_name = $_POST['cat_name'];
    
 
        
         $check="select * from course_cat where  cat_code = $cat_code and cat_name = '$cat_name'" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  
         

		$update_query = "update course_cat set cat_name='$cat_name' where cat_code=$cat_code";
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



