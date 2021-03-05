<?php
	if( isset($_POST['admin_name']) && isset($_POST['sl_no']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
	
         $admin_name = $_POST['admin_name'];
         $sl_no = $_POST['sl_no'];
 
        
      
         

		$update_query = "update admin set admin_name='$admin_name' where sl_no=$sl_no ";
		if (!$result = mysqli_query($con,$update_query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
      
	
	}
?>



