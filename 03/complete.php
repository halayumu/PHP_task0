<?php
session_start();
//ーーーーーーーーーーーーーーーーーーーーーーーーーsqlスタート接続ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
$link = @mysqli_connect('localhost', 'root', '', 'ph23_sample');
//文字設定
mysqli_set_charset($link, 'utf8');

//index.php値をDB追加
$insert = "INSERT INTO sample (name , age) VALUES ('" . $_POST['name'] . "' , " . $_POST['age'] . ")";


//データベースの値を抽出
mysqli_query($link, $insert);

$id = mysqli_insert_id($link);

mysqli_close($link);

$member = [
    'id' => $id,
    'name' => $_POST['name'],
    'age' => $_POST['age']
];

$_SESSION['member'] = $member;


header('location:./complete2.php?');
exit;
