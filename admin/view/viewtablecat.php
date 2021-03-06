              
<?php
// include Database connection file 
include("../../db.php");




$get_cat="select * from course_cat  order by cat_code desc";




// Design initial table header 
$data = ' 
  <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>course Catagory</th>
       
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_cat = mysqli_query($con,$get_cat);
      
                            while($row_cat=mysqli_fetch_array($run_cat)){
                                
                                $cat_name = $row_cat['cat_name'];
                                
                               
                                
                                $cat_code = $row_cat['cat_code'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                           
                            <td> '.$cat_name.'</td>
                            
                           
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditcoursecat('.$cat_code.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletecoursecat('.$cat_code.')">
                       
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






