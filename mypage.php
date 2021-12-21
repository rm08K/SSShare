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
    <h3>スクリーンショット一覧</h3>
    <a href="register.php">新規投稿</a>
    <a href="logout.php">ログアウト</a>
    <?php
    // 記事ファイルの一覧
    $files = glob('data/*.json');
    ?>
    <ul class="mypage-list">
        <?php foreach ($files as $file) { ?>
            <?php
            // JSON 形式を PHP 連想配列に変換(json_decode)
            // XSS の対策に htmlspecialchars をつかう
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