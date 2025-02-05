<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | QuickE-Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php 
        if(isset($_POST["register"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $uname = $_POST["uname"];
            $password = $_POST["password"];

            echo $fname;
        }
    ?> 
    <form action="register.php" method="post">
        <div>
            <label for="fname">First Name</label>
            <input id="fname" type="text" name="fname" placeholder="Enter first name" class="border p-2">
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input id="lname" type="text" name="lname" placeholder="Enter last name" class="border p-2">
        </div>
        
        <div>
            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Enter email" class="border p-2">
        </div>

        <div>
            <label for="uname">User Name</label>
            <input id="uname" type="text" name="uname" placeholder="Enter user name" class="border p-2">
        </div>
        
        <div class="flex flex-col gap-3">
            <label for="password">Password</label>
            <input id="password" type="text" name="password" placeholder="Enter password" class="border p-2">
        </div>

        <input type="submit" value="Register" name="register" class="my-3 border px-3 py-1">
    </form>
</body>

</html>