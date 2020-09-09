<?php
    require_once('db.php');
    session_start();

    if($_SESSION['UserEmail'] == null){

        header("location: index.php");

    }

    // $session = $_SESSION['UserEmail'];
    // $_SESSION['UserEmail'] = $session;

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E Buy & Sell | User-Profile</title>
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
        <link rel="stylesheet" href="./css/custom/profile.css">

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css" /> 
        <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" /> 
        
        <!-- Jquery -->
        <script src="./js/jquery.js"></script>   

        <!-- Bootstrap js -->
        <script src="./bootstrap-3.3.7-dist/js/bootstrap.js"></script>  
        <!-- <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>   -->

        <!-- Custom js -->
        <script src="./js/main.js"></script>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

        <script>
            $('.file-upload').file_upload();
        </script>

    </head>

    <body>

        <section class="sec-one">
            <!-- Box - 1 float left -->
            <div class="box-1">
                <div class="nav-brand">
                    <a href="index.php" class="text-gray"><span>E</span> - Buy & Sell</a>
                    <h4><i class="fas fa-user"></i>&nbsp;User Profile</h4>
                </div>
                <!-- <a href="#" data-toggle="modal" data-target="#profileImg"><img src="./images/my.jpg" alt=""></a>
                <div class="details"> -->

                    <?php

                        $id_email = $_SESSION['UserEmail'];
                        $selectcate = "SELECT * FROM users WHERE email = '$id_email'";
                        $selectcategory = mysqli_query($conn, $selectcate);

                        
        
                        while( $row = mysqli_fetch_assoc($selectcategory) ){

                            if($row['image'] == null){
                                ?>
                                <a href="#" data-toggle="modal" data-target="#profileImg" ><i class="fas fa-portrait" style="font-size:1000%; margin-left:35%; margin-right:35%; margin-top: 10%; color:#555;"></i></a>
                                <?php
                            }

                            echo "
                            <a href='' data-toggle='modal' data-target='#profileImg'><img src='./images/{$row['image']}' alt=''></a>
                            <div class='details'>
                            <h4 >First Name :</h4>
                            <h4 id='fname'><span>{$row['fname']}</span></h4>
                            <h4>Last Name :</h4>
                            <h4 id='lname'><span>{$row['lname']}</span></h4>
                            <h4>Email :</h4>
                            <h4 id='email'><span>{$row['email']}</span></h4>
                            </div>";
                        }

                    ?>

                <!-- </div> -->
            </div>

            <!-- Nav-bar -->
            <div class="sticky-top nav">
                <ul>
                    <li><a href="index.php"><i class="fas fa-ad"></i>&nbsp;&nbsp;All Ads</a></li>
                    <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Log Out</a></li>
                    <li style="float:right"><a class="active" href="other.php"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Other</a></li>
                  </ul>
            </div>

            <!-- Box - 2 float right -->
            <div class="box-2">
                <div class="account-tab">
                    <div class="header">
                        <h3><span><i class="fas fa-edit"></i></span>&nbsp;Edit Your Profile</h3><br/>
                    </div>
                    <div class="edit-profile">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#account-eatils"><span><i class="fa fa-info-circle"></i></span>&nbsp; Account Details</a></li>
                            <li><a data-toggle="tab" href="#change-psw"><span><i class="fa fa-key"></i></span>&nbsp; Change Password</a></li>
                          </ul>
                        
                          <div class="tab-content tabs">
                            <div id="account-eatils" class="tab-pane fade in active">
                              <h3>Account Details</h3>

                              <div class="details">
                                  <form action="profileupdate.php" method="post">
                                        <label for="">First Name</label>
                                        <br>
                                        <input type="text" name="txtfname" id="txtfname" class="form-control" placeholder="Fist Name" required>
                                        <br>
                                        <label for="">Last Name</label>
                                        <br>
                                        <input type="text" name="txtlname" id="txtlname" class="form-control" placeholder="Last Name" required>
                                        <br>
                                        <button type="submit" class="btn btn-warning btn_index" id="btnaccupdate" name="btnaccupdate">Save Changes</button>
                                        <button type="reset" class="btn">Clear</button>
                                  </form>
                              </div>
                              
                            </div>
                            <div id="change-psw" class="tab-pane fade">
                              <h3>Change Password</h3>

                              <div class="change-psw">
                                <form action="profile.php" method="post">
                                      <label for="">Current Password</label>
                                      <br>
                                      <input type="text" name="txtcpsw" id="txtcpsw" class="form-control" placeholder="Current Password" onmouseover="this.type='text'"
                                      onmouseout="this.type='password'" required>
                                      <br>
                                      <label for="">New Password</label>
                                      <br>
                                      <input type="text" name="txtnpsw" id="txtnpsw" class="form-control" placeholder="New Password" onmouseover="this.type='text'"
                                      onmouseout="this.type='password'" required>
                                      <br>
                                      <label for="">Re-Enter New Password</label>
                                      <br>
                                      <input type="text" name="txtrnpsw" id="txtrnpsw" class="form-control" placeholder="Re-Enter New Password" onmouseover="this.type='text'"
                                      onmouseout="this.type='password'" required>
                                      <br>
                                      <button type="submit" class="btn btn-warning btn_index" id="btnpswupdate" name="btnpswupdate">Save Changes</button>
                                      <button type="reset" class="btn">Clear</button>
                                </form>
                            </div>
                              
                            </div>
                          </div>
                    </div>
                </div>

                <!-- For devide -->
                <hr>

                <div class="advertisment-tab">
                    <div class="header">
                        <h3><span><i class="fas fa-ad"></i></span>&nbsp;Advertisment</h3><br/>
                    </div>
                    <div class="advertisments">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#new-ads"><span><i class="fas fa-plus-square"></i></span>&nbsp; Add New Advertisment</a></li>
                            <li><a data-toggle="tab" href="#view-ads"><span><i class="fas fa-eye"></i></span>&nbsp; View Your Advertisments</a></li>
                          </ul>
                        
                          <div class="tab-content tabs">
                            <div id="new-ads" class="tab-pane fade in active">
                              <h3>Add New Advertisment</h3>

                              <div class="new-ads">
                                  <form action="addadvertisment.php" method="post" enctype='multipart/form-data'>
                                        <label for="">Advertisment Subject</label>
                                        <br>
                                        <input type="text" name="txtsub" id="txtsub" class="form-control" maxlength="80" placeholder="Advertisment Subject" required>
                                        <br>

                                        <label for="">Category</label>
                                        <br>
                                        <select id="category" name="category" class="form-control">

                                        <?php
                            
                                            $selectcat = "SELECT category FROM category";
                                            $selectcategory = mysqli_query($conn, $selectcat);

                                            while( $row = mysqli_fetch_assoc($selectcategory) ){
                                                echo "<option value='{$row['category']}'>{$row['category']}</option>\n";
                                            }

                                        ?>

                                        </select>
                                        <br>
                                        <label for="">Location - Distric</label>
                                        <br>
                                        <select id="location" name="location" class="form-control">

                                        <?php
                            
                                            $selectlocat = "SELECT distric FROM location";
                                            $selectlocation = mysqli_query($conn, $selectlocat);

                                            while( $row = mysqli_fetch_assoc($selectlocation) ){
                                                echo "<option value='{$row['distric']}'>{$row['distric']}</option>\n";
                                            }

                                        ?>

                                        </select>
                                        
                                        <br>
                                        <label for="">Price (Rs) </label>
                                        <br>
                                        <input type="text" name="txtprice" id="txtprice" class="form-control" placeholder="Price (Rs)" required>
                                        <br>
                                        <label for="">Discription</label>
                                        <br>
                                        <textarea name="txtdesc" id="txtdesc" class="form-control" placeholder="Discription" rows="10" required></textarea>
                                        <br>
                                        <label for="">Contact Number </label>
                                        <br>
                                        <input type="text" name="txttp" id="txttp" class="form-control" placeholder="Contact Number" maxlength="10" required>
                                        <br>
                                        <label for="">Add Cover Image</label>
                                        <br>
                                        <input type="file" id="coverfiles" name="coverfiles" class="form-control-file" required>
                                        <br>
                                        <label for="">Add Image For Advertisment</label>
                                        <br>
                                        <input type="file" id="imgfiles" name="imgfiles[]" class="form-control-file" multiple >
                                        <br>
                                        <button type="submit" class="btn btn-warning btn_index" id="addnewad" name="addnewad">Add Advertisment</button>
                                        <button type="reset" class="btn">Clear</button>
                                  </form>
                              </div>
                              
                            </div>
                            <div id="view-ads" class="tab-pane fade">
                              <h3>View Your Advertisments</h3>

                              <div class="view-ads">
                                <!-- <form action=""> -->
                                      <table>
                                          <thead>

                                          </thead>
                                          <tbody>

                                            <?php
                                                $id_email = $_SESSION['UserEmail'];
                                                $selectitem = "SELECT * FROM items WHERE email = '$id_email' ORDER BY oderby DESC";
                                                $selectitems = mysqli_query($conn, $selectitem);
                            
                                                while( $row = mysqli_fetch_assoc($selectitems) ){

                                                    // $itemid = $row['id'];

                                                    echo "<tr>
                                                        <td>
                                                            <a href='item.php?id={$row['id']}'>
                                                                <div class='items'>
                                                                    <div class='items-img'>
                                                                        <img src='./images/{$row['image']}' alt=''>
                                                                    </div>
                                                                    <div class='items-detail'>
                                                                        <h3>{$row['subject']}</h3>
                                                                        <h4>{$row['category']} &nbsp;&nbsp;<span> {$row['location']} </span></h4>
                                                                        <h4><span>Rs </span> {$row['price']} </h4>
                                                                        <h4><span>Contact Number </span> {$row['tp_number']} </h4>
                                                                        <h5>Published Date : {$row['date_time']}</h5>
                                                                        <br/>
                                                                        <a href='itemdel.php?id={$row['id']}' class='btn btn-block btn-warning'>Delete Ad</a>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>\n";
                            
                                                }
                            
                                            ?>

                                            <!-- <tr>
                                                <td>
                                                    <a href="">
                                                        <div class="items">
                                                            <div class="items-img">
                                                                <img src="./images/axio1.jpg" alt="">
                                                            </div>
                                                            <div class="items-detail">
                                                                <h3>Toyota Axio 2012</h3>
                                                                <h4>Car &nbsp;&nbsp;<span> Colombo </span></h4>
                                                                <h4><span>Rs </span> 3500000 </h4>
                                                                <h5>Published Date : 04-05-2020</h5>
                                                                <br/>
                                                                <a href="delete.jsp?id=<%=postid%>" class="btn btn-block btn-warning">Delete Ad</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr> -->
                                            
                                          </tbody>
                                          <tfoot>

                                          </tfoot>
                                      </table>
                                <!-- </form> -->
                            </div>
                              
                            </div>
                          </div>
                    </div>
                </div>

            </div>
        </section>
        
    </body>

