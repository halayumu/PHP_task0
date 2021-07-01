<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <form action="complete.php" method="POST" class="m-5 w-25">
        <h3 id="name">会員登録</h3>
        <table border="1" class="table table-bordered text-center">
            <tr>
                <th class="bg-warning">氏名</th>
                <td><input type="text" name="name" value="" /><br></td>
            </tr>
            <tr>
                <th class="bg-warning">年齢</th>
                <td><input type="text" name="age" value="" /><br></td>
            </tr>
        </table>
        <input type="submit" value="新規登録" />
    </form>