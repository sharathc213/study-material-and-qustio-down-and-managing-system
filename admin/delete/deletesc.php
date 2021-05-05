

<?php 
         include("../../db.php");

    if(isset($_POST['com_code'])){
        
        
       
        
        $com_code = $_POST['com_code'];
        
        
        
        $delete_file = "delete from subject_course where compination_code=$com_code";
        
     
        
       if (!$run_delete = mysqli_query($con,$delete_file)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
       }
        
    }

?>

