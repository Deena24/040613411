<?php
	include "connect.php";
    session_start();
    if (empty($_SESSION["username"]) ) { 
        header("location: login-form.php");
    }
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT role FROM member WHERE username = ?");
    $stmt->bindParam(1, $_SESSION["username"]);
    $stmt->execute();
    $member = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($member["role"] == "admin") {
        $stmt = $pdo->prepare("SELECT product.pname, product.quantity FROM product ");
        $stmt->execute();
    
        while ($row = $stmt->fetch()) {
            echo "ชื่อสินค้า: " . $row ["pname"] . "<br>";
            echo "สินค้าคงเหลือ: " . $row ["quantity"] . "<br>";
            echo "<hr>\n";
        }
    }
?>
</body>
</html>