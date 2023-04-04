<!DOCTYPE html>
<!-- title icon -->
<link rel="icon"  type="image/png" sizes="16*16" href="pic/profile-image.jpg">
<?php
include 'php/navbar.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    
    <title>Yuri Egipto</title>
</head>
<body>


<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  /* Jumbotron container */
  .jumbotron-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to bottom, #3a3a3a, #1f1f1f);
    color: #fff;
    padding: 20px 90px;
  }

  /* Text section */
.text {
  max-width: 50%;
  border-radius: 10px;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  padding: 3rem;
}

.text h1 {
  font-size: 4rem;
  margin-bottom: 1rem;
  font-weight: bold;
  line-height: 1.2;
  color: orange;
}

.text p {
  font-size: 2rem;
  margin-bottom: 2rem;
  line-height: 1.5;
}

.text button {
  font-size: 2rem;
  padding: 1rem 2rem;
  background-color: orange;
  color: #fff;
  border: none;
  border-radius: 50px;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  animation: pulse 1s infinite;
}

.text button:hover {
  background-color: #1f1f1f;
  color: orange;
  animation: none;
  transform: translateY(-5px);
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}


  /* Image section */
  .image {
    max-width: 50%;
    text-align: right;
    margin-left: 5rem;
  }

  .image img {
    max-width: 100%;
  }

  /* Shape */
.shape {
position: absolute;
width: 200px;
height: 200px;
background: #fff;
border-radius: 50%;
top: 50%;
left: 50%;
transform: translate(-50%, -50%) rotate(45deg);
z-index: -1;
box-shadow: 0 0 0 100vw #1f1f1f;
transition: all 0.5s ease-in-out;
}

.shape:hover {
transform: translate(-50%, -50%) rotate(225deg);
box-shadow: 0 0 0 0vw #1f1f1f;
background: linear-gradient(to right, #ffc107, #ff3c00);
}

  /* Image animation */
  .image.shake img {
    animation: shake 0.5s ease-in-out;
    animation-iteration-count: infinite;
  }

  @keyframes shake {
    0% {
      transform: translateX(0);
    }
    25% {
      transform: translateX(-10px);
    }
    75% {
      transform: translateX(10px);
    }
    100% {
      transform: translateX(0);
    }
  }

  /* Responsive styles */
  @media (max-width: 575px) {
    .jumbotron-container {
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }

    .text {
      max-width: 110%;
      margin-right: 18px;
      text-align: center;
      margin-bottom: 2rem;
      padding: 1rem;
    }
    .text h1 {
    font-size: 3rem;
  }
    .text p {
    font-size: 1rem;
    margin-bottom: 1rem;
  }

    .image {
      max-width: 80%;
      margin-bottom: 2rem;
      margin-left: 0;
    }


    .shape {
      width: 150px;
      height: 150px;
      top: 10%;
      left: 50%;
      transform: translateX(-50%) rotate(45deg);
    }
  }
</style>

<div class="jumbotron-container">
  <div class="text">
    <h1>Maligayang Pagdating!</h1>
    <p>Nice to see you on my website, hope you enjoy!</p>
    <button id="learn-more-btn">Say Hello</button>
  </div>
  <div class="image">
    <img src="https://static.vecteezy.com/system/resources/previews/010/265/390/original/cute-3d-robot-say-hello-png.png">
  </div>
  <div class="shape"></div>
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
<script src="js/script.js"></script>

<!-- animation js para magshake si robotski -->
<script>
  const learnMoreBtn = document.getElementById("learn-more-btn");
const imageContainer = document.querySelector(".image");

let isShaking = false;

learnMoreBtn.addEventListener("click", () => {
  if (!isShaking) {
    imageContainer.classList.add("shake");
    learnMoreBtn.innerText = "Helloooo";
    isShaking = true;
  } else {
    imageContainer.classList.remove("shake");
    learnMoreBtn.innerText = "Welcome Po!";
    isShaking = false;
  }
});

imageContainer.addEventListener("animationend", () => {
  if (isShaking) {
    imageContainer.classList.remove("shake");
    learnMoreBtn.innerText = "Shake Me";
    isShaking = false;
  }
});
</script>
<!-- end ng animation js para magshake si robotski -->
</body>
</html> 
