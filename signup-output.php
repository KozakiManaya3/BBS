<?php
    $pdo = new PDO('mysql:host=mysql320.phy.lolipop.lan; dbname=LAA1553893-bbs;','LAA1553893','Bbspass');
    $sql = $pdo->prepare('insert into user values (?, ?)');
    $sql->execute([$_REQUEST['name'], $_REQUEST['pass']]);
    header("Location: login.php");
?>