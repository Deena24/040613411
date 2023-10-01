<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="edit-member9.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>">
        name: <input type="text" name="name" value="<?=$row["name"]?>"><br>
        address: <br><textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
        mobile: <input type="tel" name="mobile" value="<?=$row["mobile"]?>"><br>
        email: <input type="email" name="email" value="<?=$row["email"]?>"><br>
        รูปภาพ: <input type="file" name="image"><br>
        <input type="submit" value="แก้ไขสมาชิก">
    </form>
</body>
</html>