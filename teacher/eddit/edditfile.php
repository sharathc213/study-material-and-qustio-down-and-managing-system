

               
<?php

include("../../db.php");
if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_file = "select * from files where sl_no='$sl_no'";
        $run_file = mysqli_query($con,$get_file);
        $row_file = mysqli_fetch_array($run_file);
       

        $file_name = $row_file['file_name'];
        $type_code = $row_file['file_type'];
 
        $disc = $row_file['disc'];


    $data = ' 
    <form role="form">
    <div class="form-group">
        <label>File</label>
        <input class="form-control" id="fileudata"  type="file">
        <span id="checkfile">'.$file_name.'</span><br>';
        if($type_code==1){
            $data .= ' <button type="button" class="btn btn-primary" onclick="verifypdf(`'.$file_name.'`);" >view</button>';  
        }else if($type_code==2){
            $data .= '  <img src="./file/'.$file_name.'"/>';
        }else if($type_code==3){
            $data .= '  <video width="320" height="240" controls>
           <source src="./file/'.$file_name.'" type="video/mp4">
  <source src="./file/'.$file_name.'" type="video/ogg">
  Your browser does not support the video tag.
</video>';
        }
            $data .= '<button class="btn btn-primary" type="button"><a style="text-decoration:none;color:white;" href="./file/'.$file_name.'" download>Downloade</a></button>';
        

        $data .= '      <p class="help-block"  id="filedata_error"></p>
    </div>
    <div class="form-group" >
        <label>description</label>
        <textarea id="update_disc" class="form-control" id="admin_email" >'.$disc.'</textarea>
        <p class="help-block"  id="update_disc_error"></p>
   
    </div>


    <button type="button" class="btn btn-primary" onclick="updatefile('.$sl_no.','.$type_code.');">Update admin</button>
    
</form>
   ';

     echo $data;
    }



?>
