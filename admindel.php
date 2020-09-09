<?php
include_once('db.php');

$admin = $_GET['id'];

if($admin != null){

  $sql = "DELETE FROM admin WHERE email = '$admin'";
  $result = mysqli_query($conn, $sql);
    if($result){

        ?>
        
            <!-- <script>
                alert("Admin deleted successfully");
            </script> -->

        <?php
            header("location: admin.php");
    }else{
    
        ?>
            
            <!-- <script>
                alert("Admin deleted un-successfully");
            </script> -->
    
        <?php
        
        header("location: admin.php");
    }
    
    
}else{
    
    ?>
        
        <!-- <script>
            alert("Error occurd");
        </script> -->

    <?php
    
    header("location: admin.php");
}

?>