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
    <div class="w3-content w3-center w3-section" style=" max-width:100%;">
        <img src="/images/home.jpg" style="width:75%;">/
    </div>
    <h1>SNT Antiques & Auctions</h1>
    </p>
    <h1>Featuer Items</h1>
    <div class="w3-row">
        <div class="w3-col s4 w3-center">
            <h4>Watercolor Painting</h4>
            <img src="/images/feature/watercolor.jpg" alt="">
            <p>Price: £450</p>
            <a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this Featuerd Item!</a>   
            <p></p>
        </div> 
        <div class="w3-col s4 w3-center">
            <h4>India Tea Set</h4>
            <img src="/images/feature/teasent.jpg" alt="">
            <p>Price: £1,200</p>
            <a onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this Featuerd Item!</a>   
            <p></p>
        </div>
        <div class="w3-col s4 w3-center">
            <h4>20th Centery Cabinet</h4>
            <img src="/images/Auctions/cabinet.jpg" alt="">
            <p>Price: £659</p>
            <a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this Featuerd Item!</a>   
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
      <P>Item Name: WaterColor painting</P>
      <p>Item ID: #345</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id & Item Name you wish purchase</P>
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
      <P>Item Name: India Tea Set</P>
      <p>Item ID: #657</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id & Item Name you wish purchase</P>
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
      <P>Item Name: 20th Centery Cabinet</P>
      <p>Item ID: #003</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id you wish purchase</P>
    </footer>
  </div>
</div>


</main>
<footer class="w3-container w3-gray">
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