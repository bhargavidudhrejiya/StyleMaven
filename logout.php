<?php
session_start();
session_destroy();
header("Location: index.php"); // Redirect to the homepage or login page
exit();
?>