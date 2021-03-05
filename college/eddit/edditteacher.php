

               
<?php

	include("../../db.php");
if( isset($_POST['teacher_code']) && isset($_POST['college_code']) ){
    
    $teacher_code=$_POST['teacher_code'];
    $college_code=$_POST['college_code'];



                            
            $get_teacher = "select * from teacher where teacher_code='$teacher_code'";
            $run_teacher = mysqli_query($con,$get_teacher);
            $row_teacher = mysqli_fetch_array($run_teacher);

            $teacher_name = $row_teacher['teacher_name'];
            $teacher_code = $row_teacher['teacher_code'];
            $teacher_email = $row_teacher['email'];

    
    	$data = " 
        <form role='form'>
    
        <div class='form-group'>
            <label>teacher Name</label>
            <input class='form-control' id='update_teacher_name' style='text-transform:uppercase'  value='$teacher_name'/>
            <p class='help-block'  id='update_teacher_name_error'></p>
        </div>
        <div class='form-group' >
            <label>teacher E-mail</label>
            <input id='update_teacher_email' class='form-control' disabled  id='teacher_email'  value='$teacher_email'/>
       
        </div>


        <button type='button' class='btn btn-primary' onclick='updateteacher(`$college_code`,$teacher_code);'>Update teacher</button>
        
    </form>
       ";
    
    	 echo $data;
    	}

   

?>

