<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
   $stmt = $pdo->prepare("SELECT * FROM member WHERE num = ?");
   $stmt->bindParam(1, $_GET["num"]);
   $stmt->execute(); 
   $row = $stmt->fetch();
?>
<div style="display:flex">
    <div style="padding: 15px">
        ชื่อสมาชิก : <?=$row ["username"]?><br>
        รหัสผ่าน : <?=$row ["password"]?><br>
        ชื่อ-นามสกุล : <?=$row ["name"]?><br>
        ที่อยู่ : <?=$row ["address"]?><br>
        เบอร์โทร : <?=$row ["mobile"]?><br>
        อีเมล์ : <?=$row ["email"]?><br>
    </div>
</div>
</body>
</html>