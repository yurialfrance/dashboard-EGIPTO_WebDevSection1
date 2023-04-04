<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title icon -->
  <link rel="icon"  type="image/png" sizes="16*16" href="../pic/profile-image.jpg">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/darkmode.css">
    <link rel="stylesheet" href="../css/mediaquery.css">
<body>
</head>

<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
  nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
  position: initial;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: #f4bc42;
  }
}

.bg {
  /* set the width and height of the div to 100% to make it cover the whole page */
  width: 100%;
  height: 100%;
  /* center the image within the div */
  display: flex;
  justify-content: center;
  align-items: center;
}

.bg img {
  /* set the width and height of the image to cover the whole div */
  width: 100%;
  height: 100%;
  /* make sure the image doesn't get stretched or skewed */
  object-fit: cover;
}

</style>

<nav>
  <div class="logo">
    <a href="../index.php">
    <?php
      if (basename($_SERVER['PHP_SELF']) == "index.php") {
        echo '<img src="pic/logo-brand.png" alt="" width="50" height="50">';
      } else {
        echo '<img src="../pic/logo-brand.png" alt="" width="50" height="50">';
      }
    ?>
    </a>
  </div>
  <input type="checkbox" id="click">
  <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
  </label>
  <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../php/about.php">About</a></li>
  <li><a class=active href="activities.php">Activities</a></li>
</ul>
</nav>
<body>


<!-- background image -->
<div class="bg">
  <img src="../pic/maintenance.png" alt="">
</div>

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
</body>
</html>