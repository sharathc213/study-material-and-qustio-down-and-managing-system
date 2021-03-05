<?php
	if(isset($_POST['teacher_code']) && isset($_POST['teacher_name']))
	{
        
		// include Database connection file 
		include("../../db.php");

		// get values 
		
         $teacher_code = $_POST['teacher_code'];
         $teacher_name = $_POST['teacher_name'];
       
 
        
         $check="select * from teacher where  teacher_code = $teacher_code and  teacher_code!=$teacher_code" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  
         

		$update_query = "update teacher set teacher_name='$teacher_name' where teacher_code=$teacher_code ";
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



