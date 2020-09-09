<?php
include_once('db.php');
session_start();

$null = null;
$id_email = $_SESSION['UserEmail'];

if($id_email != null){

  $sql = "UPDATE users SET image = '$null' WHERE email = '$id_email'";
  $result = mysqli_query($conn, $sql);
    if($result){

        ?>
        
            <!-- <script>
                alert("Your profile picture removed successfully");
            </script> -->

        <?php
            header("location: profile.php");
    }else{
    
        ?>
            
            <!-- <script>
                alert("Your profile picture removed un-successfully");
            </script> -->
    
        <?php
        
        header("location: profile.php");
    }
    
    
}else{
    
    ?>
        
        <!-- <script>
            alert("Error occurd");
        </script> -->

    <?php
    
    header("location: profile.php");
}

?>