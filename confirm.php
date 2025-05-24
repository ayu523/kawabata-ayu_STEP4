<!-- confirm.php -->
<?php
function is_valid_name($name) {
    return preg_match('/^[ぁ-んァ-ヶー一-龥a-zA-Z]+$/u', $name);
}

function is_valid_age($age) {
    return is_numeric($age) && $age >= 0 && $age <= 150;
}

function is_valid_phone($phone) {
    return preg_match('/^[0-9\-]+$/', $phone);
}

function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_valid_address($address) {
    return preg_match('/^[ぁ-んァ-ヶー一-龥a-zA-Z0-9\s\-]+$/u', $address);
}

$errors = [];

if (!is_valid_name($_POST['name'])) $errors[] = "名前の形式が正しくありません。";
if (!is_valid_age($_POST['age'])) $errors[] = "年齢は0〜150の間で入力してください。";
if (!is_valid_phone($_POST['phone'])) $errors[] = "電話番号は半角数字とハイフンのみです。";
if (!is_valid_email($_POST['email'])) $errors[] = "メールアドレスの形式が正しくありません。";
if (!is_valid_address($_POST['address'])) $errors[] = "住所の形式が正しくありません。";

if (count($errors) > 0) {
    echo "<h1>エラーがあります</h1><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul><a href='form.php'>戻る</a>";
    exit;
}
?>

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
