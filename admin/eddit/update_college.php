<?php
	if(isset($_POST['college_code']) && isset($_POST['college_name']) && isset($_POST['sl_no']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
		
         $college_code = $_POST['college_code'];
         $college_name = $_POST['college_name'];
         $sl_no = $_POST['sl_no'];
 
        
         $check="select * from college where  (college_code = '$college_code' or college_name = '$college_name') and sl_no != $sl_no" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  
         

		$update_query = "update college set college_code='$college_code',college_name='$college_name' where sl_no=$sl_no ";
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



