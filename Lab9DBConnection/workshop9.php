<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "username : " . $row ["username"] . "<br>";
        echo "ที่อยู่ : " . $row ["address"] . "<br>";
        echo "เบอร์ : " . $row ["mobile"] . "<br>";
        echo "อีเมลล์ : " . $row ["email"] . "<br>";
        echo "<a href='editform9.php?username=" . $row ["username"] . "'>แก้ไข</a>";
        echo "<hr>\n";
    }
?>
</body>
</html>