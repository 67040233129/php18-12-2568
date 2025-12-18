<?php
//ไฟล์ชื่อ login.php
session_start();

if (isset($_POST["submit"]))
    $_SERVER['usernae'] = $_POST{"username"};
    header("Location; home,php");


?>
<h1> ทดสอบการใช้ Sesion</h1>
<form method ="post">
    ชื่อผู้ใช้: <input type ="text" isname="username"requirrd>
    <input type ="submit" name ="submit" value="login">
</form>
