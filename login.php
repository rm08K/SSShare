<?php
// ログインユーザのみが処理可能
session_start();
if (isset($_SESSION['is_logged_in'])) {
    header('Location: mypage.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<html>

<body>
    <div class="container">
        <div class="inContainer">
            <h3>ログイン</h3>
            <form action="logindata.php" method="POST">
                <div>
                    <label>
                        <input class="login-input" type="text" name="login_id" placeholder="ログインID" />
                    </label>
                </div>
                <div>
                    <label>
                        <input class="login-input" type="password" name="password" placeholder="パスワード" />
                    </label>
                </div>
                <div>
                    <button class="login-button">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>