<?php
session_start();
@include 'config.php';

if(isset($_SESSION['id'])&& isset($_SESSION['username'])){
  $username = $_SESSION['username'];

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/home.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <title>Game Page</title>
</head>
<body>
<div>
  <link href="./home.css" rel="stylesheet" />
  <div class="home-container">
    <div class="home-container1">
      <img
        alt="image"
        src="/resources/nexusParty.png"
        class="home-image"
      />
      <div class="home-container2">
      <a href="/php/profilePage.php" class="home-navlink">Profile</a>
        <a href="/php/about.php" class="home-navlink">About</a>
        <a href="/php/games.php" class="home-navlink1">Games</a>
        <a
          href="https://example.com"
          target="_blank"
          rel="noreferrer noopener"
          class="home-link"
        >
          Features
        </a>
      </div>
    </div>
    <div class="home-container3">
      <a href="/php/leagueDisplay.php" class="home-navlink2">
        <p class="home-text">League of Legends</p>
      </a>
      <a href="/php/valorantDisplay.php" class="home-navlink3">
        <p class="home-text01">Valorant</p>
      </a>
      <a href="/php/csgoDisplay.php" class="home-navlink4">
        <p class="home-text02">Counter Strike: GO</p>
      </a>
    </div>
    <div class="home-container4">
      <div class="home-container5">
        <span></span>
        <span class="home-text04">
          <span class="home-text05">Hi Gamer!</span>
          <br />
          <span>Find Some</span>
          <br />
          <span>Group Chats!</span>
          <br />
        </span>
        <a href="/php/groupchatDisplay.php" class="home-navlink5 button">Click Here</a>
      </div>
      <div class="home-container6">
        <iframe
          src="https://www.youtube.com/embed/sUoSPryMZr0?autoplay=0&amp;fs=0&amp;iv_load_policy=3&amp;showinfo=0&amp;rel=0&amp;cc_load_policy=0&amp;start=0&amp;end=0"
          class="home-iframe"
        ></iframe>
      </div>
    </div>
    <div class="home-container7">
      <span></span>
      <span class="home-text12">
        <span class="home-text13">Hi Gamer!</span>
        <br />
        <span>Let&apos;s get you a</span>
        <br />
        <span>playmate!</span>
        <br />
      </span>
      <a href="valorant.html" class="home-navlink6 button">Click Here</a>
    </div>
  </div>
</div>


</body>
</html>
