<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="This will show up in search results.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="nav-menu">
                    <?php
                        if(isset($_SESSION['userID'])) {
                            echo "<form action=\"includes/logout.inc.php\" method=\"post\">
                                    <button type=\"submit\" name=\"logout-submit\">Logout</button>
                                    </form>";
                        }
                        else {
                            echo "<form action=\"includes/login.inc.php\" method=\"post\">
                                    <input type=\"text\" name=\"mailuid\" placeholder=\"username or email\">
                                    <input type=\"password\" name=\"pwd\" placeholder=\"password\">
                                    <button type=\"submit\" name=\"login-submit\">Login</button>
                                    </form>
                                    <a href=\"signup.php\">Signup</a>";
                        }

                    ?>
                </div>
            </nav>
        </header>

