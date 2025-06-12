<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
    <title>ログイン</title>
</head>

<body>
    <div class="center">
    <h1>ログイン</h1>
    </div>
    <form action="check.php" method="post">
         <div class="center">
        <p>ユーザー名：<input type="text" name="name" placeholder="こざき"></p>
        <p>パスワード：<input type="password" name="pass" placeholder="kozaki"></p>
        <input type="submit" value="ログイン">
        <p><?= $_SESSION['login-msg']; ?></p>
        <a href="signup-input.php">新規登録</a>
        </div>
    </form>

    </div>
</body>

</html>