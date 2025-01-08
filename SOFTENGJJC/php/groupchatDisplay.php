
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/gcdisplay.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>Group Chats</title>
</head>
<body>
<div>
  
  <div class="gc-container">
    <div class="gc-container1">
      <div class="gc-container2">
        <a href="/php/home.php" id="homeBtn" class="gc-navlink button">Home</a>
      </div>
      <div class="gc-container3">
        <button
          id="notification"
          name="notification"
          type="button"
          class="gc-button button"
        >
          Notification
        </button>
        <button
          id="messages"
          name="messages"
          type="button"
          class="gc-button1 button"
        >
          Mesages
        </button>
      </div>
      <img
        alt="image"
        src="/resources/nexusParty.png"
        class="gc-image"
      />
    </div>
    <h1 class="gc-heading">
      <span>Group Chats</span>
      <br />
    </h1>
    <div id="userContainer" class="gc-container4">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "groupchat_db");
            if ($conn -> connect_error){
                die("Connection Failed".$conn-> connect_error);
            
            }
            
            $sql = "SELECT id,gcname, gctype, gcgame FROM groupchat";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0 ){
                while($row = $result -> fetch_assoc()){
                    $gcname = $row["gcname"];
                    $gcgame = $row["gcgame"];
                    $gctype = $row["gctype"];
                    
                    ?>
                    <div id="userList" class="gc-container5">
                    <p id="gcname" class="gc-text2"><?php echo $gcname; ?></p>
                    <p id="gcgame" class="gc-text3"><?php echo $gcgame; ?></p>
                    <p id="gctype" class="gc-text4"><?php echo $gctype; ?></p>
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
    <a
      href="/php/groupchatCreate.php"
      id="notification"
      name="notification"
      class="gc-navlink1 button"
    >
      Create GC
    </a>
  </div>
</div>


            
</body>
</html>