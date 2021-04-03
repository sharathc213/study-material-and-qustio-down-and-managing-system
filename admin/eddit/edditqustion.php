<?php

include("../../db.php");

if( isset($_POST['sl_no'])){

$sl_no=$_POST['sl_no'];


                        
        $get_book = "select * from book where sl_no='$sl_no'";
        $run_book = mysqli_query($con,$get_book);
        $row_book = mysqli_fetch_array($run_book);

        $book_name = $row_book['book_name'];
        $location = $row_book['location'];
 
        $subject_code = $row_book['subject_code'];
        $get_sub2 = "select * from subject where subject_code='$subject_code' ";
        $run_sub2 = mysqli_query($con, $get_sub2);
        $row_sub2 = mysqli_fetch_array($run_sub2);
        $sub_name2 = $row_sub2['subject_name'];



    $data = ' 
    <form role="form" enctype="multipart/form-data" id="addbook" >
    <div class="form-group">
        <label>Subject</label>
        <select class="form-control" id="update_sub_code">';
        $data .= "    <option selected value=".$subject_code.">".$sub_name2." (".$subject_code.")</option>";
       

            $get_sub = "select * from subject ";
            $run_sub = mysqli_query($con, $get_sub);

            while ($row_sub = mysqli_fetch_array($run_sub)) {

                $sub_name = $row_sub['subject_name'];

                $sub_code = $row_sub['subject_code'];
             
               
                $data .= "<option value='$sub_code' >$sub_name ($sub_code)</option>";
               
            }   
            $data .='    </select>
        <span class="help-block" id="update_sub_code_error"></span>
    </div>
    <div class="form-group">
        <label>Book Name</label>
        <input class="form-control" id="update_book_name" style="text-transform:uppercase" value='.$book_name.'>
        <span class="help-block" id="update_book_name_error"></span>
    </div>
    <div class="form-group">
        <label>Book (in PDF format)</label>
        <input type="file" id="update_book" class="form-control" >
        <br>
        <span id="fil">'.$location.'</span><button type="button" class="btn btn-primary" onclick="view();">View</button>
        <span class="help-block" id="update_book_error"></span>
    </div>


    <button type="button" class="btn btn-primary" onclick="updatebook('.$sl_no.');">update Book</button>
   
</form>
   ';

     echo $data;
    }



?>

