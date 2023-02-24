<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="../css/mainStyle.css">
  <link rel="stylesheet" type="text/css" href="../css/videoStyle.css">
  <link rel="stylesheet" type="text/css" href="../css/headerFooter_Gallery.css">
  <script src="../js/code.js"></script>

</head>

<body onload="imgSize()">

  <div class="header">
    <div class="navbar">
      <img class="logo" src="../images/My project.png">
      <div class="account">
        <ul>
          <li><a class="login" href="login.php"><img src="../images/login.png">Login</a></li>
          <li><a class="singup" href="register.php"><img src="../images/Singup.png">Singup</a></li>
          <li><a class="singup" href="user_page.php"><img src="../images/user.png">My account</a></li>
        </ul>
      </div>
    </div>
    <div class="menu-container">
      <ul>
        <li><a href="../html/home.html">Home</a></li>
        <li><a href="../php/packages.php">Packages</a></li>
        <li><a href="../php/aboutus.php">About Us</a></li>
        <li><a href="../php/contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="heading">
      <h3>Video <span>Gallery</span></h3>
    </div>

    <div class="videoContainer">
      <div class="videoBox">
        <video src="../video/clip1.mp4" type="video/mp4" loop class="clip" muted></video>
      </div>
      <div class="videoBox">
        <video src="../video/clip2.mp4" type="video/mp4" loop class="clip" muted></video>
      </div>
      <div class="videoBox">
        <video src="../video/clip3.mp4" type="video/mp4" loop class="clip" muted></video>
      </div>
      <div class="videoBox">
        <video src="../video/clip4.mp4" type="video/mp4" loop class="clip" muted></video>
      </div>
    </div>

    <script>
      const clip = document.querySelectorAll('.clip');
      for (let i = 0; i < clip.length; i++) {
        clip[i].addEventListener('mouseenter',
          function (e) {
            clip[i].play()
          })
        clip[i].addEventListener('mouseout', function
          (e) {
          clip[i].pause()
        })
      }
    </script>

    <div class="heading">
      <h3>Photo <span>Gallery</span></h3>
    </div>
    <div class="box">

      <div class="dream">
        <figure class="fig" id="fg1"><img class="imgg" src="../images/g1.jpg" id="img1"></figure>
        <figure class="fig" id="fg2"><img class="imgg" src="../images/g2.jpg" id="img2"></figure>
        <figure class="fig" id="fg3"><img class="imgg" src="../images/g3.jpg" id="img3"></figure>
        <figure class="fig" id="fg4"><img class="imgg" src="../images/g4.jpg" id="img4"></figure>
        <figure class="fig" id="fg5"><img class="imgg" src="../images/g5.jpg" id="img5"></figure>
        <figure class="fig" id="fg5"><img class="imgg" src="../images/g21.jpg" id="img5"></figure>

      </div>

      <div class="dream">
        <figure class="fig" id="fg6"><img class="imgg" src="../images/g6.jpg" id="img6"></figure>
        <figure class="fig" id="fg7"><img class="imgg" src="../images/g7.jpg" id="img7"></figure>
        <figure class="fig" id="fg8"><img class="imgg" src="../images/g8.jpg" id="img8"></figure>
        <figure class="fig" id="fg9"><img class="imgg" src="../images/g9.jpg" id="img9"></figure>
        <figure class="fig" id="fg10"><img class="imgg" src="../images/g10.jpg" id="img10"></figure>
        <figure class="fig" id="fg10"><img class="imgg" src="../images/g20.jpg" id="img10"></figure>

      </div>

      <div class="dream">
        <figure class="fig" id="fg11"><img class="imgg" src="../images/g11.jpg" id="img11"></figure>
        <figure class="fig" id="fg12"><img class="imgg" src="../images/g12.jpg" id="img12"></figure>
        <figure class="fig" id="fg13"><img class="imgg" src="../images/g23.jpg" id="img13"></figure>
        <figure class="fig" id="fg14"><img class="imgg" src="../images/g14.jpg" id="img14"></figure>
        <figure class="fig" id="fg15"><img class="imgg" src="../images/g15.jpg" id="img15"></figure>
        <figure class="fig" id="fg5"><img class="imgg" src="../images/g24.jpg" id="img5"></figure>

      </div>
    </div>
  </div>

  <div class="footer">
    <div class="footer1">
      <ul>
        <li><a href="#">Privacy & Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="footer2">
      <ul>
        <li><a href="#"><img src="../images/instagram.png">Instagram</a></li>
        <li><a href="#"><img src="../images/facebook.png">Facebook</a></li>
        <li><a href="#"><img src="../images/tripadvisor.png">TripAdvisor</a></li>
      </ul>
    </div>
  </div>

</body>

</html>