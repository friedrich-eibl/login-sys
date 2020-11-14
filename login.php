<?php
    include_once 'header.php';
?>

    <section class="login-form">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="Enter Password">
            <button type="submit" name="submit">Login</button> 
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all Fields...</p>";
            
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Wrong username or password!</p>";
            
            }
        }
    ?>

    </section>

<?php
    include_once 'footer.php';
?>