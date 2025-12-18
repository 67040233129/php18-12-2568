<?php
// home.php
srssion_start();

if(lisset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
echo "ยินดีต้อนรับ". $_SESSION['username'];
?>
<br>
<a href ="logout.php">Logout</a>