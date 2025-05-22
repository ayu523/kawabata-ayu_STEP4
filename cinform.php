<!-- conform.php -->
 <!DOCTYPE html>
 <html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容確認</h1>

    <p>名前: <?php echo htmlspecialchars($_POST['name']);?></p>
    <p>年齢: <?php echo htmlspecialchars($_POST['age']); ?></p>
    <p>電話番号: <?php echo htmlspecialchars($_POST['phone']); ?></p>
    <p>メールアドレス: <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p>住所: <?php echo htmlspecialchars($_POST['address']); ?></p>
    <p>質問: <?php echo htmlspecialchars($_POST['question']); ?></p>
    <p>性別: <?php echo htmlspecialchars($_POST['gender']); ?></p>
</body>
</html>
