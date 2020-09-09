<?php
    require_once('db.php');
    session_start();

    // $session = $_SESSION['UserEmail'];
    // $_SESSION['UserEmail'] = $session;

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E Buy & Sell | Dashboard</title>

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
        <link rel="stylesheet" href="./css/custom/index.css">

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


    </head>

    <body>

    

    	<main>

            <!-- nav-bar -->
            <nav class="nav">
                <div class="nav-menu flex-row">
                    <div class="nav-brand">
                        <a href="#" class="text-gray"><span>E</span> - Buy & Sell</a>
                    </div>
                    <div class="toggle-collapse">
                        <div class="toggle-icons">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>

                    <div class="login itext-gray">
                    <?php 
                    
                        if($_SESSION == null){

                            ?>

                                <!-- <script>
                                    alert("Login failed. Wrong username or password Try again.");
                                </script> -->

                                <a href="#" data-toggle="modal" data-target="#loginModal" class="" id="forlog"><i class="fa fa-lock"></i><span>&nbsp;Login</span></a>
                                <a href="#" data-toggle="modal" data-target="#regModal" class="" id="forreg"><i class="fa fa-sign-in"></i><span>&nbsp;Register</span></a>
                            <?php
                    
                        }else{
                            ?>

                                <!-- <script>
                                    alert("Login Success.");
                                </script> -->

                                <a href="profile.php" class="" id="foracc"><i class="fas fa-user"></i><span>&nbsp;Account</span></a>
                                <a href="logout.php" id="forlout"><i class="fas fa-sign-out-alt"></i><span>&nbsp;Log Out</span></a>
                    
                            <?php
                        }

                    ?>
                        <a class="" href="other.php"><i class="fas fa-arrow-right"></i><span>&nbsp;Other</span></a>
                    </div>
                </div>
            </nav>
            <hr>


        <!-- Side menu and body content -->

        <section class="clear-flex">
            <div class="box-1">
                <h3><span>All Category</span></h3>
                <table>

                <?php
                            
                    $selectcate = "SELECT category FROM category";
                    $selectcategory = mysqli_query($conn, $selectcate);

                    while( $row = mysqli_fetch_assoc($selectcategory) ){

                        echo "<tr>
                            <td style='width:100%; text-align:center;'><a href='indexcategory.php?category={$row['category']}' id=''><span>{$row['category']}</span></a></td>
                        </tr>\n";

                        }

                ?>

                </table>
            </div>
            <div class="box-2">
                <table id="tblitems" >
                    <tbody>

                        <?php
                            
                            $selectitem = "SELECT * FROM items ORDER BY oderby DESC";
                            $selectitems = mysqli_query($conn, $selectitem);
        
                            while( $row = mysqli_fetch_assoc($selectitems) ){

                                // $itemid = $row['id'];

                                echo "<tr><td>
                                <a href='item.php?id={$row['id']}' style='text-decoration:none;'>
                                    <div class='tbl-section'>
                                        <div class='tbl-items-img'>
                                            <img src='./images/{$row['image']}'>
                                        </div>
                                        <div class='tbl-items'>
                                            <div class='tbl-details'>
                                                <h2>{$row['subject']}</h2>
                                                <div class='dtls'>
                                                    <h4>{$row['category']}&nbsp; <span>&nbsp;{$row['location']}</span></h4>
                                                    <h4><span>Rs</span> {$row['price']}</h4>
                                                    <a href='item.php?id={$row['id']}' class='btn itm-btn' id=''>View Item</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </td></tr>\n";
        
                            }
        
                        ?>

                        <!-- <tr>
                            <td>
                                <a href="#">
                                    <div class="tbl-section">
                                        <div class="tbl-items-img">
                                            <img src="./images/axio1.jpg">
                                        </div>
                                        <div class="tbl-items">
                                            <div class="tbl-details">
                                                <h2>Toyota Axio 2012</h2>
                                                <div class="dtls">
                                                    <h4>Car&nbsp; <span>&nbsp;Colombo</span></h4>
                                                    <h4><span>Rs</span> 3500000</h4>
                                                    <button class="btn itm-btn" id="">View Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <div class="pagination-container">
                    <nav>
                        <ui id="pagination" class="pagination"></ui>
                    </nav>
                </div>
            </div>
            <div class="box-3">
                <h3><span>Districs</span></h3>
                <table>

                    <?php
                            
                        $selectloc = "SELECT * FROM location";
                        $selectlocation = mysqli_query($conn, $selectloc);

                        while( $row = mysqli_fetch_assoc($selectlocation) ){

                            echo "<tr>
                                <td><a href='indexlocation.php?location={$row['distric']}'><span>{$row['distric']}</span></a></td>
                            </tr>\n";

                            }

                    ?>

                </table>
            </div>
        </section>
        <!--x- Side menu and body content -x-->

        </main>


        


        <!-- Login -->
        <div id="loginModal" class="modal fade" role="dialog">  
            <div class="modal-dialog">  
        <!-- Modal content-->  
                <div class="modal-content">  
                    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal">&times;</button>  
                        <h4 class="modal-title"><i class="fa fa-lock"></i>&nbsp;&nbsp;LOGIN TO ACCOUNT</h4>  
                    </div>  
                    <div class="modal-body">  
                        
                        <form action="login.php" method="post">
                            
                            <label>Emial</label>  
                            <input type="email" name="loginemail" id="loginemail" class="form-control" placeholder="Email" required/>  
                            <br />  
                            <label>Password</label>  
                            <input type="password" name="loginpsw" id="loginpsw" class="form-control" placeholder="Password" onmouseover="this.type='text'"
                            onmouseout="this.type='password'" required/>
                            <br />  
                            <button type="submit" name="loginbtn" id="loginbtn" class="btn btn-warning btn_index">Login</button>  
                        
                        </form>

                        <br/>
                        <hr/>
                        <label>&#9400;&nbsp;<Span>E</Span>-Buy & Sell | Group 34</label>
                    </div>  
                </div>  
            </div>  
        </div>  


        <?php

            if(isset($_POST['regbtn'])){

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $psw = $_POST['psw'];
                $cpsw = $_POST['cpsw'];

                if($psw != $cpsw){
                    ?>
                        <!-- <script>
                            alert("Doesn't match confirm password!");
                        </script> -->
                    <?php
                }else{

                    $checkreg = "SELECT * FROM users WHERE email ='$email'";
                    $check = mysqli_query($conn, $checkreg);

                    if($check){

                        $reg = "INSERT INTO users (email,fname,lname,psw) VALUES ('$email','$fname','$lname','$psw')";
                        $result = mysqli_query($conn, $reg);
                        if($result){

                            ?>
                                <!-- <script>
                                    alert("Registration Success. You can log in now.");
                                </script> -->
                            <?php

                        }else{

                            ?>
                                <!-- <script>
                                    alert("Regitration failed. Try again.");
                                </script> -->
                            <?php

                        }

                    }else{

                        
                        ?>
                            <!-- <script>
                                alert("This email already has account. Try useing another one.");
                            </script> -->
                        <?php


                    }

                }

            }

        ?>


        <!-- Register -->
        <div id="regModal" class="modal fade" role="dialog">  
            <div class="modal-dialog">  
        <!-- Modal content-->  
                <div class="modal-content">  
                    <div class="modal-header">  
                            <button type="button" class="close" data-dismiss="modal">&times;</button>  
                            <h4 class="modal-title"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;CREATE ACCOUNT</h4>  
                    </div>  
                    <div class="modal-body">
                            
                            <form action="index.php" method="post">
                            
                                <label>First Name</label>  
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First-Name" required>  
                                <br />   
                                <label>Last Name</label>  
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last-Name" required>  
                                <br />   
                                <label>Email</label>  
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>  
                                <br />  
                                <label>Password</label>  
                                <input type="password" name="psw" id="psw" class="form-control" placeholder="Password" onmouseover="this.type='text'"
                                onmouseout="this.type='password'" required>  
                                <br />  
                                <label>Confirm-Password</label>  
                                <input type="password" name="cpsw" id="cpsw" class="form-control" placeholder="Confirm-Password" onmouseover="this.type='text'"
                                onmouseout="this.type='password'" required.>  
                                <br />  
                                <button type="submit" name="regbtn" id="login_button" class="btn btn-warning btn_index">Register</button>  
                                <button type="reset" class="btn btn_index">Clear</button>

                            </form>

                            <br/>
                            <hr/>
                            <label>&#9400;&nbsp;<Span>E</Span>-Buy & Sell | Group 34</label>
                        </div>  
                </div>  
            </div>  
        </div>  


		
    </body>

</html>