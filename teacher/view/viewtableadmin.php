              
<?php
// include Database connection file 
include("../../db.php");




$get_admin="select * from admin  order by sl_no desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>admin Name</th>
        <th>admin Email</th>
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_admin = mysqli_query($con,$get_admin);
      
                            while($row_admin=mysqli_fetch_array($run_admin)){
                                
                                $admin_name = $row_admin['admin_name'];
                                
                                $admin_email = $row_admin['email'];
                                
                                $sl_no = $row_admin['sl_no'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                           
                            <td> '.$admin_name.'</td>
                            
                            <td> '.$admin_email.'</td>
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditadmin('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deleteadmin('.$sl_no.')">
                       
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






