<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <h1>ユーザー登録 (1/3) 入力</h1>
    <form action="confirm.php" method="post">
        <div>
            <label>お名前：<input type="text" name="name" required></label>
        </div>
        <div>
            <label>メールアドレス：<input type="email" name="email" required></label>
        </div>
        <div>
            <label>年齢：<input type="text" name="age" required></label>
        </div>
        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>