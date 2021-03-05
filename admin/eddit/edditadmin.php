

               
<?php

include("../../db.php");
if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_admin = "select * from admin where sl_no='$sl_no'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);

        $admin_name = $row_admin['admin_name'];
 
        $admin_email = $row_admin['email'];


    $data = ' 
    <form role="form">
    <div class="form-group">
        <label>admin Name</label>
        <input class="form-control" id="update_admin_name" style="text-transform:uppercase"  value="'.$admin_name.'">
        <p class="help-block"  id="update_admin_name_error"></p>
    </div>
    <div class="form-group" >
        <label>admin E-mail</label>
        <input id="update_admin_email" class="form-control" disabled  id="admin_email"  value="'.$admin_email.'">
   
    </div>


    <button type="button" class="btn btn-primary" onclick="updateadmin('.$sl_no.');">Update admin</button>
    
</form>
   ';

     echo $data;
    }



?>

