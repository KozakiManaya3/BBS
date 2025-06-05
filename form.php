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
    <p>ようこそ、<?= $_SESSION['customer']['name'] ?>さん</p>
    <form action="post.php" method="post">
</div>       
<div class='left'>
        <p>名前：<input type="text" name="name" required></p>
        <p>コメント：<br>
</div>
        <textarea name="comment" rows="4" cols="40" required></textarea></p>
        <p><button type="submit">投稿する</button></p>
    </form>
    <p><a href="view.php">▶ 投稿一覧を見る</a></p>
</body>
</html>
