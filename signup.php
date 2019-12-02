<?php
require "header.php";
?>

    <main class="signup-page">
        <h1>Signup</h1>
        <?php
            if(isset($_GET['error'])) {
                if($_GET['error'] == "emptyfields") {
                    echo "<p>There are missing fields.</p>";
                }
                elseif($_GET['error'] == "invalidemailuid") {
                    echo "<p>Invalid email or user name.</p>";
                }
                elseif($_GET['error'] == "invalidemail") {
                    echo "<p>Invalid email.</p>";
                }
                elseif($_GET['error'] == "invaliduid") {
                    echo "<p>Invalid user name.</p>";
                }
                elseif($_GET['error'] == "passwordcheck") {
                    echo "<p>Your passwords do not match.</p>";
                }
                elseif($_GET['error'] == "usernametaken") {
                    echo "<p>User name taken.</p>";
                }
                elseif($_GET['error'] == "passwordcheck") {
                    echo "<p>Your passwords do not match.</p>";
                }

            }
            elseif ($_GET['signup'] == "success") {
                echo "<p class='success'>Sign up successful!</p>";
                echo "<p class ='success'>Log in with your username and password.</p>";
            }

        ?>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <br><br>
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password" name="pwd" placeholder="password">
            <br><br>
            <input type="password" name="pwd-repeat" placeholder="repeat password">
            <br><br>
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>

<?php
require "footer.php";
?>