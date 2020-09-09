<?php

    include_once('db.php');
    session_start();

    if(isset($_POST['btnaccupdate'])){

        $id_email = $_SESSION['UserEmail'];
        $fname = $_POST['txtfname'];
        $lname = $_POST['txtlname'];

        $checkreg = "SELECT * FROM users WHERE email ='$id_email'";
        $check = mysqli_query($conn, $checkreg);

        if($check){

            $reg = "UPDATE users SET fname = '$fname', lname = '$lname' WHERE email = '$id_email'";
            $result = mysqli_query($conn, $reg);
            if($result){
                header("location: profile.php");
            }else{
                header("location: profile.php");
            }

        }else{
            header("location: profile.php");
        }

    }

?>