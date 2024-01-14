<?php
global $conn;
require 'database.php';



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Validate user credentials (add your validation logic here)
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Assuming you have a users table in your database
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    // Start a session and set the user's name in a session variable
    session_start();
    $user = $result->fetch_assoc();
    $_SESSION["user_name"] = $user["name"];

    // Redirect to the main page or display a success message
    header("Location: main_page.php");
    exit();
  } else {
    // Display an error message if login fails
    echo "Invalid username or password";
  }
}

$conn->close();
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='../css/index.css'>
  <link rel="icon" href="../image/icon.png">
  <meta name="viewport" content="width=device-width, initial-scal e=1.0">
  <title>KFC</title>
  <meta name="description" content=" KFC is the world's most popular chicken restaurant chain, which engraves on its banner the preparation of fresh and delicious chicken, combined with excellent service and innovation anywhere in the world">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2a66bc2625.js" crossorigin="anonymous" ;></script>

</head><body>
<div id="pre_loader"></div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      document.getElementById("pre_loader").style.opacity = "0";
      setTimeout(function() {
        document.getElementById("pre_loader").style.display = "none";
      }, 1000);
    }, 1500);
  });
</script>

<div class="navvv">


<nav>
  <div id="logo">
    <img src="../image/icon.png" style="object-fit: cover;
            width: 100px;
            height: 100px;">
  </div>

  <ul class="nav-links">
    <li><a href="#Home" class="Home">Home</a></li>
    <li><a href="menu.html">Our Menu</a></li>
    <li><a href="cartPage.html">Order Online</a></li>
    <li><a href="findkfc.php">Find a Kfc</a></li>
    <li><a href="aboutkfc.php">About Kfc</a></li>
    <li><a href="wanted.php">Wanted</a></li>
   <li id="ab"><a href="signin.php">my account</a></li>




  </ul>
</nav>
</div>
<!--HEADER-->
<header>
  <div>
    <img id="header1" src="../image/ds.jpg" alt="chicken bucket">
  </div>
</header>




<!--BUTTON1-->
<div class="container1">
  <button class="button" onclick="location.href='#ssd'">FIND OUT MORE</button>
</div>

<div class="welcome">
  <?php
  if (isset($_SESSION["user_name"])) {
    echo "<h1>Welcome, " . $_SESSION["user_name"] . "!</h1>";
  } else {
    echo "<h1>Welcome TO KFC WebSite</h1>";
  }
  ?>
</div>

<!--HR LINE STYLE-->
<hr style="border: 1px solid red;
        width: 60%;
        margin: auto;
margin-bottom: 50px;">


<!--NEW-->
<div  id="ssd" class="imagebutton">

  <h2>Let's Start Ordering</h2>
  <img id="imagemiddel" src="/image/nbss.jpg" alt="show">

  <div class="btn">
    <button class="btn1"  onclick="location.href='../html+php/cartpage.html'"
>Delivery</button>
  </div>
 <div class="btn">
   <button class="btnn2" onclick="location.href='../html+php/cartpage.html'">Takeaway</button>

 </div>
   <div class="btn">
 <button class="btnn3"  onclick="location.href='../html+php/cartpage.html'">Dine-in
 </button>
 </div>
  </div>


<!--HR LINE STYLE-->
<hr style="border: 1px solid red;
        width: 100%;
      margin-bottom: 60px;
">

<div class="container13">
  <a2>Featured items</a2>
</div>
<hr style="border: 1px solid red;
      width: 20%;
      margin: auto;
margin-bottom: 30px;">

<div class="container">
  <div class="row" >

    <div class="col-md-4 mb-3">
      <picture>
        <a href="menumain.html">
          <img class="midd" alt="Deals" title="Deals" src="../image/image2.png" style="max-width: 100%;">
        </a>
      </picture>
    </div>
    <div class="col-md-4 mb-3">
      <picture>
        <a href="menumain.html">
          <img class="midd" alt="Deals" title="Deals" src="../image/image3.png" style="max-width: 100%;">
        </a>
      </picture>
    </div>
    <div class="col-md-4 mb-3">
      <picture>
        <a href="menumain.html">
          <img class="midd" alt="Deals" title="Deals" src="../image/image4.png" style="max-width: 100%;">
        </a>
      </picture>
    </div>


  </div>
</div>




<!--HR LINE STYLE-->
<hr style="#div-1 h1{
    font-size: 70px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: 50;

}border: 1px solid red;
        width: 100%;
      margin-bottom: 60px;
margin-top: 40px;">

<!--Neww-->

<div id="banner4">

  <div id="div-1">
    <div>
      <h1 style="color: #d12432">Join the Bucket Club</h1>
      <p>Be memeber of out team to get access to deals and faster checkout.</p>
      <button><a style="text-decoration: none;color: white;" href="wanted.php">join us!</a></button>
    </div>
  </div>
  <div id="div-2">
        <img src="../image/x1.png" alt="">
      </div>
    </div>
  </div>
</div>
<!--HR LINE STYLE-->

<!--banner5-->
<div id="banner5">
  <div id="div-11">
    <div>
      <h1 style="color:#d12432">Come visit us</h1>
      <p>KFC is deploying branches all over the World! What are you waiting for? Find the branch closest to you.</p>
      <button><a style="text-decoration: none;color: white;" href="findkfc.php">Find US!</a></button>
    </div>
  </div>
  <div id="div-22">
    <img src="../image/map.PNG" alt="">
  </div>
</div>
<!--banner 6 -->
<div id="banner6">
 <video class="vid" autoplay loop muted > <source src="../image/vid.mp4" type="video/mp4" style="width:1306.25px; height: 734.766px;">
 </video>
</div>

</div>
<address>
  <div class="add">
    <div class="kfc-add">
      <img src="../image/img11-.png" class="add-logo">
      <div class="phone"><img src="../image/store.png">1700 888 777</div>
      <div class="phone"><img src="../image/store.png">0923847444</div>

    </div>
    <div class="kfc-icon">
      <a href="https://twitter.com/kfc?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="../image/twitter.png"></a>
      <a href="https://www.facebook.com/palestinekfc"><img src="../image/facebook.png"></a>
      <a href="https://www.instagram.com/kfcpalestine/?hl=en"><img src="../image/instagram.png"></a>
    </div>
  </div>
</address>
<!--last-->

<div class="footer2">


<div class="footerFoot">
  <div class="kfcLogo">
    <img src="../image/icom.png" />
  </div>

  <ul>
    <li>KFC Food</li>
    <li><a href="menu.html">Menu</a></li>
    <li>Order Lookup</li>

  </ul>

  <ul>
    <li>Support</li>
    <li>Contact Us</li>
    <li>KFC Feedbacks</li>
  </ul>

  <ul>
    <li>Legal</li>
    <li><a href="terms.html">Terms and Conditions</a></li>
    <li><a href="Privacy.html">Privacy Policy</a></li>

  </ul>

  <ul>
    <li>About KFC</li>
    <li>KFC Care</li>
    <li>Careers</li>
  </ul>

  <div class="location">
    <div class="locationLogo">
      <img src="https://i.ibb.co/S6q7QpV/Find-KFC-removebg-preview.png" />
    </div>
    <div><a href="">Find a KFC</a></div>
    <div><p>Copyright ©KFC& Rights Reserved</p></div>
</div>
</div>
</div>

</body>
</html>
