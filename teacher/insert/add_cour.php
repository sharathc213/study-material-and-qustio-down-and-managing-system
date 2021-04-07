


<?php
if (isset($_POST['com']) &&  isset($_POST['college_code'])) {

    // include Database connection file 
    include("../../db.php");


 
    $com = $_POST['com'];
    $college_code = $_POST['college_code'];
    // $to_email = $teacher_email;
    // $subject = "Welcome To StudentCorner";




    $check = "select * from college_compination where college_code='$college_code' and compination_code=$com";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO college_compination( college_code,compination_code) VALUES('$college_code',$com)";
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