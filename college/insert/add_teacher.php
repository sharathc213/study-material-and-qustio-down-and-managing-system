


<?php
if (isset($_POST['teacher_name']) && isset($_POST['teacher_email'])&& isset($_POST['college_code'])) {

    // include Database connection file 
    include("../../db.php");


    $teacher_name = $_POST['teacher_name'];
    $teacher_email = $_POST['teacher_email'];
    $college_code = $_POST['college_code'];
    // $to_email = $teacher_email;
    // $subject = "Welcome To StudentCorner";


    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from teacher where email='$teacher_email'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO teacher( teacher_name,email,password,college_code) VALUES('$teacher_name','$teacher_email','$password','$college_code')";
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