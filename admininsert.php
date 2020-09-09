<?php
    require_once('db.php');
    session_start();

?>

<!-- For add location -->
<?php

if(isset($_POST['addlocations'])){

    $locat = $_POST['namelocation'];

    $checklocat = "SELECT * FROM location WHERE distric ='$locat'";
    $check1 = mysqli_query($conn, $checklocat);

    if(mysqli_fetch_assoc($check1)){

        ?>
            <!-- <script>
                alert("This location has already entered.");
            </script> -->
        <?php
        header("location: admin.php");


    }else{

        $addlocat = "INSERT INTO location (distric) VALUES ('$locat')";
        $resultlocat = mysqli_query($conn, $addlocat);
        if($resultlocat){

            ?>
                <!-- <script>
                    alert("Location add success.");
                </script> -->
            <?php
            header("location: admin.php");


        }else{

            ?>
                <!-- <script>
                    alert("Location add failed.");
                </script> -->
            <?php
            header("location: admin.php");


        }
    }
}

?>

<!-- For add category -->
<?php

if(isset($_POST['btncategory'])){

    $category = $_POST['namecategory'];

    $checkcat = "SELECT * FROM category WHERE category ='$category'";
    $check2 = mysqli_query($conn, $checkcat);

    if(mysqli_fetch_assoc($check2)){

        ?>
            <!-- <script>
                alert("This category has already entered.");
            </script> -->
        <?php
        header("location: admin.php");

    }else{

        $addcat = "INSERT INTO category (category) VALUES ('$category')";
        $resultcat = mysqli_query($conn, $addcat);
        if($resultcat){

            ?>
                <!-- <script>
                    alert("category add success.");
                </script> -->
            <?php
            header("location: admin.php");

        }else{

            ?>
                <!-- <script>
                    alert("category add failed.");
                </script> -->
            <?php
            header("location: admin.php");

        }
    }
}

?>

<!-- For add admin -->
<?php

if(isset($_POST['btnadmin'])){

    $email = $_POST['adminemail'];
    $name = $_POST['adminname'];
    $psw = $_POST['adminpsw'];

    $checkadmin = "SELECT * FROM admin WHERE email ='$email'";
    $check3 = mysqli_query($conn, $checkadmin);

    if(mysqli_fetch_assoc($check3)){

        ?>
            <!-- <script>
                alert("This admin email has already entered.");
            </script> -->
        <?php
        header("location: admin.php");

    }else{

        $addadmin = "INSERT INTO admin (email,name,psw) VALUES ('$email','$name','$psw')";
        $resultadmin = mysqli_query($conn, $addadmin);
        if($resultadmin){

            ?>
                <!-- <script>
                    alert("Admin add success.");
                </script> -->
            <?php
            header("location: admin.php");

        }else{

            ?>
                <!-- <script>
                    alert("Admin add failed.");
                </script> -->
            <?php
            header("location: admin.php");

        }
    }
}

?>