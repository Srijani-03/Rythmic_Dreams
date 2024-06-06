<?php
require 'connect.php';
if(!empty($_SESSION["id"])){
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM iusers WHERE id = $id");
$row = mysqli_fetch_assoc($result);
}
else{
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="script.js"></script>
  <title>Rythmic Dreams</title>
</head>
<style>
  a{
    text-decoration:none;
  }
</style>
<body>
  <ul class="navbar-list">
    <a href="active" style="text-decoration: none; color:#D8AF6D; ">Home</a>
    </li>
    <li>
      <a href="blog.html" style="text-decoration: none; color: black">Blog</a>
    </li>
    <li>
      <a href="contact.html" style="text-decoration: none; color: black">Contact</a>
    </li>
    <div class="icons">
     <i class="fa-regular fa-user" id="cart-icon" style="cursor: pointer;" onclick="usericon()"></i>
     <a href="ShopCart.html" style="color:black;"><i class="fa-solid fa-bag-shopping"></i></a>

    </div>
  </ul>

  <div class="dropdown_menu" id="dropdownMenu">

      <div class="account">
        <a href="">Your Account</a>
      </div>
      <div class="account">
        <a href="">Your Orders</a>
      </div>
      <div class="account">
        <a href="">Wishlist</a>
      </div>
      <div class="account">
        <a href="LogOut.php">Sign out</a>
      </div>
  
  </div>
  <ul class="social-links">
    <a href="https://www.facebook.com/profile.php?id=61550104633832&mibextid=ZbWKwL" style="color: black;">
      <i class="fa-brands fa-facebook fa-2xl">
      </i></a>
    <a href="https://www.instagram.com/srijani.mukherjee03/" style="color: black;">
      <i class="fa-brands fa-instagram fa-2xl"></i></a>
    <a href="https://youtube.com/@srijanimukhopadhyay619" style="color: black;">
      <i class="fa-brands fa-youtube fa-2xl"></i></a>
  </ul>
  <ul class="page-numbers">
    <i>01</i>
    <i>02</i>
    <i>03</i>
  </ul>
  <div class="upperframe"></div>

  <img src="img/home img.png" alt="" srcset="" id="dance">
  <p id="heading">RYTHMIC DREAMS</p>
  <div class="lowerframe"></div>

  <p id="forms">Browse by Dance forms</p>
  <div class="container" style="margin-left: 500px; margin-top: 100px;">
    <input type="radio" name="slider" class="d-none" id="s1" checked style="display: none;">
    <input type="radio" name="slider" class="d-none" id="s2" style="display: none;">
    <input type="radio" name="slider" class="d-none" id="s3" style="display: none;">
    <input type="radio" name="slider" class="d-none" id="s4" style="display: none;">
    <input type="radio" name="slider" class="d-none" id="s5" style="display: none;">

    <div class="cards">
      <label for="s1" id="slide1">
        <div class="card">
          <div class="image">
            <img src="img/Bh1.jpg" alt="">
          </div>
          <div class="infos">
            <span class="name">Bharatnatyam</span>
            <span class="lorem">Lorem ipsum dolor sit amet, sit amet adipiscing elit. Aenean vel ansd . Nullam
              lorem. Nulla eu
              sodales</span>
          </div>
          <a href="bharatnatyam.html" class="btn-contact">DETAILS</a>

        </div>
      </label>

      <label for="s2" id="slide2">
        <div class="card">
          <div class="image">
            <img src="img/manipuri1.jpg" alt="">
          </div>
          <div class="infos">
            <span class="name">Manipuri</span>
            <span class="lorem">Lorem ipsum dolor sit, adipiscing elit. Aenean vel sit ansd . Nullam
              lorem. Nulla eu
              sodales karma stellus</span>
          </div>
          <a href="manipuri.html" class="btn-contact">DETAILS</a>
        </div>
      </label>

      <label for="s3" id="slide3">
        <div class="card">
          <div class="image">
            <img src="img/kathak1.jpg" alt="">
          </div>
          <div class="infos">
            <span class="name">Kathak</span>
            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam
              lorem. Nulla karma stellus</span>
          </div>
          <a href="kathak.html" class="btn-contact">DETAILS</a>

        </div>
      </label>

      <label for="s4" id="slide4">
        <div class="card">
          <div class="image">
            <img src="img/kathakali1.jpg" alt="">
          </div>
          <div class="infos">
            <span class="name">kathakali</span>
            <span class="lorem">Lorem ipsum dolor sit, sit amet elit. Aenean sit amet sit amet vel velit sit ansd. Nulla
              eu
              sodales stellus</span>
          </div>
          <a href="kathakali.html" class="btn-contact">DETAILS</a>

        </div>
      </label>

      <label for="s5" id="slide5">
        <div class="card">
          <div class="image">
            <img src="img/odissi1.jpg" alt="">
          </div>
          <div class="infos">
            <span class="name">Odissi</span>
            <span class="lorem">Lorem ipsum sit amet, sit amet elit. Aenean vel velit ansd . Nullam
              lorem. Nulla eu
              sodales stellus</span>
          </div>
          <a href="odissi.html" class="btn-contact">DETAILS</a>
        </div>
      </label>
    </div>
  </div>

  <p id="forms">Our Blogs</p>
  <p id="blog1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint asperiores, eaque culpa quis vel deserunt
    quasi autem nisi eligendi iure fuga ullam blanditiis incidunt provident assumenda inventore praesentium? Commodi
    doloremque qui totam, explicabo mollitia quo quos illo quam voluptas? At, animi fugit ad, similique facere quod
    aspernatur magni voluptate et necessitatibus quidem. Quis quisquam velit placeat, illum doloribus nulla esse
    aspernatur at quo laborum harum. Accusantium, eligendi. Quia, nam quo? <img src="img/Rectangle 34624661.png" alt=""
      srcset="" id="blog1img">
  <p id="blog2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt qui iure nemo labore. Officiis beatae
    sint dignissimos laboriosam cum reiciendis iure, obcaecati facere doloribus totam illo deleniti suscipit laudantium
    atque quos? Harum illo sequi ad, veritatis dolore incidunt recusandae earum tempora, reprehenderit blanditiis autem,
    amet odio expedita saepe vero magnam numquam voluptatem quasi eius voluptate placeat quisquam! Earum ducimus, id
    nulla, iusto facilis itaque, et voluptas officia impedit recusandae expedita?<img src="img/Rectangle 34624662.png"
      alt="" srcset="" id="blog2img">

  <p id="forms">Contact Us</p>
  <div class="contactform">
    <form action="">
      <input type="text" placeholder="First name" id="fname">
      <input type="text" placeholder="Last name" id="lname">
      <input type="email" placeholder="Email ID" id="emailid">
      <textarea name="" id="message" cols="30" rows="10" placeholder="Type your message"></textarea>

    </form>

  </div>
  <!--FOOTER-->

  <footer class="section-p1">
    <div class="col">
      <img class="logo" src="img/logo.png" alt="">
      <h4>Contact</h4>
      <p><strong>Phone:</strong> +91 9433616483 , +91 8910219329</p>
      <p><strong>Hours:</strong> 9am-9pm, Mon-Sat</p>
      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-twitter"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
    </div>

    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img src="img/app.jpg" alt="">
      </div>
      <div class="row1">
        <p>Secured Payment Gateways</p>
        <img src="img/ATM Cards.png" alt="">
      </div>

    </div>
    <div class="copyright">
      <p> © 2023, Rythmic Dreams - HTML CSS E-COMMERCE COMPANY</p>
    </div>
  </footer>
  </section>















<script>
  
function usericon(){
    console.log("hello");
    var usermenu = document.getElementById("dropdownMenu");
    if (usermenu.style.display==="none")
        {
            usermenu.style.display="block";
            usermenu.style.visibility="visible";
        }
    else 
    {
        usermenu.style.display="none"
        usermenu.style.visibility="hidden";
    }

}
</script>

</body>

</html>