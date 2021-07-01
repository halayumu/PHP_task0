<?php

$text = "プログラミング言語PHP";
// 部分一致
if (preg_match("/プ/", $text)) {
    echo "OK" . "\n";
}
$fp = fopen("Test1.csv", "r");

// ファイルを1行ずつ取得する
while ($line = fgets($fp)) {
    $array[] = $line;
    if (preg_match("/あ/", $text)) {
    }
}
var_dump($array);
// ファイルを閉じる
fclose($fp);
?>

<!DOCTYPE html>
<html lang="jn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>