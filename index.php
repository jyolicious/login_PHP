<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Student Portal 🎓</h1>
        <?php if(isset($_SESSION['username'])): ?>
            <p>Hello, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <p><a href="login.php">Login</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
