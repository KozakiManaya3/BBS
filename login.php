<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>

<body>
    <h1>ログイン</h1>
    <form action="check.php" method="post">
        <p>ユーザー名：<input type="text" name="name"></p>
        <p>パスワード：<input type="password" name="pass"></p>
        <input type="submit" value="ログイン">
        <p><?= $_SESSION['login-msg']; ?></p>
    </form>
</body>

</html>