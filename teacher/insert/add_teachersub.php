


<?php
if (isset($_POST['sub']) &&  isset($_POST['teacher_code'])) {

    // include Database connection file 
    include("../../db.php");


 
    $sub = $_POST['sub'];
    $teacher_code = $_POST['teacher_code'];
    // $to_email = $teacher_email;
    // $subject = "Welcome To StudentCorner";




    $check = "select * from teacher_subject where teacher_code='$teacher_code' and subject_code='$sub'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO teacher_subject( teacher_code,subject_code) VALUES('$teacher_code','$sub')";
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
?>