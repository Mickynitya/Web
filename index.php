
<?php
include 'includes/db_config.php';
include 'includes/functions.php';

$giftCards = getGiftCards();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Cards - Dark Neon Theme</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Gift Card Store</h1>
        <div class="gift-cards">
            <?php foreach ($giftCards as $card): ?>
                <div class="card">
                    <p><?php echo $card['name']; ?></p>
                    <p><?php echo $card['price']; ?> USD</p>
                    <button class="neon-btn">Buy</button>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="auth-links">
            <a href="login.php" class="neon-link">Login</a>
            <a href="register.php" class="neon-link">Register</a>
        </div>
    </div>
    <script src="assets/app.js"></script>
</body>
</html>
