<?php
session_start();
$login_id = $_POST['login_id'];
$password = $_POST['password'];
if ($login_id == 'admin' && $password == 'password') {
    session_regenerate_id();
    $_SESSION['is_logged_in'] = TRUE;
    header("Location: mypage.php");
} else {
    // ログイン失敗
    echo 'ログインID、またはパスワードが一致しません。';
    include_once('login.php');
}
