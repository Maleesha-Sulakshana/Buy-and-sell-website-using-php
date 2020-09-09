<?php
    require_once('db.php');
    session_start();

    if(isset($_POST['btnpropic'])){
        
        $id_email = $_SESSION['UserEmail'];
        $name = $_FILES['imgpic']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["imgpic"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        
            // Insert record
            $query = "UPDATE users SET image = '$name'  WHERE email = '$id_email'";
            mysqli_query($conn,$query);
        
            // Upload file
            move_uploaded_file($_FILES['imgpic']['tmp_name'],$target_dir.$name);

            header("location: profile.php");

        }else{

            header("location: profile.php");

        }
        
    }
?>