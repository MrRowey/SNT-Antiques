<html>
<head>
    <title>SNT Antiques & Auctions</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- StyleSheets -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Site Navigation -->
<nav class="w3-bar w3-right w3-blue">
    <a class="w3-bar-item w3-button" href="/index.php">Home</a>
    <a class="w3-bar-item w3-button" href="/about.php">About</a>
    <a class="w3-bar-item w3-button" href="/currentandnew.php">Current & New Stock</a>
    <a class="w3-bar-item w3-button" href="/auctionsandtheme.php">Auctions & Themedays</a>
</nav>

<!--  Main Content secion  -->
<main class="w3-container">
    <div class="w3-content w3-section" style="max-width:100%;">
        <img class="mySlides" src="/images/home/img1.jpg" alt="Imge 1" style="width:100%;">
        <img class="mySlides" src="/images/home/img2.jpg" alt="Imge 2" style="width:100%;">
        <img class="mySlides" src="/images/home/img3.jpg" alt="Imge 3" style="width:100%;">
    </div>
    <script>
        var myIndex = 0;
        carousel();

        function carousel(){
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++){
                x[i].style.display = "none";
            }
            myIndex++;
            if(myIndex > x.length){myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 5000); // change every 5 seconds
        }
    </script>

    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quidem repudiandae. Reiciendis labore fugiat facilis commodi. Reprehenderit facilis velit maxime ducimus. Quibusdam nobis dolorem explicabo consectetur sit quo, aliquid deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis recusandae minus corporis ad temporibus sunt eos inventore rerum aut aperiam, impedit iure, molestiae accusamus totam nemo dolores culpa provident. Lorem ipsum dolor sit amet 
    </p>
    <h1>Featuer Items</h1>
    <div class="w3-row">
        <div class="w3-col s4 w3-center w3-green ">
            <h4>Item Name</h4>
            <img src="/images/200px placeholder.webp" alt="">
            <p>Price: £1000</p>
            <a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-round">Want to purchase this Featuerd Item!</a>   
            <p></p>
        </div> 
        <div class="w3-col s4 w3-center w3-red">
            <h4>Item Name</h4>
            <img src="/images/200px placeholder.webp" alt="">
            <p>Price: £1000</p>
            <a onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-white w3-round">Want to purchase this Featuerd Item!</a>   
            <p></p>
        </div>
        <div class="w3-col s4 w3-center w3-orange">
            <h4>Item Name</h4>
            <img src="/images/200px placeholder.webp" alt="">
            <p>Price: £1000</p>
            <a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-white w3-round">Want to purchase this Featuerd Item!</a>   
            <p></p>    
        </div>    
    </div>

<!-- Featuerd Stock -->

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    <h2>How to Purchase</h2>
    </header>
    <div class="w3-container">
      <P>Item Name:</P>
      <p>Item ID:</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id you wish purchase</P>
    </footer>
  </div>
</div>

<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <h2>How to Purchase</h2>
    </header>
    <div class="w3-container">
      <P>Item Name:</P>
      <p>Item ID:</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id you wish purchase</P>
    </footer>
  </div>
</div>

<div id="id03" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    <h2>How to Purchase</h2>
    </header>
    <div class="w3-container">
      <P>Item Name:</P>
      <p>Item ID:</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id you wish purchase</P>
    </footer>
  </div>
</div>


</main>
<footer class="w3-container w3-gray w3-bottom">
    <div class="w3-row">
        <div class="w3-col s6 w3-center"><p>SNT Antiques & Actions <br>9213 Church Road <br> ROCHESTER <br> ME53 2HL</p></div>
        <div class="w3-col s6 w3-center"><p>Tel: 01743568324 <br><br> Email: SN-Sales@SNT.com</p></div>
    </div>
    <div w3-row>
    <div class="w3-col s6 w3-center"><p>Copyright of SNT Antiques & Auctions 2022</p></div>
    <div class="w3-col s6 w3-center" ><a href="/admin/home.php">Admin Login</a></div>
    </div>
</footer>
</html>