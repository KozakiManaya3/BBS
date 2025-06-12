<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>一言掲示板 - 投稿</title>
</head>
<body>
    <div class='center'>
    <h1>💬 一言掲示板</h1>
    <p>ようこそ、<?= $_SESSION['customer']['username'] ?>さん</p>
    </div>
    <form action="post.php" method="post">       
        <p>コメント：<br>
        <textarea name="comment" rows="4" cols="40" required></textarea></p>
        <div class="center">
        <p><button type="submit">投稿する</button></p>
        </div>
    </form>
    <div class='center'>
    <p><a href="view.php">▶ 投稿一覧を見る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
    </div>
</body>
</html>
