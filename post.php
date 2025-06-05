<?php
$name = htmlspecialchars($_POST['name'] ?? '名無し');
$comment = htmlspecialchars($_POST['comment'] ?? '');
$time = date('Y-m-d H:i:s');

if (trim($comment) === '') {
    header("Location: form.php");
    exit;
}

try {
    $pdo=new PDO('mysql:host=mysql320.phy.lolipop.lan;
                dbname=LAA1553893-bbs;',
        'LAA1553893',
        'Bbspass');

    $stmt = $pdo->prepare("INSERT INTO comment (name, comment, created_at) VALUES (:name, :comment, :created_at)");
    $stmt->execute([
        ':name' => $name,
        ':comment' => $comment,
        ':created_at' => $time
    ]);

    header("Location: view.php");
    exit;

} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
    exit;
}

// $entry = "$time\t$name\t$comment\n";
// file_put_contents('comments.txt', $entry, FILE_APPEND);
// header("Location: view.php");
// exit;
?>