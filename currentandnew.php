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
  <h1>Current Stock</h1>
  <table class="w3-table">
    <tr>
      <td class="w3-center"><img style="max-width:350px;" src="/images/stock/warmedales.JPG" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px;" src="/images/stock/book.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px;" src="/images/stock/jelrey.jpg" alt="placeholder"></td>
    </tr>
    <tr>
      <td class="w3-center"><a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
    </tr>
    <tr>
      <td class="w3-center">Current Price: £300</td>
      <td class="w3-center">Current Price: £900</td>
      <td class="w3-center">Current Price: £450</td>
    </tr>
  </table>
  <h1>New Arrivals</h1>
  <table class="w3-table">
    <tr>
      <td class="w3-center"><img style="max-width:350px" src="/images/stock/gameset.JPG" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px" src="/images/stock/persianrung.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px" src="/images/stock/toytruck.jpg" alt="placeholder"></td>
    </tr>
    <tr>
      <td class="w3-center"><a onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-green w3-round">Want to purchase this item!</a></td>
    </tr>
    <tr>
      <td class="w3-center">Current Price: £335</td>
      <td class="w3-center">Current Price: £800</td>
      <td class="w3-center">Current Price: £4,500</td>
    </tr>
  </table>

<!-- Current Stock -->

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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

<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <h2>How to Purchase</h2>
    </header>
    <div class="w3-container">
      <P>Item Name: Hornby Train Mint Condiciton</P>
      <p>Item ID: #339</p>
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

<!-- Current Stock -->

<div id="id04" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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

<div id="id05" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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

<div id="id06" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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
<footer class="w3-container w3-gray">
    <div class="w3-row">
        <div class="w3-col s6 w3-center"><p>SNT Antiques & Actions <br>9213 Church Road <br> ROCHESTER <br> ME53 2HL</p></div>
        <div class="w3-col s6 w3-center"><p>Tel: 01743568324</p></div>
    </div>
    <div w3-row>
    <div class="w3-col s6 w3-center"><p>Copyright of SNT Antiques & Auctions 2022</p></div>
    <div class="w3-col s6 w3-center" ><a href="/admin/home.php">Admin Login</a></div>
    </div>
</footer>
</html>