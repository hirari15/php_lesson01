<?php
$value = '変数に保存した値です';
setcookie('message', 'Cookieに保存した値です',
     time() + 60 * 60 * 24 * 14);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson26</title>
</head>
<body>
    <a href="page02.php">２ページ目へ</a>
</body>
</html>