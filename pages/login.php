<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | QuickE-Shop</title>
    <link href="/QuickE-Shop/dist/output.css" rel="stylesheet">
</head>
<body>
    <?php
    
        if(isset($_POST['login'])){
            include "../includes/connect.php";

            $unameOrEmail = htmlspecialchars($_POST['uname']);
            $password = trim($_POST['password']);

            $error = array();
            if(empty($unameOrEmail) OR empty($password)){
                array_push($error, "All fields are required.");
            }
            if(count($error) > 0){
                foreach($error as $err){
                    echo "<h3 class='text-red-500 my-2'>$err</h3>";
                }
            }
            
            $sql = "SELECT * FROM users WHERE user_name = '$unameOrEmail' OR email = '$unameOrEmail'";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                
                $hashPassword = $row['password'];

                if(password_verify($password, $hashPassword)){
                    echo "<h3 class='text-green-500 my-2'>Login Successful</h3>";

                    session_start();
                    $_SESSION['userId'] = $row['user_id'];
                    $_SESSION['userName'] = $row['user_name'];
                    $_SESSION['userRole'] = $row['user_role'];

                    header("Location: ./dashboard.php");

                }else{
                    echo "<h3 class='text-red-500 my-2'>Invalid Password</h3>";
                }
            }
        }
    ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          
        <div>
            <label for="uname">User Name or Email</label>
            <input id="uname" type="text" name="uname" class="border p-2">
        </div>
        
        <div class="flex flex-col gap-3">
            <label for="password">Password</label>
            <input id="password" type="text" name="password" class="border p-2">
        </div>

        <input type="submit" value="Login" name="login" class="my-3 border px-3 py-1">
    </form>
</body>
</html>