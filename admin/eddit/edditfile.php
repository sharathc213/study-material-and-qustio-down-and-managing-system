

               
<?php

include("../../db.php");
if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_file = "select * from file_type where type_code='$sl_no'";
        $run_file = mysqli_query($con,$get_file);
        $row_file = mysqli_fetch_array($run_file);

        $file_name = $row_file['file_type'];
 
        $file_size = $row_file['max_size'];


    $data = ' 
    <form role="form">
    <div class="form-group">
        <label>file Format</label>
        <input class="form-control" id="update_file_name" disabled style="text-transform:uppercase"  value="'.$file_name.'">
        <p class="help-block"  id="update_file_name_error"></p>
    </div>
    <div class="form-group" >
        <label>Max Size</label>
        <input id="update_file_size" class="form-control" id="file_email"  value="'.$file_size.'">
        <p class="help-block"  id="update_file_size_error"></p>
   
    </div>


    <button type="button" class="btn btn-primary" onclick="updatefile('.$sl_no.');">Update file</button>
    
</form>
   ';

     echo $data;
    }



?>

