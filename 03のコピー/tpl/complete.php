<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="w-50 mx-auto">
        <p class="h1  mt-3">会員登録</p>
        <p>以下の内容で登録しました。</p>
        <table class="table table-hover table-bordered w-50 text-center">
            <tr>
                <th class="bg-warning">ID</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th class="bg-warning">氏名</th>
                <td><?php echo $_POST['name']; ?>様</td>
            </tr>
            <tr>
                <th class="bg-warning">年齢</th>
                <td><?php echo $_POST['age']; ?>歳</td>
            </tr>
        </table>
        <p class="h2 mt-5">会員一覧</p>
        <table class="table table-hover table-bordered w-80 text-center">
            <tr class="table-warning">
                <th class="w-30">ID</th>
                <th class="w-30">氏名</th>
                <th class="w-30">年齢</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td class="w-15"><?php echo $row['id']; ?></td>
                    <td class="w-15"><?php echo $row['name']; ?>様</td>
                    <td class="w-15"><?php echo $row['age']; ?>歳</td>
                </tr>
            <?php } ?>
        </table>
        <a href="index.php">戻る</a>
    </div>
</body>

</html>