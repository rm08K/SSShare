<?php
  if ( !isset($_GET['id']) ) {
    header('Location: index.php');
    exit();
  }

  $filebase = basename($_GET['id'], '.json');
  $filename = "data/${filebase}.json";
  if ( !file_exists($filename) ) {
    echo 'データが見つかりません。';
    http_response_code(404);
    exit();
  }

  $json_str = file_get_contents($filename);
  $json = json_decode($json_str, TRUE);
  $title = $json['title'];
  $image_url = $json['image'];
  $date = date('Y/m/d H:i:s', $json['date']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= htmlspecialchars($title) ?> - SSShare</title>
</head>
<body>
  <div class="showpage">
    <div class="showpage-imgbox">
      <img src="<?= $image_url ?>" style="width: 100%" /><br />
    </div>
    <div class="showpage-flexbox">
      <h3><?= htmlspecialchars($title) ?></h3>
      <p><?= $date ?></p>
      <a class="showpage-backbutton" href="mypage.php">戻る</a>
    </div>
  </div>
</body>
</html>
