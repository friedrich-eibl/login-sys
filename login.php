<?php
    include_once 'header.php';
?>

    <section class="login-form">
        <h2>Login</h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="Enter Password">
            <button type="submit" name="submit">Login</button> 
        </form>
    </section>

<?php
    include_once 'footer.php';
?>