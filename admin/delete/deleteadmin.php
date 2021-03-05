

<?php 
         include("../../db.php");

    if(isset($_POST['sl_no'])){
        
        
       
        
        $sl_no = $_POST['sl_no'];
        
        
        
        $delete_admin = "delete from admin where sl_no='$sl_no'";
        
     
        
       if (!$run_delete = mysqli_query($con,$delete_admin)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
       }
        
    }

?>

