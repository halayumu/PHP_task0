<?php
//ーーーーーーーーーーーーーーーーーーーーーーーーーsqlスタート接続ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
$link = @mysqli_connect('localhost', 'root', '', 'ph23_sample');
//文字設定
mysqli_set_charset($link, 'utf8');

//index.php値をDB追加
$insert = "INSERT INTO sample (name , age) VALUES ('" . $_POST['name'] . "' , " . $_POST['age'] . ")";

//idとnameとage
$select = "SELECT id,name,age FROM sample";

//データベースの値を抽出
mysqli_query($link, $insert);

$id = mysqli_insert_id($link);

$result = mysqli_query($link, $select);
//ーーーーーーーーーーーーーーーーーーーーーーーーーーーsql終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
mysqli_close($link);

require_once './tpl/complete.php';
