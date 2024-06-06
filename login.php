<?php
session_start();
require 'connect.php';

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM iusers WHERE username = '$usernameemail' OR email = '$usernameemail'");
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($password == $row["pass"]){ 
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
            exit();
        }
        else{
            echo "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo "<script> alert('User Not Registered'); </script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="container-left">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="sign-in-form">
                <h2 class="title">Welcome Back</h2>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email or Username" name="usernameemail" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

                <button type="submit" class="btn" name="submit">Login</button>

                <p class="social-text">New Member? <a href="signup.php">Sign up</a></p>
            </form>
        </div>
        <div class="container-right">
            <img src="img/signup-svg.svg" alt="" class="image">
        </div>
    </div>
</body>
</html>
