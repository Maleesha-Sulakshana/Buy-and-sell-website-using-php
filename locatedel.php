<?php
include_once('db.php');

$locat = $_GET['id'];

if($locat != null){

  $sql = "DELETE FROM location WHERE distric = '$locat'";
  $result = mysqli_query($conn, $sql);
    if($result){

        ?>
        
            <!-- <script>
                alert("Location deleted successfully");
            </script> -->

        <?php
            header("location: admin.php");
    }else{
    
        ?>
            
            <!-- <script>
                alert("Location deleted un-successfully");
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