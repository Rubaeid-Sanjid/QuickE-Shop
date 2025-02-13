<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | QuickE-Shop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section>
        <h3>Dashboard</h3>
        <!-- left sidebar -->
        <div class="">
            <ul>
                <h3>Manage Products</h3>
                <li><a href="">All Products</a></li>
                <li><a href="./dashboard.php?page=addProduct">Add Product</a></li>
                <h3>Manage User</h3>
                <li><a href="">Add User</a></li>
            </ul>

        </div>

        <!-- right sidebar -->
         <div>
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'].".php"; // addProduct.php
                }else{
                    $page = '';
                }
                
                if(file_exists($page)){
                    include $page;
                }else{
                    echo "<h3>Page not found</h3>";
                }
            ?>
         </div>
    </section>
</body>

</html>