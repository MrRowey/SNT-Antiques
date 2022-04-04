<?php 
        $conn = new mysqli('localhost','SNT_Info','I[gRTDcUmH[K6FSG','snt');

        if($conn->connect_error) {
            die("connecion failid: " . $conn->connect_error);
        }

        $sql = "SELECT userId, username, email FROM users";
        $result = $conn->query($sql); 
?>
<html>
<head>
    <title>SNT Antiques & Auctions</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- StyleSheets -->
    <link rel="stylesheet" href="/css/nav.css" type="text/css">
    <link rel="stylesheet" href="/css/footer.css" type="text/css">
    <link rel="stylesheet" href="/css/home.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <!-- Adding FontAwesome Scrips-->
    <script src="https://kit.fontawesome.com/f5f2392733.js" crossorigin="anonymous"></script>
    
</head>
<!-- Site Navigation -->
<nav class="main-nav">
    <a href="/login.php">SignIn <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
    <a href="/addlisting.php">Add Listings</a>
    <a href="/auctions.php">Auctions</a>
    <a href="/about.php">About</a>
    <a href="/index.php">Home <i class="fa-solid fa-house"></i></a>
    <img src="/images/logo/logo.png" class="logo">
</nav>

<!--  Main Content secion  -->
<main class="gridContainerHome">
    <div class="main-slideshow">
            <!-- Setting the images -->
        <div class="picture fade">
            <img src="/images/home/img1.jpg" alt="Imge 1" style="width:100%;">
        </div>

        <div class="picture fade">
            <img src="/images/home/img2.jpg" alt="Imge 2" style="width:100%;">
        </div>

        <div class="picture fade">
            <img src="/images/home/img3.jpg" alt="Imge 3" style="width:100%;">
        </div> 
    </div><br>
    <div>
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("picture");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1;}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); 
        }
    </script>

    <h1>Home</h1>
</main>
<footer class="main-footer">
   <p class="grid-item1">SNT Antiques & Actions <br>9213 Church Road <br> ROCHESTER <br> ME53 2HL</p>
   <p class="grid-item2"> <i class="fa-solid fa-copyright"></i> Copyright of SNT Antiques & Auctions 2022</p>
   <p class="grid-item3"><i class="fa-solid fa-phone-flip"></i> Tel: 01743568324</p>
</footer>
</html>