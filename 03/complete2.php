<?php
session_start();
//ーーーーーーーーーーーーーーーーーーーーーーーーーsqlスタート接続ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
$link = @mysqli_connect('localhost', 'root', '', 'ph23_sample');
//文字設定
mysqli_set_charset($link, 'utf8');

//idとnameとage
$select = "SELECT id,name,age FROM sample";

$result = mysqli_query($link, $select);
//ーーーーーーーーーーーーーーーーーーーーーーーーーーーsql終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
mysqli_close($link);

$member = $_SESSION['member'];

require_once './tpl/complete.php';
