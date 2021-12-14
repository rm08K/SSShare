<?php
session_start();
$login_id = $_POST['login_id'];
$password = $_POST['password'];
if ($login_id == 'admin' && $password == 'password') {
    // ユーザが存在したので、
    // セッションにログイン済みであることを示すデータを入れておく
    // このデータが有ることで"ログイン済み"とみなす
    session_regenerate_id();
    $_SESSION['is_logged_in'] = TRUE;

    // ログイン処理が終わったので index.php に飛ばす
    header("Location: index.php");
} else {
    // ログイン失敗
    echo 'ログインID、またはパスワードが一致しません。';
    include_once('login.php');
}
