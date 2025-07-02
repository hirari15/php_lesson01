<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample21</title>
</head>
<body>
    <h2>ご予約日</h2>
    <ul>
        <li>1/2</li>
        <li>1/3</li>
    <ul>
    <?php if (!empty($_REPUEST['reserve'])): ?>
    <?php $reserves = $_REQUEST['reserve']; ?>
    <ul>
        <?php foreach ($reserves as $reserve): ?>
            <li><?php echo htmlspecialchars($reserve, ENT_QUOTES); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
        <p>予約日がありません！</p>
    <?php endif; ?>
</body>
</html>