<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/valorantDisplay.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>Valorant display</title>
</head>
<body>
    <div>
  <div class="valorant-container">
    <div class="valorant-container1">
      <div class="valorant-container2">
        <a href="home.php" id="homeBtn" class="valorant-navlink button">
          Home
        </a>
      </div>
      <div class="valorant-container3">
        <button
          id="notification"
          name="notification"
          type="button"
          class="valorant-button button"
        >
          Notification
        </button>
        <button
          id="messages"
          name="messages"
          type="button"
          class="valorant-button1 button"
        >
          Mesages
        </button>
      </div>
      <img
        alt="image"
        src="/resources/nexusParty.png"
        class="valorant-image"
      />
    </div>
    <h1 class="valorant-heading">
      <span>Valorant</span>
      <br />
    </h1>
    <div id="userContainer" class="valorant-container4">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            if ($conn -> connect_error){
                die("Connection Failed".$conn-> connect_error);
            
            }
            
            $sql = "SELECT id, username, game, role, rank FROM user_form WHERE game = 'Valorant'";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0 ){
                while($row = $result -> fetch_assoc()){
                    $username = $row["username"];
                    $role = $row["role"];
                    $rank = $row["rank"];
                    $game = $row["game"];
                    ?>

                    <div id="userList" class="valorant-container5">
                        <p id="username" class="valorant-text2"><?php echo $username; ?></p>
                        <p id="game" class="valorant-text3"><?php echo $game; ?></p>
                        <p id="role" class="valorant-text4"><?php echo $role; ?></p>
                        <p id="rank" class="valorant-text5"><?php echo $rank; ?></p>
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