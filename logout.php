<?php
// ログインユーザのみが処理可能
session_start();
if (isset($_SESSION['is_logged_in'])) {
    $_SESSION = array();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウトしました</title>
</head>
<body>
    <p>ログアウトしました。5秒後にトップページに戻ります。</p>
    <script lang="javascript">
        let goTop = () => {
            window.location.href = 'index.php'
        }
        setTimeout(goTop,5000)
    </script>
</body>
</html>