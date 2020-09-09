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
        <title>E Buy & Sell | Item - View</title>
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
        <link rel="stylesheet" href="./css/custom/item.css">

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

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
              showDivs(slideIndex += n);
            }
            
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[slideIndex-1].style.display = "block";  
            }
        </script>

    </head>

    <body>

            <div class="sticky-top nav-bar">
                <div class="nav-logo">
                    <div class="nav-brand">
                        <a href="#" class="text-gray"><span>E</span> - Buy & Sell</a>
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
                        
                        <li style="float:right"><a class="active" href="other.php"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Other</a></li>
                    </ul>
                </div>
            </div>

            <main>
            <div class="items">
                <div class="images">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">

                          <?php
                            $itemid = $_GET['id'];
                            // $id_email = $_SESSION['UserEmail'];
                            $selectitem = "SELECT * FROM items WHERE id = '$itemid'";
                            $selectitems = mysqli_query($conn, $selectitem);
        
                            while( $row = mysqli_fetch_assoc($selectitems) ){

                                // $itemid = $row['id'];
                                echo "<img src='./images/{$row['image']}' style='width:100%'>";
        
                            }
        
                          ?>

                            <!-- <img src="./images/axio1.jpg" style="width:100%"> -->
                          </div>
                    

                          <?php
                            $itemid = $_GET['id'];
                            // $id_email = $_SESSION['UserEmail'];
                            $selectitem = "SELECT * FROM images WHERE id = '$itemid'";
                            $selectitems = mysqli_query($conn, $selectitem);
        
                            while( $row = mysqli_fetch_assoc($selectitems) ){

                                // $itemid = $row['id'];

                                echo "<div class='item'>
                                <img src='./images/{$row['filename']}' style='width:100%'>
                              </div>\n";
        
                            }
        
                          ?>

                    
                          <!-- <div class="item">
                            <img src="./images/axi03.jpg" style="width:100%">
                          </div>
                        
                          <div class="item">
                            <img src="./images/axio2.jpg" style="width:100%">
                          </div> -->

                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only"><i class="fa fa-angle-left"></i></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                      
                </div>

                <div class="details" style='padding-top: 0rem;'>

                  <?php
                      $itemid = $_GET['id'];
                      // $id_email = $_SESSION['UserEmail'];
                      $selectitem = "SELECT * FROM items WHERE id = '$itemid'";
                      $selectitems = mysqli_query($conn, $selectitem);
  
                      while( $row = mysqli_fetch_assoc($selectitems) ){

                          $emailid = $row['email'];
                          // echo "<img src='./images/{$row['image']}' style='width:100%'>";

                          echo "<div class='header' style='margin-top: 1rem;'>
                            <h2>{$row['subject']}</h2>
                            <div class='locate'>
                                <h4>{$row['category']}&nbsp; <span>{$row['location']}</span> </h4>
                                
                            </div>
                            <div class='price'>
                                <h4><span>Rs</span> {$row['price']}</h4><br>
                                <h4 style='font-size:2.1rem;'><span>Contact :  </span> {$row['tp_number']} </h4>
                                <h5>Posted Date : {$row['date_time']}</h5>
                            </div>
                        </div>
    
                        <div class='desc'>
                            <p>
                              {$row['description']}
                            </p>
                        </div>";
  
                      }

                      $getemail = "SELECT * FROM users WHERE email = '$emailid'";
                      $selectemail = mysqli_query($conn, $getemail);
  
                      while( $row = mysqli_fetch_assoc($selectemail) ){

                        echo "<br><span><h5>Posted by : {$row['fname']} {$row['lname']}</h5></span>";

                      }
  
                  ?>

                    <!-- <div class="header">
                        <h2>Toyota Axio 2012</h2>
                        <div class="locate">
                            <h4>Car</h4>
                            <h4><span>Colombo</span></h4>
                        </div>
                        <div class="price">
                            <h4><span>Rs</span> 3500000</h4>
                        </div>
                    </div>

                    <div class="desc">
                        <p>
                            Toyota Axio 2012 Hybrid. Colombo - Homagama. 1500cc Engin. 15 inch tyre size.
                            18km per 1liter petrol.
                        </p>
                    </div> -->

                </div>
            </div>

        </main>
        
    </body>

</html>