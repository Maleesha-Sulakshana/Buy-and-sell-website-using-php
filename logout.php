<?php
session_start();

session_unset();

session_destroy();

// $_SESSION['UserEmail'] = null;

header("location: index.php");
?>