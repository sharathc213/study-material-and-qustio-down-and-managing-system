              
<?php
// include Database connection file 
include("../../db.php");




$get_subject="select * from subject  order by sl_no desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>subject subject</th>
        <th>subject Name</th>
        
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_subject = mysqli_query($con,$get_subject);
      
                            while($row_subject=mysqli_fetch_array($run_subject)){
                                
                                $subject_name = $row_subject['subject_name'];
                                
                                $subject_code= $row_subject['subject_code'];
                                
                                $sl_no = $row_subject['sl_no'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>

                            <td> '.$subject_code.'</td>
                           
                            <td> '.$subject_name.'</td>
                            
                          
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditsubject('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletesubject('.$sl_no.')">
                       
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

?>






