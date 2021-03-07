<?php
	if( isset($_POST['subject_name']) && isset($_POST['sl_no']) && isset($_POST['subject_code']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
	
         $subject_name = $_POST['subject_name'];
         $subject_code = $_POST['subject_code'];
         $sl_no = $_POST['sl_no'];
 
        
      
         $check="select * from subject where subject_code='$subject_code' and sl_no!='$sl_no'" ;
         $result_check=mysqli_query($con,$check);
     if(mysqli_num_rows( $result_check)==0){   

		$update_query = "update subject set subject_name='$subject_name',subject_code='$subject_code' where sl_no=$sl_no ";
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



