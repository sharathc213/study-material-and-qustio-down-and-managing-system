


<?php
if (isset($_POST['file_name']) && isset($_POST['file_size'])) {

    // include Database connection file 
    include("../../db.php");



    $file_name = $_POST['file_name'];
    $file_size = $_POST['file_size'];
    // $to_email = $file_email;
    // $subject = "Welcome To StudentCorner";



    $check = "select * from file_type where  file_type='$file_name'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO file_type( file_type,max_size) VALUES('$file_name','$file_size')";
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