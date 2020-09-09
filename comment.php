<?php

    include_once('db.php');
    session_start();

    if(isset($_POST['addcomment'])){

        $comment = $_POST['txtcomment'];
        $email = $_SESSION['UserEmail'];


        if($comment != null && $email != null){

            $sddcomment = "INSERT INTO comments (name, comment) VALUES ('$email','$comment')";
            $result = mysqli_query($conn, $sddcomment);
            if($result){

                ?>
                    <!-- <script>
                        alert("Your comment added.");
                    </script> -->
                <?php
                header("location: other.php");

            }else{

                ?>
                    <!-- <script>
                        alert("Your comment not added.");
                    </script> -->
                <?php
                header("location: other.php");

            }

        }else{

            ?>
                <!-- <script>
                    alert("Please enter comment.");
                </script> -->
            <?php
            header("location: other.php");

        }

    }

?>