</html>

<!-- Profile image choosen -->
<div id="profileImg" class="modal fade" role="dialog">  
    <div class="modal-dialog">  
 <!-- Modal content-->  
         <div class="modal-content">  
              <div class="modal-header">  
                   <button type="button" class="close" data-dismiss="modal">&times;</button>  
                   <h4 class="modal-title"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;Choose Image For Profile Picture</h4>  
              </div>  
              <div class="modal-body">  
                    <label>Choose Image</label><br/>
                    <form action="profilepic.php" method="post"  enctype='multipart/form-data'>
                        <input type="file" id="imgpic" name="imgpic" class="btn btn_index" required><br/>
                        <input type="submit" class="btn btn-warning btn_index" id="btnpropic" name="btnpropic"><br>
                    </form>
                    <br>
                    <span><a href="removepropic.php" style="text-decoration:none; font-size:1.6rem; color:#000;">&nbsp;Remove your profile picture</a></span>

                    <hr/>
                   <label>&#9400;&nbsp;<Span>E</Span>-Buy & Sell | Group 34</label>
            </div>  
         </div>  
    </div>  
</div>  

<?php

    if(isset($_POST['btnpswupdate'])){

        $id_email = $_SESSION['UserEmail'];
        $cpsw = $_POST['txtcpsw'];
        $npsw = $_POST['txtnpsw'];
        $nrpsw = $_POST['txtrnpsw'];

        $checkreg = "SELECT * FROM users WHERE email ='$id_email' and psw ='$cpsw'";
        $check = mysqli_query($conn, $checkreg);

        if(mysqli_fetch_assoc($check)){

            if($npsw == $nrpsw){

                $reg = "UPDATE users SET psw = '$npsw' WHERE email = '$id_email'";
                $result = mysqli_query($conn, $reg);
                if($result){

                    ?>
                        <!-- <script>
                            alert("Password change success.");
                        </script> -->
                    <?php

                }else{

                    ?>
                        <!-- <script>
                            alert("Password change failed. Try again.");
                        </script> -->
                    <?php
                }

            }
            else{

                ?>
                    <!-- <script>
                        alert("Re enter password not matched.");
                    </script> -->
                <?php

            }

        }else{

            ?>
                <!-- <script>
                    alert("Not matched your current password.");
                </script> -->
            <?php
        }

    }

?>