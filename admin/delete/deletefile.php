

<?php 
         include("../../db.php");

    if(isset($_POST['sl_no'])){
        
        
       
        
        $sl_no = $_POST['sl_no'];
        
        
        
        $delete_file = "delete from file_type where type_code='$sl_no'";
        
     
        
       if (!$run_delete = mysqli_query($con,$delete_file)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
       }
        
    }

?>

