<?php
session_start();

@include 'config.php';

if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$password'";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
      if($row['email'] === $email && $row['password'] === $password){
        $_SESSION['id']  = $row['id'];
        $_SESSION['username']  = $row['username'];
        $_SESSION['game']  = $row['game'];
        $_SESSION['rank']  = $row['rank'];
        $_SESSION['role']  = $row['role'];
        header('Location: php/home.php');
         exit();
      }else {
        $error = 'Incorrect email or password!';
      header('Location: php/Login.php');
      exit();
   }
   } else {
    $error = 'User does not exist!';
    header('Location: php/Login.php');
    exit();
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

</head>
<body>
    <img src="/resources/nexusParty.png" alt="Nexus Party">
    <div class="loginbox">
        <form action="home.php" method="post">
        <h1>Login</h1>
            <div class="txtField">
                <input type="text" id="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="txtField">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="pass">Forgot Password?</div>
            <input type="submit" name="submit" value="Login">
            <div class="signupLink">
                <p><a href="/php/Register.php">Sign Up</a> to get started</p>
            </div>
        </form>
        
    </div>
</body>
</html>