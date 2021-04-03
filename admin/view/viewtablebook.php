              
<?php
// include Database connection file 
include("../../db.php");




$get_book="select * from book order by subject_code desc";




// Design initial table header 
$data = ' 
  <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>Subject</th>
        <th>Book Name</th>
       
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_book= mysqli_query($con,$get_book);
      
                            while($row_book=mysqli_fetch_array($run_book)){
                                
                                $book_name = $row_book['book_name'];
                                $sl_no = $row_book['sl_no'];
                                
                               
                                
                                $subject_code = $row_book['subject_code'];
                                $get_sub="select * from subject where subject_code='$subject_code'";
                                $run_sub= mysqli_query($con,$get_sub);
                                $row_sub=mysqli_fetch_array($run_sub);
                                $sub_name = $row_sub['subject_name'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                            <td> '.$sub_name.'</td>
                           
                            <td> '.$book_name.'</td>
                            
                           
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditbook('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletebook('.$sl_no.')">
                       
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






