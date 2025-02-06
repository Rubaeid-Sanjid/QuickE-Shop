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
            $fname = htmlspecialchars($_POST["fname"]);
            $lname = htmlspecialchars($_POST["lname"]);
            $email = htmlspecialchars($_POST["email"]);
            $uname = htmlspecialchars($_POST["uname"]);
            $password = htmlspecialchars($_POST["password"]);
            $passwordRepeat = htmlspecialchars($_POST["passwordRepeat"]);

            $error = array();
            if(empty($fname) OR empty($lname) OR empty($email) OR empty($uname) OR empty($password) OR empty($passwordRepeat)){
                array_push($error, "All fields are required.");
            }
            if(!preg_match("/^[A-Za-z]*$/", $fname) OR !preg_match("/^[A-Za-z]*$/", $lname) OR !preg_match("/^[A-Za-z]*$/", $uname)){
                array_push($error, "Name should only contain letters.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($error, "Enter a valid email.");
            }
            if(strlen($password)<8){
                array_push($error, "Password must be at least 8 characters");
            }
            if($password !== $passwordRepeat){
                array_push($error, "Password does not match.");
            }

            if($error > 0){
                foreach($error as $err){
                    echo "<h3 class='text-red-500 my-2'>$err</h3>";
                }
            }else{

            }
        }
    ?> 
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label for="fname" >First Name</label>
            <input id="fname" type="text" name="fname" class="border p-2">
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input id="lname" type="text" name="lname" class="border p-2">
        </div>
        
        <div>
            <label for="email">Email</label>
            <input id="email" type="text" name="email" class="border p-2">
        </div>

        <div>
            <label for="uname">User Name</label>
            <input id="uname" type="text" name="uname" class="border p-2">
        </div>
        
        <div class="flex flex-col gap-3">
            <label for="password">Password</label>
            <input id="password" type="text" name="password" class="border p-2">
        </div>
        
        <div class="flex flex-col gap-3">
            <label for="passwordRepeat">Confirm Password</label>
            <input id="passwordRepeat" type="text" name="passwordRepeat" class="border p-2">
        </div>

        <input type="submit" value="Register" name="register" class="my-3 border px-3 py-1">
    </form>
</body>

</html>