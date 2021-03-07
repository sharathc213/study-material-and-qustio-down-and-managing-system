


<?php
if (isset($_POST['subject_name']) && isset($_POST['subject_code'])) {

    // include Database connection file 
    include("../../db.php");



    $subject_name = $_POST['subject_name'];
    $subject_code = $_POST['subject_code'];
    // $to_email = $subject_email;
    // $subject = "Welcome To StudentCorner";



    $check = "select * from subject where  subject_code='$subject_code'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO subject( subject_name,subject_code) VALUES('$subject_name','$subject_code')";
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