

               
<?php

include("../../db.php");
if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_subject = "select * from subject where sl_no='$sl_no'";
        $run_subject = mysqli_query($con,$get_subject);
        $row_subject = mysqli_fetch_array($run_subject);

        $subject_name = $row_subject['subject_name'];
 
        $subject_code = $row_subject['subject_code'];


    $data = ' 
    <form role="form">
    <div class="form-group">
    <div class="form-group" >
        <label>subject Code</label>
        <input id="update_subject_code" class="form-control" style="text-transform:uppercase"  id="subject_email"  value="'.$subject_code.'">
        <p class="help-block"  id="update_subject_code_error"></p>
    </div>
        <label>subject Name</label>
        <input class="form-control" id="update_subject_name" style="text-transform:uppercase"  value="'.$subject_name.'">
        <p class="help-block"  id="update_subject_name_error"></p>
    </div>
    


    <button type="button" class="btn btn-primary" onclick="updatesubject('.$sl_no.');">Update subject</button>
    
</form>
   ';

     echo $data;
    }



?>

