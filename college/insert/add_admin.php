


<?php
if (isset($_POST['admin_name']) && isset($_POST['admin_email'])) {

    // include Database connection file 
    include("../../db.php");



    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    // $to_email = $admin_email;
    // $subject = "Welcome To StudentCorner";


    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from admin where  email='$admin_email'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO admin( admin_name,email,password) VALUES('$admin_name','$admin_email','$password')";
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