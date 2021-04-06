              
<?php
// include Database connection file 
include("../../db.php");

$college_code=$_POST['college_code'];
$teacher_code=$_POST['teacher_code'];


$get_teacher="select * from teacher_subject  where teacher_code='$teacher_code' order by teacher_code desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        
        <th>Subject Name</th>
      
     
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_teacher = mysqli_query($con,$get_teacher);
      
                            while($row_teacher=mysqli_fetch_array($run_teacher)){
                                
                                $subject = $row_teacher['subject_code'];
                                
                                $sl_no =$row_teacher['sl_no'];
                              
                              
                                $get_sub="select * from subject  where subject_code='$subject'";
                                $run_sub = mysqli_query($con,$get_sub);
                                $row_sub=mysqli_fetch_array($run_sub);

                                
                                $i++;
        $data .= "
              <tr><!-- tr begin -->
                            <td>  ".$i." </td>
                           
                           
                           
                            
                            <td>".$row_sub['subject_name']."</td>
                            
                            
                         
                       <td> 
                                     
                       <button class='btn-danger' onclick='deleteteachersub($sl_no,`".$college_code."`,$teacher_code)'>
                       
                          <i class='fa fa-trash-o'></i> Delete
                      
                       </button> 
                       
                  </td>
                            
                            
                           
                        </tr><!-- tr finish --></div>  ";
    
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






