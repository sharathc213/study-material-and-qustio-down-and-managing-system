


<?php


if (isset($_POST['sub_code']) && isset($_POST['teacher_code']) && isset($_FILES['filedata']['name']) && isset($_POST['type_code']) && isset($_POST['filedesc'])) {
  

    // include Database connection file 
    include("../../db.php");


    $sub_code = $_POST['sub_code'];
    $teacher_code = $_POST['teacher_code'];
    $type_code = $_POST['type_code'];
    $filedesc = $_POST['filedesc'];
    $fileName = $_FILES['filedata']['name'];
         $target = "../files/books/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["file"]["tmp_name"];	
		$result1 = move_uploaded_file($tempFileName,$fileTarget);
    if($result1){
       
        // echo  $fileTarget;to_email = $college_email;
    // $subject = "Welcome To StudentCorner";


    $check = "select * from book where book_name='$book_name'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO book(subject_code, book_name,location) VALUES('$sub_code','$book_name','$fileTarget')";
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