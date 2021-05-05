


<?php

if (isset($_POST['com_code']) && isset($_POST['year']) && isset($_POST['sem1_1']) && isset($_POST['sem1_2']) && isset($_POST['sem1_3']) && isset($_POST['sem1_4']) && isset($_POST['sem1_5']) && isset($_POST['sem2_1']) && isset($_POST['sem2_2']) && isset($_POST['sem2_3']) && isset($_POST['sem2_4']) && isset($_POST['sem2_5'])) {

    // include Database connection file 
    include("../../db.php");



 
    $com_code = $_POST['com_code'];
    $course_year = $_POST['year'];
    $sem1_1 = $_POST['sem1_1'];
    $sem1_2 = $_POST['sem1_2'];
    $sem1_3 = $_POST['sem1_3'];
    $sem1_4 = $_POST['sem1_4'];
    $sem1_5 = $_POST['sem1_5'];

    $sem2_1 = $_POST['sem2_1'];
    $sem2_2 = $_POST['sem2_2'];
    $sem2_3 = $_POST['sem2_3'];
    $sem2_4 = $_POST['sem2_4'];
    $sem2_5 = $_POST['sem2_5'];

    if($course_year>=2){
   
        $sem3_1 = $_POST['sem3_1'];
        $sem3_2 = $_POST['sem3_2'];
        $sem3_3 = $_POST['sem3_3'];
        $sem3_4 = $_POST['sem3_4'];
        $sem3_5 = $_POST['sem3_5'];
    
        $sem4_1 = $_POST['sem4_1'];
        $sem4_2 = $_POST['sem4_2'];
        $sem4_3 = $_POST['sem4_3'];
        $sem4_4 = $_POST['sem4_4'];
        $sem4_5 = $_POST['sem4_5']; 
    }

    if($course_year>=3){
       
        $sem5_1 = $_POST['sem5_1'];
        $sem5_2 = $_POST['sem5_2'];
        $sem5_3 = $_POST['sem5_3'];
        $sem5_4 = $_POST['sem5_4'];
        $sem5_5 = $_POST['sem5_5'];
    
        $sem6_1 = $_POST['sem6_1'];
        $sem6_2 = $_POST['sem6_2'];
        $sem6_3 = $_POST['sem6_3'];
        $sem6_4 = $_POST['sem6_4'];
        $sem6_5 = $_POST['sem6_5']; 
    }


    // mysqli_autocommit($con, False);
    $query = "update  subject_course set sem_1_sub_1='$sem1_1',sem_1_sub_2='$sem1_2',sem_1_sub_3='$sem1_3',sem_1_sub_4='$sem1_4',sem_1_sub_5='$sem1_5',sem_2_sub_1='$sem2_1',sem_2_sub_2='$sem2_2',sem_2_sub_3='$sem2_3',sem_2_sub_4='$sem2_4',sem_2_sub_5='$sem2_5' where compination_code=$com_code";
    if($course_year>=2){
        $query = "  update  subject_course set sem_1_sub_1='$sem1_1',sem_1_sub_2='$sem1_2',sem_1_sub_3='$sem1_3',sem_1_sub_4='$sem1_4',sem_1_sub_5='$sem1_5',sem_2_sub_1='$sem2_1',sem_2_sub_2='$sem2_2',sem_2_sub_3='$sem2_3',sem_2_sub_4='$sem2_4',sem_2_sub_5='$sem2_5',sem_3_sub_1='$sem3_1',sem_3_sub_2='$sem3_2',sem_3_sub_3='$sem3_3',sem_3_sub_4='$sem3_4',sem_3_sub_5='$sem3_5',sem_4_sub_1='$sem4_1',sem_4_sub_2='$sem4_2',sem_4_sub_3='$sem4_3',sem_4_sub_4='$sem4_4',sem_4_sub_5='$sem4_5' where compination_code=$com_code";
        }
    if($course_year>=3){
        $query = "  update  subject_course set sem_1_sub_1='$sem1_1',sem_1_sub_2='$sem1_2',sem_1_sub_3='$sem1_3',sem_1_sub_4='$sem1_4',sem_1_sub_5='$sem1_5',sem_2_sub_1='$sem2_1',sem_2_sub_2='$sem2_2',sem_2_sub_3='$sem2_3',sem_2_sub_4='$sem2_4',sem_2_sub_5='$sem2_5',sem_3_sub_1='$sem3_1',sem_3_sub_2='$sem3_2',sem_3_sub_3='$sem3_3',sem_3_sub_4='$sem3_4',sem_3_sub_5='$sem3_5',sem_4_sub_1='$sem4_1',sem_4_sub_2='$sem4_2',sem_4_sub_3='$sem4_3',sem_4_sub_4='$sem4_4',sem_4_sub_5='$sem4_5',sem_5_sub_1='$sem5_1',sem_5_sub_2='$sem5_2',sem_5_sub_3='$sem5_3',sem_5_sub_4='$sem5_4',sem_5_sub_5='$sem5_5',sem_6_sub_1='$sem6_1',sem_6_sub_2='$sem6_2',sem_6_sub_3='$sem6_3',sem_6_sub_4='$sem6_4',sem_6_sub_5='$sem6_5' where compination_code=$com_code";
  
    }

     if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {
           
           
            
            echo 111;
          
           

    }


            
        
    
}
?>