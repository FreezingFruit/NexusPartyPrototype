
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/leagueDisplay.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>League of Legends Users</title>
</head>
<body>
    <div>
  <div class="lol-container">
    <div class="lol-container1">
      <div class="lol-container2">
        <a href="home.php" id="homeBtn" class="lol-navlink button">Home</a>
      </div>
      <div class="lol-container3">
        <button
          id="notification"
          name="notification"
          type="button"
          class="lol-button button"
        >
          Notification
        </button>
        <button
          id="messages" name="messages"type="button" class="lol-button1 button" >
          Mesages
        </button>
      </div>
      <img
        alt="Neuxs Party" src="/resources/nexusParty.png"class="lol-image"
      />
    </div>
    <h1 class="lol-heading">
      <span>League of Legends</span>
      <br />
    </h1>
    <div id="userContainer" class="lol-container4">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            if ($conn -> connect_error){
                die("Connection Failed".$conn-> connect_error);
            
            }
            
            $sql = "SELECT id, username, game, role, rank FROM user_form WHERE game = 'League of Legends'";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0 ){
                while($row = $result -> fetch_assoc()){
                    $username = $row["username"];
                    $game = $row["game"];
                    $role = $row["role"];
                    $rank = $row["rank"];
                    ?>
                    <div id="userList" class="lol-container5">
                    <p id="username" class="lol-text2"><?php echo $username; ?></p>
                    <p id="game" class="lol-text3"><?php echo $role; ?></p>
                    <p id="role" class="lol-text4"><?php echo $role; ?></p>
                    <p id="rank" class="lol-text5"><?php echo $rank; ?></p>
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
</div>

            
</body>
</html>