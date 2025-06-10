<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿一覧</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>📜 投稿一覧</h1>
    <p><a href="form.php">← 投稿フォームへ戻る</a></p>
    <hr>
    <?php

try {
        $pdo=new PDO('mysql:host=mysql320.phy.lolipop.lan;
                    dbname=LAA1553893-bbs;',
                    'LAA1553893',
                    'Bbspass');

        // コメント一覧を取得（最新順）、ユーザー名もJOINで取得
        $sql = "SELECT comment.content, comment.created_at, user.username
                FROM comment
                JOIN user ON comment.user_id = user.id
                ORDER BY comment.created_at DESC";

        $stmt = $pdo->query($sql);
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($comments) === 0) {
            echo "<p>まだ投稿がありません。</p>";
        } else {
            foreach ($comments as $row) {
                $time = htmlspecialchars($row['created_at']);
                $name = htmlspecialchars($row['name']);
                $comment = nl2br(htmlspecialchars($row['comment']));

                echo "<div class='post'>";
                echo "<p><strong>$name</strong> さん ($time)</p>";
                echo "<p>$comment</p>";
                echo "</div><hr>";
            }
        }

    } catch (PDOException $e) {
        echo "<p>データベースエラー: " . htmlspecialchars($e->getMessage()) . "</p>";
    }

    // $filename = 'comments.txt';
    // if (file_exists($filename)) {
    //     $lines = file($filename, FILE_IGNORE_NEW_LINES);
    //     foreach (array_reverse($lines) as $line) {
    //         [$time, $name, $comment] = explode("\t", $line);
    //         echo "<div class='post'>";
    //         echo "<p><strong>$name</strong> さん ($time)</p>";
    //         echo "<p>" . nl2br($comment) . "</p>";
    //         echo "</div><hr>";
    //     }
    // } else {
    //     echo "<p>まだ投稿がありません。</p>";
    // }
    ?>
</body>
</html>
