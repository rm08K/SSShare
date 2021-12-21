<?php
// ログインユーザのみが処理可能
session_start();
if (!isset($_SESSION['is_logged_in'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="mypageBar">
    <h3>スクリーンショット一覧</h3>
    <div class="mypage-menu">
        <a href="register.php">新規投稿</a>
        <a href="logout.php">ログアウト</a>
    </div>
    </div>
    <?php
    $files = glob('data/*.json');
    ?>
    <ul class="mypage-list">
        <?php foreach ($files as $file) { ?>
            <?php
            $filebase = basename($file, '.json');
            $json_str = file_get_contents($file);
            $json = json_decode($json_str, TRUE);
            $title = $json['title'];
            $image = $json['image'];
            $date = date('Y/m/d H:i:s', $json['date']);
            ?>
            <li class="mypage-list_items">
                <a href="show.php?id=<?= $filebase ?>"><br>
                    <img class="mypage-image" src="<?= htmlspecialchars($image, ENT_QUOTES) ?>" alt=""><br>
                    <p><?= htmlspecialchars($title, ENT_QUOTES) ?></p>
                    <small><?= htmlspecialchars($date, ENT_QUOTES) ?></small>
                </a>
                <!-- <a href="update_form.php?id=<?= $filebase ?>">更新</a> -->
            </li>
        <?php } ?>
    </ul>

</body>

</html>