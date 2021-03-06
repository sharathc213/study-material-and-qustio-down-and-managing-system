

<?php 
         include("../../db.php");

    if(isset($_POST['cat_code'])){
        
        
       
        
        $cat_code = $_POST['cat_code'];
        
        
        
        $delete_cat = "delete from course_cat where cat_code='$cat_code'";
        
     
        
       if (!$run_delete = mysqli_query($con,$delete_cat)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
       }
        
    }

?>

