<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="images/babapizzalogoguram.png" />

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Über uns</h3>
   <p><a href="index.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/baba pizza service.png" alt="">
      </div>

      <div class="content">
         <h3>Warum sollten Sie sich für uns entscheiden?</h3>
         <p>Wir liefern alles in hoher Qualität und in gutem Tempo, so dass Sie sich in diesem Moment um nichts kümmern müssen, da alles, was Sie im Kopf haben, der Moment der Freude ist.</p>
         <a href="menu.php" class="btn">Unsere Speisekarte</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Einfache Schritte</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step1-1.png" alt="">
         <h3>Wählen Sie Reihenfolge</h3>
         <p>Wählen Sie einen Artikel Ihrer Wahl, da wir Ihre Bestellung durchsehen und mit Sorgfalt für Sie liefern werden.</p>
      </div>

      <div class="box">
         <img src="images/step2-2.png" alt="">
         <h3>Schnelle Lieferung</h3>
         <p>Wir werden unser Bestes geben, um Ihnen das Essen so schnell wie möglich mit all unseren Bemühungen zu liefern.</p>
      </div>

      <div class="box">
         <img src="images/step3-3.png" alt="">
         <h3>Genieße das Essen</h3>
         <p>Wir hoffen, dass Sie das Essen mit all der Sorgfalt genießen, die wir darauf legen, und vergessen Sie nicht, Ihre ehrliche Bewertung für uns zu hinterlassen!</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">rezensionen</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <p>Schneller als gedacht ! Und Heiss auch noch! Der Pizzaboden ist ewas dicker als gewohnt...</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Michael Weitz</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <p>Alles super, wie immer!!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Katharina Hlavaćek</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/user-icon.png" alt="">
            <p>Top</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Johann Kloß</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>