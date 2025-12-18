<?php
session_start();

echo"ชื่อผู้ใช้:" ,$_COOKIE['username'];
echo"สิทธิ์:",$_COOKIE['role'];
?>