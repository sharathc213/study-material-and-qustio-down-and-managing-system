              
<?php
// include Database connection file 
include("../../db.php");

$college_code=$_POST['college_code'];


$get_teacher="select * from teacher  where college_code='$college_code' order by teacher_code desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>teacher Name</th>
        <th>teacher Email</th>
      
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_teacher = mysqli_query($con,$get_teacher);
      
                            while($row_teacher=mysqli_fetch_array($run_teacher)){
                                
                                $teacher_name = $row_teacher['teacher_name'];
                                
                                $teacher_email = $row_teacher['email'];
                                
                              
                                $teacher_code = $row_teacher['teacher_code'];
                               
                                
                                $i++;
        $data .= "
              <tr><!-- tr begin -->
                            <td>  ".$i." </td>
                           
                           
                            <td> $teacher_name</td>
                            
                            <td> $teacher_email</td>
                            
                            
                            <td> 
                                     
                            <button class='btn-warning' onclick='edditteacher(`$college_code`,$teacher_code)'>
                            
                               <i class='fa fa-pencil'></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class='btn-danger' onclick='deleteteacher(`$college_code`,$teacher_code)'>
                       
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






