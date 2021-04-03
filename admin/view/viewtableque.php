              
<?php
// include Database connection file 
include("../../db.php");




$get_qustion="select * from qustion  order by sl_no desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>subject</th>
        <th>Year</th>
     
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_qustion = mysqli_query($con,$get_qustion);
      
                            while($row_qustion=mysqli_fetch_array($run_qustion)){
                                
                                $sub_code = $row_qustion['subject_code'];
                                
                                $date = $row_qustion['date'];
                                
                                $sl_no = $row_qustion['sl_no'];


                             
                                $get_sub="select * from subject where subject_code='$sub_code'";
                                $run_sub= mysqli_query($con,$get_sub);
                                $row_sub=mysqli_fetch_array($run_sub);
                                $sub_name = $row_sub['subject_name'];
                              
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                            <td> '.$sub_name.'</td>
                           
                            <td> '.$date.'</td>
                            
                      
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditqustion('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletequstion('.$sl_no.')">
                       
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






