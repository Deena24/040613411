<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบผู้ใช้นี้ " + username);
            if (ans==true) 
                document.location = "delete6.php?username="+ username;
        }
    </script>
</head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "username : " . $row ["username"] . "<br>";
        echo "ที่อยู่ : " . $row ["address"] . "<br>";
        echo "เบอร์ : " . $row ["mobile"] . "<br>";
        echo "อีเมลล์ : " . $row ["email"] . "<br>";
        echo "<a href='editform.php?username=" . $row ["username"] . "'>แก้ไข</a> | ";
        echo "<a href='#' onclick='confirmDelete(\"" . $row ["username"] . "\")'>ลบ</a>";
        echo "<hr>\n";
    }
?>
</body>
</html>