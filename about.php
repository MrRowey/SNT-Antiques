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

    <!-- StyleSheets -->
    <link rel="stylesheet" href="/css/nav.css" type="text/css">
    <link rel="stylesheet" href="/css/footer.css" type="text/css">
    <link rel="stylesheet" href="/css/about.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <!-- Adding FontAwesome Scrips-->
    <script src="https://kit.fontawesome.com/f5f2392733.js" crossorigin="anonymous"></script>
    
</head>
<nav class="main-nav">
    <a href="/login.php">SignIn <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
    <a href="/newlisting.php">New Listings</a>
    <a href="/auctions.php">Auctions</a>
    <a href="/about.php">About</a>
    <a href="/index.php">Home <i class="fa-solid fa-house"></i></a>
    <img src="/images/logo/logo.png" class="logo">
</nav>
<main class="grid_container_about">
    <img class="about-img" src="/images/Banner placeholder.webp" alt="Image">
    <h2 class="about-h2"> Who we are</h2>
    <p class="about-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat delectus facilis explicabo consequuntur, blanditiis dolorum voluptates exercitationem similique, aspernatur repellendus ipsa aut beatae accusamus iure laudantium quo magni, nostrum illum.</p>

</main>
<footer class="main-footer">
   <p class="grid-item1">SNT Antiques & Actions <br>9213 Church Road <br> ROCHESTER <br> ME53 2HL</p>
   <p class="grid-item2"> <i class="fa-solid fa-copyright"></i> Copyright of SNT Antiques & Auctions 2022</p>
   <p class="grid-item3"><i class="fa-solid fa-phone-flip"></i> Tel: 01743568324</p>
</footer>
</html>