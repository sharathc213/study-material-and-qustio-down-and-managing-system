<?php
	if( isset($_POST['file_name']) && isset($_POST['sl_no']) && isset($_POST['file_size']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
	
         $file_name = $_POST['file_name'];
         $sl_no = $_POST['sl_no'];
         $file_size = $_POST['file_size'];
 
        
         $check="select * from file_type where file_type='$file_name' and type_code!='$sl_no'" ;
         $result_check=mysqli_query($con,$check);
     if(mysqli_num_rows( $result_check)==0){  
      
         

		$update_query = "update file_type set file_type='$file_name',max_size='$file_size' where type_code=$sl_no ";
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



