


<?php


if (  isset($_POST['status']) && isset($_POST['filedesc']) && isset($_POST['sl_no'])) {


    // include Database connection file 
    include("../../db.php");

    $sl_no = $_POST['sl_no'];
    $status = $_POST['status'];
    // $type_code = $_POST['type_code'];
    $disc = $_POST['filedesc'];
    // $result1 = false;
    // if (isset($_FILES['filedata']['name'])){
    // $fileName = $_FILES['filedata']['name'];
    // $target = "../file/";	
	// 	$fileTarget = $target.$fileName;	
	// 	$tempFileName = $_FILES["filedata"]["tmp_name"];
        	
	// 	$result1 = move_uploaded_file($tempFileName,$fileTarget);
    // }

        // echo  $fileTarget;to_email = $college_email;
    // $subject = "Welcome To StudentCorner";


    // $check = "select * frome files where disc='$disc' and sl_no!='$sl_no'";
    // $result_check = mysqli_query($con, $check);
    // if (mysqli_num_rows($result_check) == 0) {



        // $query = "INSERT INTO book(subject_code, book_name,location) VALUES('$sub_code','$book_name','$fileTarget')";
        $query = "update files set  disc='$disc',status=$status where sl_no= $sl_no";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {
            // if($result1){
            //     $query1 = "update files set file_name='$fileName',status='0' where sl_no= $sl_no";
            //     if (!$result2 = mysqli_query($con, $query1)) {
            //         exit(mysqli_error());
            //         echo "some thing is wrong";
            //     }
            // }
            // $body = "Hi, yourpassword is $paddword";
            // $headers = "From: studentscornerhelpcenter@gmail.com";
            
            // if (mail($to_email, $subject, $body, $headers)) {
                echo 111;
            // } else {
            //     echo 110;
            // }

            
        }
 

}
?>