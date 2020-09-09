<?php

    include_once('db.php');
    session_start();

    if(isset($_POST['loginbtn'])){

        $lemail = $_POST['loginemail'];
        $lpsw = $_POST['loginpsw'];

        $login = "SELECT * FROM users WHERE email ='$lemail' and psw ='$lpsw'";
        $checkresult = mysqli_query($conn, $login);
        if(mysqli_fetch_assoc($checkresult)){

            $_SESSION['UserEmail'] = $lemail;
            header("location: index.php");

        }else{

            header("location: index.php");

        }

    }

?>