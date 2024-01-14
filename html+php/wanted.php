

<?php
include("database.php")

?>






<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='../css/index.css'>
    <link rel="icon" href="../image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scal e=1.0">
    <title>KFC</title>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <meta name="description" content=" KFC is the world's most popular chicken restaurant chain, which engraves on its banner the preparation of fresh and delicious chicken, combined with excellent service and innovation anywhere in the world">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
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
            <li><a  href="mainpage.php">Home</a></li>
            <li><a href="menu.html">Our Menu</a></li>
            <li><a href="cartPage.html">Order Online</a></li>
            <li><a href="findkfc.php">Find a Kfc</a></li>
            <li><a href="aboutkfc.php">About Kfc</a></li>
            <li><a class="Home" href="wanted.php">Wanted</a></li>
            <li><a href="logout.php">log out</a></li>
        </ul>
    </nav>
</div>
<!--HEADER-->
<header>
    <div>
        <img id="header1" src="../image/a.png" alt="chicken bucket">
    </div>
</header>




<!--BUTTON1-->

<!--WELCOME H1-->
<div class="sd">
    <h1>Join our family at KFC</h1>
</div>
<!--HR LINE STYLE-->
<hr style="border: 1px solid red;
        width: 30%;
        margin: auto;">
<div style=" text-align: center; padding-top: 40px">


<p style="font-weight: 400; align-content: center">People join the KFC family for a variety of reasons, but the family atmosphere and pride they have in our brand, are what makes them stay.</p>
<p style="font-weight: 400;">We celebrate achievements (big and small) and push for excellence and a positive atmosphere in all our restaurants. </p>
<p style="font-weight: 400;">Colonel Sanders had a passion for serving great fried chicken and we are proud every day to continue his legacy through professionalism, service and love for our brand</p>
</div>
    <div id="banner44">
    <div id="div-2">
        <img  src="../image/team.jpg" alt="">
    </div>
</div>





<div id="banner55">
    <div id="div-11">

    <div id="form" style="

                padding: 10px 40px 100px 40px;
                border-style: solid;
                border-width: 1px 1px 1px 1px;
                border-color: #E21E2D;
            }">
        <form id="formforkfc" class="ff">
            <h4>Full name</h4>
            <input type="text" placeholder="enter your name" id="ss">

            <h4>Mobile</h4>
            <input type="number" placeholder="enter your number"><br>
            <h4>Hometown </h4>
            <input type="text" placeholder="enter your town">
            <h4>Date of birth</h4>
            <input type="date" placeholder="your birh"><br>


            <h4> i want to work in </h4>
            <select >
                <option value="Service and preparation staff">Service and preparation staff</option>
                <option value="Shift Manager">Shift Manager</option>
                <option value="management reserve">management reserve</option>
            </select><br>
            <h4>Attach a CV file</h4>
            <input type="file" placeholder="Choose file" id="cv"><br>


            <h4>im looking for a </h4> <br>

            <input type="radio" value="Full-time job" required="required" aria-required="true"> <label id="ss" for="form-field-field_2-0">Full-time job</label>

            <input type="radio" value="Part-time job"  required="required" aria-required="true"> <label  id="ss" for="form-field-field_2-1">Part-time job</label><br>
<br>
            <br>

            <button type="submit" id="confirm_button" name="confirm_b"><a>Submit</a></button>

<!--            <button><a  style="text-decoration: none;color: white;-->
<!--margin-top: 40px; margin-bottom: 40px;-->
<!--" href="#">Submit!</a></button>-->

        </form>
    </div>
</div>
    <br>


</div>
<hr style="border: 1px solid red;
        width: 100%;

margin-top: 80px;
">
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
            <div><p>Copyright ©Ahmad&kareem Rights Reserved</p></div>
        </div>
    </div>
</div>

</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const submit = document.getElementsByClassName("ff")[0];

        submit.addEventListener('submit', (e) => {
            e.preventDefault();
            console.log("clicked");

            const name = document.getElementById("ss");


            const nameValue = name.value;


            var subject = "Your request is successfully completed ";
            let body = "Name: USER" + nameValue + "<br/>Email: kfc.nablus.com" + "<br/>Address: nablus " +"<br/> work in service and preparation staff"+"<br/> full time job" + "<br/>Subject: " + subject;

            Email.send({
                SecureToken: "801c46b2-1cd6-46ea-a1ef-6580a5c30316",
                To: 'kfc.nablus@gmail.com',
                From: "kfc.nablus@gmail.com",
                Subject: "KFC Restaurant - Request Join us",
                Body: body
            }).then(
                message => {
                    alert(message);
                    // Redirect to the main page
                    // window.location.href = "../html+php/mainPage.php";
                }
            );})
    });
</script>

