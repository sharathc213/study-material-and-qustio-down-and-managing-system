

               
<?php

	include("../../db.php");
if( isset($_POST['sl_no'])){
    
    $sl_no=$_POST['sl_no'];


                            
            $get_college = "select * from college where sl_no='$sl_no'";
            $run_college = mysqli_query($con,$get_college);
            $row_college = mysqli_fetch_array($run_college);

            $college_name = $row_college['college_name'];
            $college_code = $row_college['college_code'];
            $college_email = $row_college['email'];

    
    	$data = ' 
        <form role="form">
        <div class="form-group">
            <label>College Code</label>
            <input class="form-control" id="update_college_code" style="text-transform:uppercase" value="'.$college_code.'">
            <p class="help-block" id="update_college_code_error"></p>
        </div>
        <div class="form-group">
            <label>College Name</label>
            <input class="form-control" id="update_college_name" style="text-transform:uppercase"  value="'.$college_name.'">
            <p class="help-block"  id="update_college_name_error"></p>
        </div>
        <div class="form-group" >
            <label>College E-mail</label>
            <input id="update_college_email" class="form-control" disabled  id="college_email"  value="'.$college_email.'">
       
        </div>


        <button type="button" class="btn btn-primary" onclick="updatecollege('.$sl_no.');">Update College</button>
        
    </form>
       ';
    
    	 echo $data;
    	}

   

?>

