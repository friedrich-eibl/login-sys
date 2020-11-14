<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link>
    </head>

    <body>

    <nav>
        <div class="wrapper">
            <?php
                if (isset($_SESSION["usersID"])) {
                    echo "<li><a>You are logged in!</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a>You need to login!</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </div>
    </nav>