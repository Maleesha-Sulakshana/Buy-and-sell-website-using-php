<?php
    require_once('db.php');
    session_start();

    if($_SESSION['admin'] == null){

        header("location: admin_login.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E Buy & Sell | Administrator</title>

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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

        <!-- Custom js -->
        <script src="./js/main.js"></script> 
        
        <style>
            
            .body_panel{
                width: 100%;
                padding: 5px;
                margin-top: 8rem;
            }

            .body_panel button{
                font-size: 1.3rem;
            }

            .body_panel  input{
                width: 100%;    
            }

            .body_panel  .category{
                width: 50%;    
                margin-left: 25%;
                margin-right: 25%;
                margin-top: 4rem;
            }

            .body_panel  .category table{
                margin-top: 4rem;
            }

            .body_panel  .location{
                width: 50%;    
                margin-left: 25%;
                margin-right: 25%;
                margin-top: 4rem;
            }

            .body_panel  .location table{
                margin-top: 4rem;
            }

        </style>
        
    </head>

    <body>

        <div class="sticky-top nav-bar">
            <div class="nav-logo">
                <div class="nav-brand">
                    <a href="#" class="text-gray"><span>E</span> - Buy & Sell</a>
                </div>
           </div>
           <div class="nav" style="text-align: center; padding: 0px; margin: 0px;">
               <h3><span>ADMIN PANEL</span></h3>
           </div>
           <div class="nav-logo">
                <a href="adminlogout.php" style="color:#555; text-decoration:none;"><i class="fas fa-sign-out-alt" style="color:orange;"></i>&nbsp;&nbsp;Log Out</a>
            </div>
        </div>
        <div class="body_panel">

            <div class="edit-profile">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#locat"><span></span>&nbsp; Locations - Districs</a></li>
                    <li><a data-toggle="tab" href="#catg"></span>&nbsp; Categories</a></li>
                    <li><a data-toggle="tab" href="#admins"></span>&nbsp; Administrator</a></li>
                  </ul>
                
                  <div class="tab-content tabs">
                    <div id="locat" class="tab-pane fade in active">
                      <h3>Locations</h3>

                      <div class="category">
                          <form action="admininsert.php" method="post">
                                <label for="">Location Name</label>
                                <br>
                                <input type="text" name="namelocation" id="namelocation" class="form-control" placeholder="Location Name" required>
                                <br>
                                <button type="submit" class="btn btn-warning btn_index" id="addlocations" name="addlocations">Save Changes</button>
                                <button type="reset" class="btn">Clear</button>
                          </form>
                          <table class="table">

                            <?php
                            
                                $selectloc = "SELECT * FROM location";
                                $selectlocation = mysqli_query($conn, $selectloc);

                                while( $row = mysqli_fetch_assoc($selectlocation) ){
                                    echo "<tr>
                                    <td>{$row['distric']}</td>
                                    <td><a href='locatedel.php?id={$row['distric']}'><span>Delete</span></a></td>
                                    </tr>\n";
                                  }

                            ?>

                          </table>
                      </div>
                      
                    </div>
                    <div id="catg" class="tab-pane fade">
                      <h3>Categories</h3>

                      <div class="location">
                        <form action="admininsert.php" method="post">
                            <label for="">Category Name</label>
                            <br>
                            <input type="text" name="namecategory" id="namecategory" class="form-control" placeholder="Category Name" required>
                            <br>
                            <button type="submit" class="btn btn-warning btn_index" id="btncategory" name="btncategory">Save Changes</button>
                            <button type="reset" class="btn">Clear</button>
                      </form>
                      <table class="table">

                            <?php
                                    
                                $selectcate = "SELECT * FROM category";
                                $selectcategory = mysqli_query($conn, $selectcate);

                                while( $row = mysqli_fetch_assoc($selectcategory) ){
                                    echo "<tr>
                                    <td>{$row['category']}</td>
                                    <td><a href='categorydel.php?id={$row['category']}'><span>Delete</span></a></td>
                                    </tr>\n";
                                }

                            ?>

                      </table>

                    </div>
                      
                    </div>

                    <div id="admins" class="tab-pane fade">
                        <h3>Administrator</h3>
  
                        <div class="location">
                          <form action="admininsert.php" method="post">
                              <label for="">New Admin Name</label>
                              <br>
                              <input type="text" name="adminname" id="adminname" class="form-control" placeholder="New Admin Name" required>
                              <br>
                              <label for="">New Admin Email</label>
                              <br>
                              <input type="text" name="adminemail" id="adminemail" class="form-control" placeholder="New Admin Email" required>
                              <br>
                              <label for="">New Admin Password</label>
                              <br>
                              <input type="text" name="adminpsw" id="adminpsw" class="form-control" onmouseover="this.type='text'"
                              onmouseout="this.type='password'" placeholder="New Admin Password" required>
                              <br>
                              <button type="submit" class="btn btn-warning btn_index" id="btnadmin" name="btnadmin">Save Changes</button>
                              <button type="reset" class="btn">Clear</button>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <b><span>Admin Names</span></b>
                                    </td>
                                    <td>
                                        <b><span>Admin Emails</span></b>
                                    </td>
                                    <td>
                                        <b><span>Setting</span></b>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                        
                                    $selectcate = "SELECT * FROM admin";
                                    $selectcategory = mysqli_query($conn, $selectcate);
    
                                    while( $row = mysqli_fetch_assoc($selectcategory) ){
                                        echo "<tr>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td><a href='admindel.php?id={$row['email']}'><span>Delete</span></a></td>
                                        </tr>\n";
                                    }
                                
                                ?>

                            </tbody>
                        </table>
                        
                      </div>
                        
                      </div>

                  </div>
            </div>

        </div>
    </body>

</html>

