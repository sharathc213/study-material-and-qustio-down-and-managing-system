<?php

if (isset($_POST['sub_code'])&&isset($_POST['teacher_code'])&&isset($_POST['type_code'])) {
    include("../../db.php");
    $sub_code = $_POST['sub_code'];
    $teacher_code = $_POST['teacher_code'];
    $type_code = $_POST['type_code'];
    $get_file = "select * from files where subject_code='$sub_code' and file_type=$type_code and teacher_code=$teacher_code";
    // $run_course = mysqli_query($con, $get_course);
    // $row_course = mysqli_fetch_array($run_course);
    // $course_year = $row_course['year'];
    // $k=1;
    $data= '   <div class="table-responsive">

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
   <th>sl_no</th>
   <th>File Name</th>
   <th>Discription</th>
   <th>status</th>
   <th>Eddit</th>
   <th>Delete</th>
</tr>
</thead>
<tbody>';

$i=0;

                   
                     
                       
                       $run_file = mysqli_query($con,$get_file);
                  
 
                       while($row_file=mysqli_fetch_array($run_file)){
                           
                           $file_name = $row_file['file_name'];
                           
                           $status = $row_file['status'];
                           
                           $sl_no = $row_file['sl_no'];
                           $disc = $row_file['disc'];
                           
                           $i++;
   $data .= '
         <tr><!-- tr begin -->
                       <td>  '.$i.' </td>
                      
                       <td> '.$file_name.'</td>
                       <td> '.$disc.'</td>';


                       if ($status==0){
                        $data .= '      <td> UNREAD</td>'; 
                       }elseif($status==1){
                        $data .= '      <td> READ</td>'; 
                       }elseif($status==2){
                        $data .= '      <td> NEED MODIFICATION</td>'; 
                       }elseif($status==3){
                        $data .= '      <td> APPROVE</td>'; 
                       }
                       
                       $data .= '    
                       
                       <td> 
                                
                       <button class="btn-warning" onclick="edditfile('.$sl_no.');">
                       
                          <i class="fa fa-pencil"></i> Eddit
                      
                       </button> 
                       
                  </td>
                  <td> 
                                
                  <button class="btn-danger" onclick="deletefile('.$teacher_code.',`'.$sub_code.'`,'.$sl_no.')">
                  
                     <i class="fa fa-trash-o"></i> Delete
                 
                  </button> 
                  
             </td>
                       
                       
                      
                   </tr><!-- tr finish --></div>  ';

}


$data .= '  </tbody>
</table>
<script>
$(document).ready(function() {
$("#dataTables-example").DataTable({
       responsive: true
});
});
</script>
    ';

echo $data;
}