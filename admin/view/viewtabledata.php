              
<?php
// include Database connection file 
include("../../db.php");

$subject_code=$_POST['subject_code'];


$get_file = "select * from files  where subject_code='$subject_code' order by  sl_no desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>College Name</th>
        <th>Teacher Name</th>
        <th>File Name</th>
        <th>File Type</th>
        <th>Disc</th>
        <th>Status</th>
        <th>View</th>
       
    </tr>
</thead>
<tbody>';

$i = 0;



$run_file = mysqli_query($con, $get_file);

while ($row_file = mysqli_fetch_array($run_file)) {

    // $college_code = $row_file['college_code'];

    $teacher_code = $row_file['teacher_code'];
    $file_name = $row_file['file_name'];
    $disc = $row_file['disc'];
    $status = $row_file['status'];
    $type_code = $row_file['file_type'];

    $sl_no = $row_file['sl_no'];

    $get_teacher = "select * from teacher where teacher_code='$teacher_code'";
    $run_teacher = mysqli_query($con, $get_teacher);
    $row_teacher = mysqli_fetch_array($run_teacher);
    $teacher_name = $row_teacher['teacher_name'];
    $college_code = $row_teacher['college_code'];
    


    $get_college = "select * from college where college_code='$college_code'";
    $run_college = mysqli_query($con, $get_college);
    $row_college = mysqli_fetch_array($run_college);
    $college_name = $row_college['college_name'];

    
    $get_type = "select * from file_type where type_code=$type_code";
    $run_type = mysqli_query($con, $get_type);
    $row_type = mysqli_fetch_array($run_type);
    $type_name = $row_type['file_type'];
    $i++;
    $data .= '
              <tr><!-- tr begin -->
                            <td>  ' . $i . ' </td>

                            <td> ' . $college_name . '</td>
                           
                            <td> ' . $teacher_name . '</td>
                            
                            <td> ' . $file_name . '</td>
                            <td> ' . $type_name . '</td>

                            <td> ' . $disc . ' </td>';
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
                                     
                            <button class="btn-warning" onclick="viewdata(' . $sl_no . ')">
                            
                               <i class="fa fa-pencil"></i> View
                           
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

?>






