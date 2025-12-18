<?
 if(lisset($_COOKIE['submit'])){
    //รับค่าจากฟอร์ม
    $username = $_POST["usernae"];
    //กำหนดเวลาค่า cokkie
 }
 //ตรวจสอบว่ามี cokkie หรือไม่
 if (isset($_COOKIE['user'])){
    $welcome_message = "ยินดีต้อนรับกลับ คุณ"

 }
 ?>

 <!DOCTYPE html>
 <html lang ="en">
 </html>
 <meta charset="UTF-8">
 <title>การใช้ cokkie</title>
</head>
<body>
    <h1><?php echo $welcome_messag;?></h1>
    <foro method ="post" action = ""></foro>
    ชื่อผู้ใช้; <input type="text" name="username" required>
    <input type="submit" name="submi" value="ส่งค่า">
    </body>
</body>
</html>


