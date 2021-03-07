              
<?php
// include Database connection file 
include("../../db.php");




$get_course = "select * from course  order by sl_no desc";




// Design initial table header 
$data = '   <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>course Code</th>
        <th>course Name</th>
        <th>course Catagory</th>
        <th>course Duration</th>
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

$i = 0;



$run_course = mysqli_query($con, $get_course);

while ($row_course = mysqli_fetch_array($run_course)) {

    $course_name = $row_course['course_name'];

    $course_code = $row_course['course_code'];
    $course_cat = $row_course['course_cat'];
    $course_year = $row_course['year'];

    $sl_no = $row_course['sl_no'];

    $get_cat = "select cat_name from course_cat where cat_code='$course_cat'";
    $run_cat = mysqli_query($con, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $cat_name = $row_cat['cat_name'];

    $i++;
    $data .= '
              <tr><!-- tr begin -->
                            <td>  ' . $i . ' </td>

                            <td> ' . $course_code . '</td>
                           
                            <td> ' . $course_name . '</td>
                            
                            <td> ' . $cat_name . '</td>

                            <td> ' . $course_year . ' Year</td>
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditcourse(' . $sl_no . ')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletecourse(' . $sl_no . ')">
                       
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






