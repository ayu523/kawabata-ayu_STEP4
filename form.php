<!-- form.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>

    <form action="confirm.php" method="post">
      <label>名前: <input type="text" name="name" required></label><br>
      <label>年齢: <input type="number" name="age" required></label><br>
      <label>電話番号: <input type="text" name="phone" required></label><br>
      <label>メールアドレス: <input type="email" name="email" required></label><br>
      <label>住所: <input type="text" name="address" required></label><br>
      <label>質問: <input type="text" name="question"></label><br>
      <label>性別:
        <select name="gender">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
        </select>
       </label><br>

       <button type="submit">送信</button>
    </form>
</body>
</html>

