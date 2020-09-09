<?php
include_once('db.php');

$itemdel = $_GET['id'];

if($itemdel != null){

  $sql = "DELETE FROM items WHERE id = '$itemdel'";
  $result = mysqli_query($conn, $sql);
    if($result){

        ?>
        
            <!-- <script>
                alert("Your Item deleted successfully");
            </script> -->

        <?php
            header("location: profile.php");
    }else{
    
        ?>
            
            <!-- <script>
                alert("Your Item deleted un-successfully");
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