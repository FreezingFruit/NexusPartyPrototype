<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $game = $_POST['game'];
   $role = mysqli_real_escape_string($conn, $_POST['role']);
   $rank = mysqli_real_escape_string($conn, $_POST['rank']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

        $insert = "INSERT INTO user_form(username, email, password, game, role, rank) VALUES('$username','$email','$password','$game','$role','$rank')";
         mysqli_query($conn, $insert);
         header('location:php/Login.php');
    
   }

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="/css/register.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">


</head>
<body>
    <img src="/resources/nexusParty.png" alt="Nexus Party">
    <div class="signUpbox">
        
        
            <form action="" method="post">
            <h1>Sign Up</h1>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                     };
                 };
            ?>
            <div class="txtField">
                <input type="text" id="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="txtField">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txtField">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="txtField">
            <select name="game">
                <option value="League of Legends">League of Legends</option>
                <option value="Valorant">Valorant</option>
                <option value="CSGO">CSGO</option>
            </select>
            </div>

            <div class="txtField">
                <input type="text" id="role" name="role" required>
                <span></span>
                <label>What is your role?</label>
            </div>

            <div class="txtField">
                <input type="text" id="rank" name="rank" required>
                <span></span>
                <label>What is your rank?</label>
            </div>
            
                <input type="submit" name="submit" value="Register">
                <p>Already have an account? <a href="/php/Login.php">Login now</a></p>
             </form>
    </div>
</body>
 
    

</html>