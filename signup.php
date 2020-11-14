<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="password" name="pwdrepeat" placeholder="Reapeat Password">
            <button type="submit" name="submit">Sign Up</button> 
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all Fields...</p>";
            
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>The username can only consist of Numbers (0-9) and letters (a-z)</p>";
            
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>This is not a valid email!</p>";

            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>The chosen username is already taken :(</p>";

            } else if ($_GET["error"] == "pwdnotequal") {
                echo "<p>The passwords do not match!</p>";

            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p> Oops! Something went wrong :(";
            
            } else if ($_GET["error"] == "none") {
                echo "<p> Success! You have signed up :)";
            }
        }
    ?>

    </section>

<?php
    include_once 'footer.php';
?>