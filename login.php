<?php


include("db.php");


    $password = $_POST['password'];
    $username =$_POST['username'];
    $which =$_POST['which'];
  function login($which,$username,$password,$con)
    {
       
        $check ="select * from $which where password='$password' and email='$username'";
        if ($result = mysqli_query($con,$check)) {
            $rowcount=mysqli_num_rows($result);
            if($rowcount==1)echo $which;
            else echo false;
        }
    }

  


login($which,$username,$password,$con);
?>