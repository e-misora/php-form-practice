<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録 (2/3) 確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <form action="complete.php" method="post">
    <table>
        <tr>
            <th>お名前</th>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?></td>
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, "UTF-8"); ?>歳</td>
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
        </tr>
    </table>
    <div>
        <a href="input.php">戻る</a>
        <button type="submit">登録する</button>
    </div>
    </form>
</body>
</html>
