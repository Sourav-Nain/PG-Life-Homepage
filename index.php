<?php
$city = "";

if (isset($_GET['city'])) {
    $city = $_GET['city'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PG Life</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <div class="navbar">
      <div class="logo">
        <div class="logo1"></div>
      </div>
      <div class="login">
        <i class="fa-solid fa-user"></i>
        <a href="#" id="signupBtn">Signup</a>
      </div>
      <div class="login">
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
        <a href="#" id ="loginBtn">Login</a>
      </div>
    </div>
  </header>
  <div class="hero-section">
    <h2>Happiness per Square Foot</h2>
    <div class="input-box"> 
      <input type="text" style="outline: none;" id="cityInput" list="allCities" placeholder="Enter your City to search for PGs">
      <div class="search-icon" id="searchBtn">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
    </div>
    <datalist id="allCities">
      <option value="Mumbai">
      <option value="Delhi">
      <option value="Bengaluru">
      <option value="Chennai">
    </datalist>
  </div>
  <div class="heading-major">
    <h1>Major Cities</h1>
  </div>
  <div class="major-cities">
    <a href="PG-Life-Property-Listing/index.php?city=Mumbai">
      <div class="cities">
        <div class="city-logo" style="background-image: url(&quot;mumbai.png&quot;)"></div>
      </div>
    </a>
    <a href="PG-Life-Property-Listing/index.php?city=Delhi">
      <div class="cities">
        <div class="city-logo" style="background-image: url(&quot;delhi.png&quot;)"></div>
      </div>
    </a>
    <a href="PG-Life-Property-Listing/index.php?city=Bengaluru">
      <div class="cities">
        <div class="city-logo" style="background-image: url(&quot;bangalore.png&quot;)"></div>
      </div>
    </a>
    <a href="PG-Life-Property-Listing/index.php?city=Chennai">
      <div class="cities">
        <div class="city-logo" style="background-image: url(&quot;chennai.png&quot;)"></div>
      </div>
    </a>
  </div>
  <footer>
    <div class="footer-city">
      <div class="city">
        <a href="PG-Life-Property-Listing/index.php?city=Mumbai">PG in Mumbai</a>
      </div>
      <div class="city">
        <a href="PG-Life-Property-Listing/index.php?city=Delhi">PG in Delhi</a>
      </div>
      <div class="city">
        <a href="PG-Life-Property-Listing/index.php?city=Bengaluru">PG in Bengaluru</a>
      </div>
      <div class="city">
        <a href="PG-Life-Property-Listing/index.php?city=Chennai">PG in Chennai</a>
      </div>
    </div>
    <div class="complaint">
      <p>Launch a Complaint</p>
    </div>
    <div class="copyright">
      <i class="fa-regular fa-copyright"></i>
      <p>2026 copyright PG Life</p>
    </div>
    <div class="footer-logo">
      <div class="footer-logo1"></div>
    </div>
  </footer>

  <div id="overlay" style="display:none;
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.6);
            justify-content:center;
            align-items:center;
            z-index:9999;">

    <div id="popup" style="background:white;
                width:700px;
                padding:20px;
                border-radius:10px;
                max-height:90vh;
                overflow-y:auto;">
    </div>

  </div>
  <script src="script.js"></script>
</body>

</html>