         
<?php
// include Database connection file 
include("../../db.php");


$sub=$_POST['sub'];
$meterial=$_POST['meterial'];
$year=$_POST['year'];
$data = "";
if($meterial==1){
    $get_meterial="select * from qustion where subject_code='$sub' and date=$year";
    $run_meterial = mysqli_query($con, $get_meterial);
    $row_meterial = mysqli_fetch_array($run_meterial);
    $locationq = $row_meterial['location'];
    $locationa = $row_meterial['answer_location'];

    $data .= '
  <div class="row" style="  display: flex;justify-content: center;align-items: center;">

    <div class="card" style="width: 18rem;margin-right:5px;height:15rem">
<div class="card-body">
  <h5 class="card-title">Question</h5>
  <h6 class="card-subtitle mb-2 text-muted">'.$year.'</h6>
  <p class="card-text">'.$locationq.'</p>
  <button type="button" class="btn btn-primary card-link" onclick="verifyq(`'.$locationq.'`);" >view</button>
<button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./admin/files/qna/'.$locationq.'" download>Downloade</a></button>
</div>
</div>
       

<div class="card" style="width: 18rem;height:15rem">
<div class="card-body">
  <h5 class="card-title">Answer</h5>
  <h6 class="card-subtitle mb-2 text-muted">'.$year.'</h6>
  <p class="card-text">'.$locationa.'</p>
 <button type="button" class="btn btn-primary card-link" onclick="verifya(`'.$locationa.'`);" >view</button>
<button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./admin/files/qna/'.$locationa.'" download>Downloade</a></button>
</div>
</div>

</div>';
}else if($meterial==2){
    $get_meterial="select * from book where subject_code='$sub'";
    $run_meterial = mysqli_query($con, $get_meterial);
    $data .= '
    <div class="row" style="  display: flex;justify-content: center;align-items: center;">';
    while ($row_meterial  = mysqli_fetch_array($run_meterial)) {
 
    $location = $row_meterial['location'];
    $book = $row_meterial['book_name'];



  $data .= '   <div class="card" style="width: 18rem;margin-right:5px;margin-top:5px;height:15rem">
<div class="card-body">
  <h5 class="card-title">Book</h5>
  <h6 class="card-subtitle mb-2 text-muted">'.$book.'</h6>
  <p class="card-text">'.$location.'</p>
  <button type="button" class="btn btn-primary card-link" onclick="verifybook(`'.$location.'`);" >view</button>
<button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./admin/files/books/'.$location.'" download>Downloade</a></button>
</div>
</div>
       



';
    }

    $data .= ' <div>';
}else if($meterial==3){
    $get_meterial="select * from files where subject_code='$sub' and status=3";
    $run_meterial = mysqli_query($con, $get_meterial);
    $data .= '
    <div class="row" style="  display: flex;justify-content: center;align-items: center;">';
    while ($row_meterial  = mysqli_fetch_array($run_meterial)) {
 
    $location = $row_meterial['file_name'];
    $disc = $row_meterial['disc'];
    $type = $row_meterial['file_type'];

    $data .= '


    <div class="card" style="width: 18rem;margin-right:5px;margin-top:5px;height:15rem">
<div class="card-body">';
if($type==1){
    $data .= '<h5 class="card-title">PDF</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$location.'</h6>
    <p class="card-text">'.$disc.'</p>
    <button type="button" class="btn btn-primary card-link" onclick="verifypdf(`'.$location.'`);" >view</button>
  <button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./teacher/file/'.$location.'" download>Downloade</a></button>
  </div>
  </div>';
}else if($type==2){
    $data .= '<h5 class="card-title">Image</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$location.'</h6>
    <p class="card-text">'.$disc.'</p>
    <button type="button" class="btn btn-primary card-link" onclick="verifyimg(`'.$location.'`);" >view</button>
  <button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./teacher/file/'.$location.'" download>Downloade</a></button>
  </div>
  </div>';
}else if($type==3){
    $data .= '<h5 class="card-title">Vedio</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$location.'</h6>
    <p class="card-text">'.$disc.'</p>
    <button type="button" class="btn btn-primary card-link" onclick="verifyvedio(`'.$location.'`);" >view</button>
  <button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./teacher/file/'.$location.'" download>Downloade</a></button>
  </div>
  </div>';
}else if($type==4){
    $data .= '<h5 class="card-title">Power Point</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$location.'</h6>
    <p class="card-text">'.$disc.'</p>
   
  <button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./teacher/file/'.$location.'" download>Downloade</a></button>
  </div>
  </div>';
}else if($type==5){
    $data .= '<h5 class="card-title">MS Word</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$location.'</h6>
    <p class="card-text">'.$disc.'</p>
  
  <button class="btn btn-primary card-link" type="button"><a style="text-decoration:none;color:white;" href="./teacher/file/'.$location.'" download>Downloade</a></button>
  </div>
  </div>';
}


    }
    
    $data .= ' <div>';
}




// Design initial table header 


echo $data;

?>






