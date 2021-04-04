


<?php

if ( isset($_POST['sl_no'])) {


    // include Database connection file 
    include("../../db.php");


   $sl_no=$_POST['sl_no'];
    // $target = "../files/qna/";
    $resulta=false;
    $resultq=false;	
    $check =222;
    if( isset($_FILES['question']['name'])){

        $question = $_FILES['question']['name']; 
        $fileTargetq = $question; 
        $tempFileNameq = $_FILES["question"]["tmp_name"];
        $resultq = move_uploaded_file($tempFileNameq,$fileTargetq);
    }
    if( isset($_FILES['answer']['name'])){

    
 
    $answer = $_FILES['answer']['name'];
        	
	
        $fileTargeta = $answer;	
	
        $tempFileNamea = $_FILES["answer"]["tmp_name"];	
		
        $resulta = move_uploaded_file($tempFileNamea,$fileTargeta);
    }
    if($resultq){
       

        $query1 = "update qustion set location='$fileTargetq' where sl_no= $sl_no";
                if (!$result2 = mysqli_query($con, $query1)) {
                    exit(mysqli_error());
                    echo "some thing is wrong";

                }else {
           
                $check=111;
           
            
        }


    }
    if($resulta){
       

        $query2 = "update qustion set answer_location='$fileTargeta' where sl_no= $sl_no";
                if (!$result3 = mysqli_query($con, $query2)) {
                    exit(mysqli_error());
                    echo "some thing is wrong";
                    $check=223;
                }else {
           
                $check=111;
           
            
        }


    }
    if($check==111 || $check==222){
       echo 111;
    }



}
?>