<?php
include_once('db.php');

$categ = $_GET['id'];

if($categ != null){

  $sql = "DELETE FROM category WHERE category = '$categ'";
  $result = mysqli_query($conn, $sql);
    if($result){

        ?>
        
            <!-- <script>
                alert("Category deleted successfully");
            </script> -->

        <?php
            header("location: admin.php");
    }else{
    
        ?>
            
            <!-- <script>
                alert("Category deleted un-successfully");
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