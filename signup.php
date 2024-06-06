<?php
require 'connect.php';

if(isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirm_password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM iusers WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or Email Has Already Been Taken');</script>";
    } else {
        if($password == $confirmpassword) {
            $query = "INSERT INTO iusers (fullname, username, email, pass) VALUES ('$fullname', '$username', '$email', '$password')";
            if(mysqli_query($conn, $query)) {
                echo "<script>alert('Registration Successful');</script>";
            } else {
                echo "<script>alert('Error: Registration Failed');</script>";
            }
        } else {
            echo "<script>alert('Password Does Not Match');</script>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="account.js"></script>
    <title>Rythmic Dreams</title>
</head>

<body>
    <div class="container">
        <div class="container-left">
            <img src="img/signup-svg.svg" alt="" class="image">
        </div>
        <div class="container-right">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="sign-in-form">
                <h2 class="title">Create Account</h2>

                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name="fullname">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="confirm_password">
                </div>

                <button type="submit" class="btn" name="submit">Register</button>

                <p class="social-text">Already a member? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
