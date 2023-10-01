<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("UPDATE member SET name=?, address=?, mobile=?, email=? WHERE username=?");
    $stmt->bindParam(1, $_POST["name"]);
    $stmt->bindParam(2, $_POST["address"]);
    $stmt->bindParam(3, $_POST["mobile"]);
    $stmt->bindParam(4, $_POST["email"]);
    $stmt->bindParam(5, $_POST["username"]);
if ($stmt->execute()){
    echo "แก้ไขสมาชิก " . $_POST["name"] . " สำเร็จ";
}
?>