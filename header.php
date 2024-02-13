<header>
    <?php if(isset($_SESSION['logged'])): ?>
        <a href="account.php">My Account</a>
        <a href="logout.php">Log Out</a>
    <?php else: ?>
        <a href="signup.php">Sign Up</a> /
        <a href="signin.php">Sign In</a>
    <?php endif;?>
</header>