<?php
// ログインユーザのみが処理可能
session_start();
if (isset($_SESSION['is_logged_in'])) {
    header('Location: mypage.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<body>
    <h3>ログイン</h3>
    <form action="logindata.php" method="POST">
        <div>
            <label>ログインID
                <input type="text" name="login_id" />
            </label>
        </div>
        <div>
            <label>パスワード
                <input type="password" name="password" />
            </label>
        </div>
        <div>
            <button>ログイン</button>
        </div>
    </form>
</body>

</html>