         
<?php
// include Database connection file 
include("../../db.php");


$sub=$_POST['sub'];

$get_year="select * from qustion where subject_code='$sub' order by date desc";






// Design initial table header 
$data = '<div class="form-group row">
<div class="col-md-3">
<label >Select A Year :</label>
</div>
<div class="col-md-9">
<select class="form-control" id="year" onchange="viewchange(1,`'.$sub.'`,this.value);" >
 
<option selected disabled>Please Select Year</option>';


                        
                          
                            
                            $run_year= mysqli_query($con,$get_year);
      
                            while($row_year=mysqli_fetch_array($run_year)){
                                
                                $year= $row_year['date'];
                                
                               
                              
                              
        $data .= "
            <option value=$year>$year</option>";
    
    }


$data .= ' </select></div>
         ';

echo $data;

?>






