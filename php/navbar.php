<!DOCTYPE html>
<!-- title icon -->
<link rel="icon"  type="image/png" sizes="16*16" href="../pic/profile-image.jpg">
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
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
    </style>
</head>
<body>
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
  <li><a class="<?php if(basename($_SERVER['PHP_SELF']) == "index.php") echo 'active' ?>" href="../index.php">Home</a></li>
  <li><a class="<?php if(strpos($_SERVER['REQUEST_URI'], '/about.php') !== false) echo 'active' ?>" href="php/about.php">About</a></li>
  <?php if(basename($_SERVER['PHP_SELF']) == "index.php") {?>
  <li><a class="<?php if(basename($_SERVER['PHP_SELF']) == "activities.php") echo 'active' ?>" href="php/activities.php">Activities</a></li>
  <?php } else {?>
  <li><a class="<?php if(strpos($_SERVER['REQUEST_URI'], '/activities.php') !== false) echo 'active' ?>" href="activities.php">Activities</a></li>
  <?php }?>
</ul>



</nav>






</body>
</html>


