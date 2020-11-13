<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="password" name="pwdrepeat" placeholder="Reapeat Password">
            <button type="submit" name="submit">Sign Up</button> 
        </form>
    </section>

<?php
    include_once 'footer.php';
?>