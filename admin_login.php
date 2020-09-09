<?php
    require_once('db.php');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E Buy & Sell | Administrator Login</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="./css/all.css">
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/brands.css">
        <link rel="stylesheet" href="./css/brands.min.css">
        <link rel="stylesheet" href="./css/fontawesome.css">
        <link rel="stylesheet" href="./css/fontawesome.min.css">
        <link rel="stylesheet" href="./css/fonts.css">
        <link rel="stylesheet" href="./css/regular.css">
        <link rel="stylesheet" href="./css/regular.min.css">
        <link rel="stylesheet" href="./css/solid.css">
        <link rel="stylesheet" href="./css/solid.min.css">
        <link rel="stylesheet" href="./css/svg-with-js.css">
        <link rel="stylesheet" href="./css/svg-with-js.min.css">
        <link rel="stylesheet" href="./css/v4-shims.css">
        <link rel="stylesheet" href="./css/v4-shims.min.css">
        
	    <!-- Owl-Carousel -->
	    <link rel="stylesheet" href="./css/owl.carousel.min.css">
	    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

	    <!-- AOS Library -->
	    <link rel="stylesheet" href="./css/aos/aos.css">

	    <!-- Custom Style -->
        <link rel="stylesheet" href="./css/custom/other.css">

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css" /> 
        <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css   " /> 
        
        <!-- Jquery -->
        <script src="./js/jquery.js"></script>   

        <!-- Bootstrap js -->
        <script src="./bootstrap-3.3.7-dist/js/bootstrap.js"></script>  
        <!-- <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom js -->
        <script src="./js/main.js"></script> 

        <style>
            body{
                margin: 10%;
            }

            .container{
                width: 50%;
                padding: 5rem;
                text-align: center;
            }

            .container button{
                font-size: 1.5rem;
            }

            .container h4{
                font-size: 2rem;
                margin-bottom: 5rem;
            }

            .container label{
                float: left;
                margin-left: 2rem;
            }

        </style>
        
    </head>

    <body>

    <?php

        if(isset($_POST['adminlogin'])){

            $email = $_POST['adminemail'];
            $psw = $_POST['adminpsw'];

            $login = "SELECT * FROM admin WHERE email ='$email' and psw ='$psw'";
            $checkresult = mysqli_query($conn, $login);
            if(mysqli_fetch_assoc($checkresult)){

                ?>
                    <!-- <script>
                        alert("Administrator Login Success.");
                    </script> -->
                <?php

                $_SESSION['admin'] = $email;
                // alert($_SESSION['adminEmail']);
                header("location: admin.php");

            }else{

                ?>
                    <!-- <script>
                        alert("Administrator Login failed. Wrong username or password Try again.");
                    </script> -->
                <?php

            }
        }

    ?>
        
        <div class="container">

            <h4>Administrator Login</h4>

            <div class="login-container">

                <form action="admin_login.php" method="post">

                    <label for=""><span>Administrator Email</span></label>
                    <br>
                    <input type="email" name="adminemail" id="adminemail"  class="form-control" placeholder="Administrator Email" required>
                    <br>
                    <label for=""><span>Administrator Password</span></label>
                    <br>
                    <input type="password" name="adminpsw" id="adminpsw"  class="form-control" placeholder="Administrator Password" onmouseover="this.type='text'"
                    onmouseout="this.type='password'" required>
                    <br>
                    <button type="submit" class="btn btn-warning btn_index" id="adminlogin" name="adminlogin">Login</button>

                </form>

            </div>

        </div>

    </body>

</html>