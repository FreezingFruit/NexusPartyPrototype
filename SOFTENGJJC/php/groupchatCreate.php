<?php

@include 'configGC.php';

if(isset($_POST['submit'])){

   $gcname = mysqli_real_escape_string($conn, $_POST['gcname']);
   $gcgame = $_POST['gcgame'];
   $gctype = $_POST['gctype'];

   $select = "SELECT * FROM groupchat WHERE gcname = '$gcname'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Group Chat Already Exists';

   }else{

        $insert = "INSERT INTO groupchat(gcname, gcgame, gctype) VALUES('$gcname','$gcgame','$gctype')";
         mysqli_query($conn, $insert);
         header('location:groupchatDisplay');
        exit();
   }

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group Chat</title>
    <link rel="stylesheet" type="text/css" href="/css/register.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">


</head>
<body>
    <img src="/resources/nexusParty.png" alt="Nexus Party">
    <div class="signUpbox">
        
        
            <form action="" method="post">
            <h1>Group Chat</h1>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                     };
                 };
            ?>
            <div class="txtField">
                <input type="text" id="gcname" name="gcname" required>
                <span></span>
                <label>Group Chat Name</label>
            </div>

            <div class="txtField">
            <select name="gctype">
                <option value="Chill">Chill</option>
                <option value="Competitive">Competitive</option>
                
            </select>
            

            <div class="txtField">
            <select name="gcgame">
                <option value="League of Legends">League of Legends</option>
                <option value="Valorant">Valorant</option>
                <option value="CSGO">CSGO</option>
            </select>
            </div>

            
                <input type="submit" name="submit" value="Create Group Chat!">
                <p>Already have a Group Chat? <a href="/php/groupchatDisplay.php">Chat now!</a></p>
             </form>
    </div>
</body>
 
    

</html>