<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/csgoDisplay.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>CSGO Profile</title>
</head>
<body>
    <div>
  <div class="csgo-container">
    <div class="csgo-container1">
      <div class="csgo-container2">
        <a href="home.html" id="homeBtn" class="csgo-navlink button">Home</a>
      </div>
      <div class="csgo-container3">
        <button
          id="notification"
          name="notification"
          type="button"
          class="csgo-button button"
        >
          Notification
        </button>
        <button
          id="messages"
          name="messages"
          type="button"
          class="csgo-button1 button"
        >
          Mesages
        </button>
      </div>
      <img
        alt="image"
        src="/resources/nexusParty.png"
        class="csgo-image"
      />
    </div>
    <h1 id="csgoHeader" class="csgo-heading">Counter Strike: GO</h1>
    <div id="userContainer" class="csgo-container4">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            if ($conn -> connect_error){
                die("Connection Failed".$conn-> connect_error);
            
            }
            
            $sql = "SELECT id, username, game, role, rank FROM user_form WHERE game = 'CSGO'";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0 ){
                while($row = $result -> fetch_assoc()){
                    $username = $row["username"];
                    $role = $row["role"];
                    $rank = $row["rank"];
                    $game = $row["game"];
                    ?>
                    <div id="userList" class="csgo-container5">
                    <p id="username" class="csgo-text"><?php echo $username; ?></p>
                    <p id="game" class="csgo-text1"><?php echo $game; ?></p>
                    <p id="role" class="csgo-text2"><?php echo $role; ?></p>
                    <p id="rank" class="csgo-text3"><?php echo $rank; ?></p>
                    </div>
                    
                    <?php  
                }
                echo "</table>";
            } else{
                echo "0 result";
            }
            $conn->close();
        ?>
  </div>
</div>
         
</body>
</html>