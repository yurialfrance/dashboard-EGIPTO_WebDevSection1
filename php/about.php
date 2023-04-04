<!DOCTYPE html>
<?php
 include 'navbar.php';
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/darkmode.css">
    <link rel="stylesheet" href="../css/mediaquery.css">
    
    <!-- title icon -->
    <link rel="icon"  type="image/png" sizes="16*16" href="../pic/profile-image.jpg">
    <title>Yuri Egipto</title>
</head>
<body>
    
    <!-- navbar -->
    
    <!-- navbar end -->
    

    <!-- header na ewan -->
    <header>
        <div class="toggle-container">
          <input type="checkbox" id="toggle" onclick="toggleMode()">
          <br>
          <label for="toggle" style="margin-top: 4px;"><i>Change Light Mode</i></label>
        </div>
        <br><br>
        <h1 class="page-title">Welcome to my Autobiography!</h1>
        <div class="audio-player">
          <audio id="myAudio" src="../boses.mp3"></audio>
          <button onclick="playAudio()">Listen to my story while scrolling!</button>
        </div>
      </header>
      
    <!-- profile -->
<div class="profile-container" style="margin-top: 30px;">
    <div class="profile-background"></div>
    <img class="profile-image" src="../pic/profile-image.jpg" alt="Profile Image">
    <h3 style="color: orange;">Yuri Alfrance Gaco Egipto</h3>
    <p class="profile-text">
        I was born on May 5, 2004 in Ormoc City, Leyte, but I have spent most of my life in Sampaloc Manila, where I grew up with my parents and my younger sister. From a young age, I was always curious about technology, and this interest led me to pursue a degree in Bachelor of Science in Information Technology at the University of the City of Manila.

        My educational journey has been a rewarding one so far. I completed my Junior Highschool education at Ramon Magsaysay Highschool in Manila, and then moved on to study Senior Highschool at Polytechnic University of the Philippines, where I pursued the strand of Information and Communication technology. It was during this time that I discovered my passion for web development, and I began to explore ways to hone my skills and learn more about this exciting field.
        
        Currently, I am a Student Web Developer at PLM - Google Student Developer Club, where I studying on developing websites and creating engaging online content. In addition to my web development work, I am also the Director for graphic design and animation at PLM - Supreme Student Council. In this role, I use my creative skills to design posters, banners, and other marketing materials to promote various events and activities at the university.
        
        Throughout my journey, I have always believed in the power of dreaming big and working hard to achieve my goals. I truly believe that "As long as there is a dream there is hope", and I am excited to continue pursuing my passion for technology and making a positive impact in the world.
    </p>
</div>

<!-- hobbies -->
<center>
  <br><br>
    <h2 style="color: orange;">Hobies and Interests</h2>
</center>
<div class="hobby-grid">
    <div class="hobby-box">
      <img src="../pic/hobby-1.png" alt="Hobby 1">
      <h3>Scouting</h3>
      <p style="text-align: justify;">Scouting is one of my favorite activities.
        I'am currently an Eagle Scout and
        Assistant Outfit Advisor in a community
        scouting unit in Quezon City to guide my fellow
        youths on the right and good path
        through scouting.</p>
    </div>
    
    <div class="hobby-box">
      <img src="../pic/hobby-2.png" alt="Hobby 2">
      <h3>Servant</h3>
      <p style="text-align: justify;">
        Serving God and the Church is one of
        the most important activities I do in
        my life. I'am an altar server and a
        research officer at the CFD Archdiocese
        of Cebu. Love for God became my center
        and guide in life's journey.
    </p>
    </div>
    
    <div class="hobby-box">
      <img src="../pic/hobby-3.png" alt="Hobby 3">
      <h3>Symphony</h3>
      <p style="text-align: justify;">
        I also loves to play electric piano keyboard.
        My interest in playing the keyboard began
        when I was bought an electric
        keyboard when I was about 10 years
        old. I also knows how to play guitar and
        ukulele, but I more prefer playing piano hehe.
    </p>
    </div>
  </div>
  
<!-- end ng hobbies -->

<!-- footer saka contact infos -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h4>Contact Me</h4>
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/yurialfranz.egipto/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/in/yuriegipto/"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://github.com/yurialfrance"><i class="fab fa-github"></i></a></li>
          </ul>
        </div>
        <br>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <ul class="contact-info">
            <li><i class="fas fa-map-marker-alt"></i> Manila, Philippines</li>
            <li><i class="fas fa-envelope"></i> yurialfrance05@gmail.com</li>
            <li><i class="fas fa-phone"></i> +63915*****4</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
<!-- end ng footer saka contact infos -->
<script>
            // declare ng audio gamit ID
            var audio = document.getElementById("myAudio");
            // play audio when clicking the button
    function playAudio() {
        audio.play();
    }

    // Change light mode pwedeng light pwedeng night
    function toggleMode() {
        document.body.classList.toggle("dark-mode");
    }
</script>

</body>
</html> 
