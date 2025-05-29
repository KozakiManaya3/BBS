<?php session_start(); ?>
<?php
unset($_SESSION['customer']);
$pdo = new PDO('mysql:host=mysql320.phy.lolipop.lan; dbname=LAA1553893-bbs;','LAA1553893','Bbspass');
$sql = $pdo->prepare('select * from user where username=? and password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['pass']]);
foreach ($sql as $row) {
    $_SESSION['customer'] = [
        'id' => $row['id'],
        'name' => $row['username']
    ];
}
if (isset($_SESSION['customer'])) {
    unset($_SESSION['login-msg']);
    header("Location: form.php");
} else {
    $_SESSION['login-msg'] = "ログイン名またはパスワードが違います。";
    header("Location: login.php");
}
?>