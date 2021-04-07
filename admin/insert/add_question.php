


<?php


if (isset($_POST['sub_code']) && isset($_POST['year']) && isset($_FILES['question']['name'])&& isset($_FILES['answer']['name'])) {
  

    // include Database connection file 
    include("../../db.php");


    $sub_code = $_POST['sub_code'];
    $year = $_POST['year'];
    $question = $_FILES['question']['name'];
    $answer = $_FILES['answer']['name'];
         $target = "../files/qna/";		
		$fileTargetq = $target.$question;
        $fileTargeta = $target.$answer;	
		$tempFileNameq = $_FILES["question"]["tmp_name"];
        $tempFileNamea = $_FILES["answer"]["tmp_name"];	
		$resultq = move_uploaded_file($tempFileNameq,$fileTargetq);
        $resulta = move_uploaded_file($tempFileNamea,$fileTargeta);
    if($resultq && $resulta){
       
        // echo  $fileTarget;to_email = $college_email;
    // $subject = "Welcome To StudentCorner";


    $check = "select * from qustion where date='$year' and subject_code='$sub_code'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO qustion(subject_code, date,location,answer_location) VALUES('$sub_code','$year','$question','$answer')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {
            // $body = "Hi, yourpassword is $paddword";
            // $headers = "From: studentscornerhelpcenter@gmail.com";
            
            // if (mail($to_email, $subject, $body, $headers)) {
                echo 111;
            // } else {
            //     echo 110;
            // }

            
        }
    } else {
        echo 110;
    }
}
}
?>