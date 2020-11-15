<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    </head>

    <body>

    <nav>
        <div class="wrapper">
            <?php
                if (isset($_SESSION["username"])) {
                    echo "<li><a>You are logged in as " . $_SESSION["username"] . "!</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a>You need to login!</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </div>
    </nav>