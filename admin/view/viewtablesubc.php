              
<?php
// include Database connection file 
include("../../db.php");





// $get_course="SELECT  c.compination_code,s.course_code, s.sem_1_sub_1, s.sem_1_sub_2, s.sem_1_sub_3
// , s.sem_1_sub_4, s.sem_1_sub_5, s.sem_2_sub_1, s.sem_2_sub_2, s.sem_2_sub_3, s.sem_2_sub_4
// , s.sem_2_sub_5, s.sem_3_sub_1, s.sem_3_sub_2, s.sem_3_sub_3, s.sem_3_sub_4, s.sem_3_sub_5
// , s.sem_4_sub_1, s.sem_4_sub_2, s.sem_4_sub_3, s.sem_4_sub_4, s.sem_4_sub_5, s.sem_5_sub_1
// , s.sem_5_sub_2, s.sem_5_sub_3, s.sem_5_sub_4, s.sem_5_sub_5, s.sem_6_sub_1, s.sem_6_sub_2
// , s.sem_6_sub_3, s.sem_6_sub_4, s.sem_6_sub_5 FROM subject_course s INNER JOIN college_compination c on 
// c.compination_code = s.compination_code";





$get_course="SELECT * from subject_course ";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>Course Name</th>
        <th>sem 1 sub 1</th>
        <th>sem 1 sub 2</th>
        <th>sem 1 sub 3</th>
        <th>sem 1 sub 4</th>
        <th>sem 1 sub 5</th>

        <th>sem 2 sub 1</th>
        <th>sem 2 sub 2</th>
        <th>sem 2 sub 3</th>
        <th>sem 2 sub 4</th>
        <th>sem 2 sub 5</th>

        <th>sem 3 sub 1</th>
        <th>sem 3 sub 2</th>
        <th>sem 3 sub 3</th>
        <th>sem 3 sub 4</th>
        <th>sem 3 sub 5</th>

        <th>sem 4 sub 1</th>
        <th>sem 4 sub 2</th>
        <th>sem 4 sub 3</th>
        <th>sem 4 sub 4</th>
        <th>sem 4 sub 5</th>

        <th>sem 5 sub 1</th>
        <th>sem 5 sub 2</th>
        <th>sem 5 sub 3</th>
        <th>sem 5 sub 4</th>
        <th>sem 5 sub 5</th>

        <th>sem 6 sub 1</th>
        <th>sem 6 sub 2</th>
        <th>sem 6 sub 3</th>
        <th>sem 6 sub 4</th>
        <th>sem 6 sub 5</th>
      
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_course = mysqli_query($con,$get_course);
      
                            while($row_course=mysqli_fetch_array($run_course)){
                                
                                // $teacher_name = $row_teacher['teacher_name'];
                                
                                // $teacher_email = $row_teacher['email'];
                                
                              
                                // $teacher_code = $row_teacher['teacher_code'];
                               
                                $get_cou="select * from course where course_code='".$row_course[1]."'";
                                $run_cou = mysqli_query($con,$get_cou);
                                $row_cou=mysqli_fetch_array($run_cou);
                                $i++;
        $data .= "
              <tr><!-- tr begin -->
                            <td>  ".$i." </td>
                            <td>  ".$row_cou['course_name']." </td>";

                            for ($n=2;$n<32;$n++) {
                                $get_sub="select * from subject where subject_code='".$row_course[$n]."'";
                                $run_sub = mysqli_query($con,$get_sub);
                                $row_sub=mysqli_fetch_array($run_sub);
                               $sub= $row_sub['subject_name'];
                                $data .= "<td> ".$sub." </td>";
                               
                              }
                           
                          
                            
               $data .= "              <td> 
                                     
                            <button class='btn-warning' onclick='edditteacher()'>
                            
                               <i class='fa fa-pencil'></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class='btn-danger' onclick='deleteteacher()'>
                       
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






