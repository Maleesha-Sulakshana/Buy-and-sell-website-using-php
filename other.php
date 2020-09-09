<?php
    require_once('db.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E Buy & Sell | Other</title>
        <link rel="icon" href="./images/letterE.png">

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

        <!-- Custom js -->
        <script src="./js/main.js"></script>

    </head>

    <body>

        <div class="sticky-top nav-bar">
            <div class="nav-logo">
                <div class="nav-brand">
                    <a href="index.php" class="text-gray"><span>E</span> - Buy & Sell</a>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php"><i class="fas fa-ad"></i>&nbsp;&nbsp;All Ads</a></li>

                    <?php
                    
                    if($_SESSION != null){

                        ?>
                        
                        <li><a href="profile.php"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;Profile</a></li>
                        <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Log Out</a></li>

                        <?php
                
                    }

                    ?>

                    <!-- <li style="float:right"><a class="active" href="#about"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Other</a></li> -->
                </ul>
            </div>
        </div>

        <div class="main-content">

            <div class="contact">

                <div class="item-content">
                    <h4>Contact Us</h4>
                    <div class="items">
                        <a href=""><i class="fas fa-envelope"></i><br>
                        ebuyandsell@gmail.com</a><br>
                        <a href=""><i class="fas fa-phone"></i><br>
                        076 79 50 600</a><br>
                        <a href=""><i class="fas fa-fax"></i><br>
                        011 2 000 000</a>
                    </div>
                </div>

                <div class="follow-us">
                    <h4>Follow Us</h4>
                    <div class="items">
                        <a href="" ><i class="fa fa-linkedin-square"></i></a>
                        <a href="" ><i class="fa fa-facebook-square"></i></a>
                        <a href="" ><i class="fa fa-twitter-square"></i></a>
                        <a href="" ><i class="fa fa-youtube-square"></i></a>
                    </div>
                </div>
        
                <div class="dev">
                    <a href="#">&copy;&nbsp;<span>E</span> - Buy & Sell Developed By Group | 34</a>
                </div>

            </div>
            <div class="map">
                <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->

                <div class="comment">
                    <h4>Add Your Comment</h4>

                    <?php
                    
                    if($_SESSION != null){

                    ?>

                    <div class="add">
                        <form action="comment.php" method="post">
                            <input type="text" name="txtcomment" id="txtcomment" class="form-control">
                            <button type="submit" class="btn" id="addcomment" name="addcomment">Send</button>
                            <button type="reset" class="btn">Clear</button>
                        </form>
                    </div>

                    <?php
                    
                    }
                    
                    ?>

                    <table class="table table-striped table-bordered table-sm">

                        <?php
                            
                            $selectloc = "SELECT * FROM comments";
                            $selectlocation = mysqli_query($conn, $selectloc);

                            while( $row = mysqli_fetch_assoc($selectlocation) ){

                                echo "<tr>
                                <td>
                                    <div class='name'>
                                        <h5>{$row['name']}</h5>
                                    </div>
                                    <div class='content'>
                                        <p>{$row['comment']}</p>
                                    </div>
                                    </td>
                                </tr>\n";

                              }

                        ?>

                        <!-- <tr>
                            <td>
                                <div class="name">
                                    <h5>Maleesha Sulakshana</h5>
                                </div>
                                <div class="content">
                                    <p>this is great side for sell and buy.</p>
                                </div>
                            </td>
                        </tr> -->

                    </table>
                </div>

            </div>

        </div>

        <hr>

        <!-- <script>
            function myMap() {
            var mapProp= {
              center:new google.maps.LatLng(51.508742,-0.120850),
              zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
        </script>
            
        <script src="https://maps.googleapis.com/maps/api/js?key= &callback=myMap"></script> -->
        
    </body>

</html>