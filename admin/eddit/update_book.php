


<?php


if (isset($_POST['sub_code']) && isset($_POST['book_name']) && isset($_FILES['file']['name']) && isset($_POST['sl_no'])) {


    // include Database connection file 
    include("../../db.php");

    $sl_no = $_POST['sl_no'];
    $sub_code = $_POST['sub_code'];
    $book_name = $_POST['book_name'];
    $fileName = $_FILES['file']['name'];
         $target = "../files/books/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["file"]["tmp_name"];	
		$result1 = move_uploaded_file($tempFileName,$fileTarget);
    if($result1){
     
       
        // echo  $fileTarget;to_email = $college_email;
    // $subject = "Welcome To StudentCorner";


    $check = "select * from book where book_name='$book_name' and sl_no!='$sl_no'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        // $query = "INSERT INTO book(subject_code, book_name,location) VALUES('$sub_code','$book_name','$fileTarget')";
        $query = "update book set subject_code='$sub_code', book_name='$book_name',location='$fileTarget' where sl_no= $sl_no";
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