<?php
    require "header.php";
?>

    <main>
        <?php
            if(isset($_SESSION['userID'])) {
                echo "<h2>You are logged in.</h2>";
            }
            else {
                echo "<h2>You are logged out.</h2>";
            }
            if($_GET['error'] == "nouser") {
                echo "<p class='invalid-user'>Invalid user name and password.</p>";
            }
        ?>
    </main>

<?php
    require "footer.php";
?>