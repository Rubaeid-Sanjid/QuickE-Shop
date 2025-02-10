<?php
include "connect.php";

session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: {$hostname}/pages/login.php");
}
?>
<header>
    <div class="container header-content">
        <div class="logo">
            <span style="background-color: #262b34; color: white;">
                QuickE-
            </span>
            <span style="background-color: white; color: #262b34; padding: 1px;">Shop</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="/QuickE-Shop/pages/register.php">ACCOUNT</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT</a></li>
                <?php
                if (isset($_SESSION['userName'])) {
                    echo "<div>
                        <li class='uppercase'>" . $_SESSION['userName'] . "</li>
                        <button><a href='{$hostname}/pages/logout.php'>Logout</a></button>
                    </div>";
                }
                ?>

            </ul>
        </nav>
    </div>
</header>