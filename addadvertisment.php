<!-- For add location -->
<?php

    require_once('db.php');
    session_start();

    if(isset($_POST['addnewad'])){

        $subject = $_POST['txtsub'];
        $category = $_POST['category'];
        $location = $_POST['location'];
        $price = $_POST['txtprice'];
        $desc = $_POST['txtdesc'];
        $tp = $_POST['txttp'];
        $keyid = date("Y/m/d/h:i:sa").$_SESSION['UserEmail'];
        $date = date("Y/m/d");
        // date_default_timezone_set("/New_York");

                 
        $selectlocat = "SELECT oderby from items ORDER BY oderby DESC LIMIT 1";
        $selectlocation = mysqli_query($conn, $selectlocat);

        while( $row = mysqli_fetch_assoc($selectlocation) ){
            $oderb = $row['oderby'];
        }

        // select * from items ORDER BY date_time DESC LIMIT 1
        // $oder = date("Y/m/d\th:i:sa");
        $oder = $oderb + 1;

        $id_email = $_SESSION['UserEmail'];
        $name = $_FILES["coverfiles"]['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["coverfiles"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        
            // Insert record

            $addlocat = "INSERT INTO items (id,email,subject,category,location,price,description,image,date_time,tp_number,oderby) VALUES ('$keyid','$id_email','$subject','$category','$location','$price','$desc','$name','$date','$tp','$oder')";
            // $resultlocat = mysqli_query($conn, $addlocat);
            mysqli_query($conn, $addlocat);
            // if($resultlocat){

            //     header("location: profile.php");

            // }else{

            //     header("location: profile.php");
                
            // }
        
            // Upload file
            move_uploaded_file($_FILES['coverfiles']['tmp_name'],$target_dir.$name);


            // Count total files
            $countfiles = count($_FILES['imgfiles']['name']);
            echo($countfiles);
            // Prepared statement
            // $query = "INSERT INTO images (id,filename) VALUES(?,?)";

            // $statement = $conn->prepare($query);

            // Loop all files
            for($i=0;$i<$countfiles;$i++){
                echo($i);
                // File name
                $filename = $_FILES['imgfiles']['name'][$i];

                // Location
                $target_file = 'images/'.$filename;

                // file extension
                $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
                // $file_extension = strtolower($file_extension);

                // Valid image extension
                $valid_extension = array("png","jpeg","jpg");

                if(in_array($file_extension, $valid_extension)){
                    // echo($i);
                // Upload file
                // if(move_uploaded_file($_FILES['imgfiles']['tmp_name'][$i],$target_file)){

                    // Execute query
                    // $statement->execute(array($keyid,$target_file));
                    $query = "INSERT INTO images (id,filename) VALUES('$keyid','$target_file')";
                    mysqli_query($conn, $query);

                    // if($check){

                    //     echo("success");

                    // }else{

                    //     echo("not");

                    // }

                    // echo($i);
                // }
                }

            }


            header("location: profile.php");

        }else{

            header("location: profile.php");

        }



        // // Count total files
        // $countfiles = count($_FILES['imgfiles']['name']);

        // // Prepared statement
        // $query = "INSERT INTO images (id,filename) VALUES(?,?)";

        // $statement = $conn->prepare($query);

        // // Loop all files
        // for($i=0;$i<$countfiles;$i++){

        //     // File name
        //     $filename = $_FILES['imgfiles']['name'][$i];

        //     // Location
        //     $target_file = 'images/'.$filename;

        //     // file extension
        //     $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        //     $file_extension = strtolower($file_extension);

        //     // Valid image extension
        //     $valid_extension = array("png","jpeg","jpg");

        //     if(in_array($file_extension, $valid_extension)){

        //     // Upload file
        //     if(move_uploaded_file($_FILES['imgfiles']['tmp_name'][$i],$target_file)){

        //         // Execute query
        //     $statement->execute(array($keyid,$target_file));

        //     }
        // }

        // }

        // header("location: profile.php");
        
    }

?>