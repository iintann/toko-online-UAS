<?php 

session_start();

session_destroy();

 echo "<script>alert('anda telah keluar');</script>";
 echo "<script>location='login.php';</script>";

?>