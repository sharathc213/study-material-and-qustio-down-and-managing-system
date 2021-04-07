

<?php 
         include("../../db.php");

    if(isset($_POST['teacher_code'])){
        
        
       
        
        $teacher_code = $_POST['teacher_code'];
        
        
        
        $delete_teacher = "delete from teacher where teacher_code='$teacher_code'";
        
     
        
       if (!$run_delete = mysqli_query($con,$delete_teacher)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
       }
        
    }

?>

