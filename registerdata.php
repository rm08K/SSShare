<?php

session_start();
if (!isset($_SESSION['is_logged_in'])) {
  header('Location: login.php');
  exit();
}

$token = $_POST['token'];
if ($_SESSION['token'] != $token) {
  echo '予期せぬリクエストです。';
  include_once('register.php');
  exit();
}

$title = $_POST['title'];
$image = $_FILES['image'];
$filebase = date('YmdHis');
$filename = "data/${filebase}.json";
$img_path = "data/${filebase}";

move_uploaded_file($image['tmp_name'], $img_path);
$json = [
  "title" => $title,
  "image" => $img_path,
  "date" => time()
];
if (($fp = fopen($filename, 'wb')) != FALSE) {
  fwrite($fp, json_encode($json));
  fclose($fp);
}

header("Location: mypage.php");
