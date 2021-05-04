<?php

include("../../db.php");

if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_q = "select * from qustion where sl_no='$sl_no'";
        $run_q = mysqli_query($con,$get_q);
        $row_q = mysqli_fetch_array($run_q);

        $date = $row_q['date'];
        $locationq = $row_q['location'];
        $locationa = $row_q['answer_location'];
 
        $subject_code = $row_q['subject_code'];
        $get_sub2 = "select * from subject where subject_code='$subject_code' ";
        $run_sub2 = mysqli_query($con, $get_sub2);
        $row_sub2 = mysqli_fetch_array($run_sub2);
        $sub_name2 = $row_sub2['subject_name'];



    $data = ' 
    <form role="form" enctype="multipart/form-data" id="addbook" >
    <div class="form-group">
        <label>Subject</label>
        <select disabled class="form-control" id="sub_code">';
        $data .= "    <option selected value=".$subject_code.">".$sub_name2." (".$subject_code.")</option>";
       

            $get_sub = "select * from subject ";
            $run_sub = mysqli_query($con, $get_sub);

            while ($row_sub = mysqli_fetch_array($run_sub)) {

                $sub_name = $row_sub['subject_name'];

                $sub_code = $row_sub['subject_code'];
             
               
                $data .= "<option value='$sub_code' >$sub_name ($sub_code)</option>";
               
            }   
            $data .='   
    

</select>
                                <span class="help-block" id="sub_code_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" disabled class="form-control" id="year" value="'.$date.'" style="text-transform:uppercase">
                                <span class="help-block" id="year_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Question (in PDF format)</label>
                                <input type="file" id="question" class="form-control" >
                                <span id="filq">'.$locationq.'</span><br><button type="button" class="btn btn-primary" onclick="verifyq(`'.$locationq.'`);">View</button>
                                <button class="btn btn-primary" type="button"><a style="text-decoration:none;color:white;" href="./files/qna/'.$locationq.'" download>Downloade</a></button>
                                <span class="help-block" id="question_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Answer (in PDF format)</label>
                                <input type="file" id="answer" class="form-control" >
                                <span id="fila">'.$locationa.'</span><br><button type="button" class="btn btn-primary" onclick="verifya(`'.$locationa.'`);">View</button>
                                <button class="btn btn-primary" type="button"><a style="text-decoration:none;color:white;" href="./files/qna/'.$locationa.'" download>Downloade</a></button>
                                <span class="help-block" id="answer_error"></span>
                            </div>


                            <button type="button" class="btn btn-primary" onclick="updatequestion('.$sl_no.');">Update</button>
 
                        </form>
   ';

     echo $data;
    }



?>

