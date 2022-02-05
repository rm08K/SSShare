<?php
  // ログインユーザのみがアクセス可能
  session_start();
  if ( !isset($_SESSION['is_logged_in']) ) {
    header('Location: login.php');
    exit();
  }

  // CSRF 対策
  $token = bin2hex(random_bytes(32));
  $_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SS投稿 - SSShare</title>
</head>
<body>
  <div class="register">
    <h3>SS投稿</h3>
    <form action="registerdata.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="token" value="<?= $token ?>" />
      <div class="register-label">
        <label>ゲームタイトル</label>
        <input type="text" name="title" />
      </div>
      <div class="register-label">
        <label>スクリーンショット選択</label>
        <input type="file" name="image" />
      </div>
      <div>
      </div>
      <div class="resister-buttonContainer">
        <button class="button resister-button">登録</button>
      </div>
    </form>
  </div>
</body>
</html>
