<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

        <!-- font awesome cdn link -->
         <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">

           <!-- swiper css link -->
           <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
          
         <!-- custom css file link -->
         <link rel="stylesheet" href="css/style.css">


</head>
<body>


<div class="container">

<?php @include 'header.php';  ?>


<section class="home">

    <div class="swiper home-slider">
       <div class="swiper-wrapper">

       <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
       <div class="content">
        <h3>Plan Your Event!</h3>
        <p>Photography is the art of freezing moments and telling stories with light. It's a powerful medium that captures emotions and transforms ordinary scenes into extraordinary visual narratives, allowing us to connect and appreciate the beauty of the world.</p>
        <a href="about.php" class="btn">discover more</a>
       </div>
       </div>



       <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
       <div class="content">
        <h3>Plan Your Event!</h3>
        <p>Photography is the art of freezing moments and telling stories with light. It's a powerful medium that captures emotions and transforms ordinary scenes into extraordinary visual narratives, allowing us to connect and appreciate the beauty of the world.</p>
        <a href="about.php" class="btn">discover more</a>
       </div>
       </div>



       <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
       <div class="content">
        <h3>Plan Your Event!</h3>
        <p>Photography is the art of freezing moments and telling stories with light. It's a powerful medium that captures emotions and transforms ordinary scenes into extraordinary visual narratives, allowing us to connect and appreciate the beauty of the world.</p>
        <a href="about.php" class="btn">discover more</a>
       </div>
       </div>











       </div>
       <div class="swiper-pagination"></div>
    </div>
</section>


<section class="services">
  <h1 class="heading">our services</h1>

  <div class="swiper service-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <img src="images/service-1.jpg" alt="">
        <div class="content">
        <h3>Photograpy</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame. </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>






      <div class="swiper-slide slide">
        <img src="images/service-2.jpg" alt="">
        <div class="content">
        <h3>Wedding</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame.  </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>





      <div class="swiper-slide slide">
        <img src="images/service-3.jpg" alt="">
        <div class="content">
        <h3>Portrait</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame.  </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>




      <div class="swiper-slide slide">
        <img src="images/service-4.jpg" alt="">
        <div class="content">
        <h3>Wild Life</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame.  </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>





      <div class="swiper-slide slide">
        <img src="images/service-5.jpg" alt="">
        <div class="content">
        <h3>Sports</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame.  </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>




      <div class="swiper-slide slide">
        <img src="images/service-6.jpg" alt="">
        <div class="content">
        <h3>landscape</h3>
        <p>Photography freezes moments, capturing the beauty and storytelling in a single frame. </p>
        <a href="about.php" class="btn">about us</a>
        </div>
      </div>







    </div>

    <div class="swiper-pagination"></div>


  </div>


</section>


<?php @include 'footer.php';  ?>


<div>













 <!-- custom js link -->
 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



 <!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>    
