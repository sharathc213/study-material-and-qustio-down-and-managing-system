              
<?php
// include Database connection file 
include("../../db.php");




$get_file="select * from file_type  order by type_code desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>file Format</th>
        <th>Max Size</th>
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_file = mysqli_query($con,$get_file);
      
                            while($row_file=mysqli_fetch_array($run_file)){
                                
                                $file_type = $row_file['file_type'];
                                
                                $file_size = $row_file['max_size'];
                                
                                $sl_no = $row_file['type_code'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                           
                            <td> '.$file_type.'</td>
                            
                            <td> '.$file_size.'</td>
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditfile('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                     <button class="btn-danger" onclick="deletefile('.$sl_no.')">
                       
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






