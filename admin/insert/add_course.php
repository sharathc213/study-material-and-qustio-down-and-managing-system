


<?php
if (isset($_POST['course_name']) && isset($_POST['course_code']) && isset($_POST['course_year']) && isset($_POST['course_cat'])) {

    // include Database connection file 
    include("../../db.php");



    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $course_year = $_POST['course_year'];
    $course_cat = $_POST['course_cat'];
    // $to_email = $course_email;
    // $subject = "Welcome To StudentCorner";



    $check = "select * from course where  course_code='$course_code'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO course( course_name,course_cat,year,course_code) VALUES('$course_name','$course_cat','$course_year','$course_code')";
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