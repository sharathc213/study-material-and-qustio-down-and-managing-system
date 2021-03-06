


<?php
if ((isset($_POST['cat_name']))) {
   

    // include Database connection file 
    include("../../db.php");


   
    $cat_name = $_POST['cat_name'];

    // $to_email = $college_email;
    // $subject = "Welcome To StudentCorner";




    $check = "select * from course_cat where cat_name = '$cat_name'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO course_cat(cat_name) VALUES('$cat_name')";
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