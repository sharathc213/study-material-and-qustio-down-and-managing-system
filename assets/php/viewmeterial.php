         
<?php
// include Database connection file 
include("../../db.php");


$sub=$_POST['sub'];

$get_cat="select * from course_cat";




// Design initial table header 
$data = '<div class="form-group row">
<div class="col-md-3">
<label >Select Your Material Type :</label>
</div>
<div class="col-md-9">
<select class="form-control"  onchange="viewchange(this.value,`'.$sub.'`,0);" >
 
<option selected disabled>Please Select Your Material type</option>


                        
                       
                              

                                    <option value=1>Quastion And Answer</option>
                                    <option value=2>Text Books</option>
                                    <option value=3>Study Meterials</option>


 </select></div>
         ';

echo $data;

?>






