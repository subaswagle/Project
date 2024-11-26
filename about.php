<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online shopping  Website | CodingNepal</title>
  <!-- Swiper JS CSS Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- FontAwesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <!-- CSS Link -->
  <link rel="stylesheet" href="about.css">
</head>
<body>
<?php include 'navbar.php' ?>
  <i id="close-menu-button" style="display: none;" class="fa-solid fa-xmark"></i>
  <i id="open-menu-button" style="display: none;" class="fa-solid fa-bars"></i>



  
  <!-- About Us Section -->
   <!-- first image -->
  <div class="image-container">
    <img src="image/store1.jpg" alt="Hamro Store">
    <div class="overlay-text">
        <h1>Hamro Store</h1>
        <a href="#about" class="learn-more">Learn more ></a>
    </div>
</div>
<!-- second image  -->
  <div class="about-us" id="about">
    <div class="about-img">
    <img src="image/store.jpg" alt="">
    </div>
        <div class="about-text-wrapper">
          <p class="about-description"><br><br><br><br>
          <h1 class="section-title">About Us</h1>
            At “Hamro Store” we make shopping easy and exciting.
             Our platform offers a wide variety of products,
              from trendy fashion and home essentials to the newest tech gadgets.
               Everything is easy to find and use thanks to our simple and user-friendly design.
               We use the latest technology to enhance your shopping experience.
               With smart recommendations and real-time updates, 
                shopping is smooth and enjoyable on any device.
              Try out features like augmented reality for a virtual look at products and
               enjoy secure payments and friendly customer support.
            Whether you are into the latest tech or just looking for a 
            straightforward and pleasant shopping experience, Hamro store is here to offer
             the best of both worlds.
          </p>
  </div>
</div>
  <!-- Testimonial Section -->
  <h1 class="section-title">Our Teams</h1>
  <div class="subas">
    
  <div class="subash">
              <img src="image/subash.jpg" alt="User" class="subash-image"><br>
              <h1 class="user-subash">Subash Wagle</h1>
              <h4>Admin</h4>
              <div class="subash-details">
                <p><p class="fa-regular fa-envelope"></p>subash@gmail.com</p>
                <p><p class="fas fa-phone"></p>9844125699</p>
</div>
            </div>
</div>

              </div>
          </div>
          
          <div class="swiper-pagination"></div>
          <div class="swiper-slider-btn swiper-button-prev"></div>
          <div class="swiper-slider-btn swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Linking Swiper JS Link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Linking custoom script -->
  <script src="about.js"></script>
<?php include 'footer.php' ?>
</body>
</html>