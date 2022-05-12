<?php 
    $waiting_day = 1653251536;
    $time_left = $waiting_day - time();

    $days = floor($time_left / (60*60*24));
    $time_left %= (60 * 60 * 24);

    $hours = floor($time_left / (60 * 60));
    $time_left %= (60 * 60);

    $min = floor($time_left / 60);
    $time_left %= 60;

    $sec = $time_left;

?>
<html>
<head>
    <title>Auctions & Theme Days</title>
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
  <h1>Theme Days</h1>
  <table class="w3-table">
    <tr>
      <th class="w3-center">Summer</th>
      <th class="w3-center">Spring</th>
      <th class="w3-center">Autumn</th>
      <th class="w3-center">Winter</th>
    </tr>
    <tr>
      <td class="w3-center"><img style="max-width:200px;" src="/images/theme/summer.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:200px;" src="/images/theme/spring.jpg " alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:200px;" src="/images/theme/autumn.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:200px;" src="/images/theme/winter.jpg" alt="placeholder"></td>
    </tr>
    <tr>
      <td class="w3-center">Date of event: 1st June</td>
      <td class="w3-center">Date of event: 1st March</td>
      <td class="w3-center">Date of event: 1st September</td>
      <td class="w3-center">Date of event: 1st December</td>
    </tr>
  </table>
  <h1>Current Auctions</h1>
  <table class="w3-table">
    <tr>
      <td class="w3-center"><img style="max-width:350px;" src="/images/Auctions/cabinet.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px;" src="/images/stock/train.jpg" alt="placeholder"></td>
      <td class="w3-center"><img style="max-width:350px;" src="/images/stock/pantingB.jpg" alt="placeholder"></td>
    </tr>
    <tr>
      <td class="w3-center">Current Time Left: <br> <?php echo "$days days $hours hours $min min $sec sec left"?></td>
      <td class="w3-center">Current Time Left: <br><?php echo "$days days $hours hours $min min $sec sec left"?></td>
      <td class="w3-center">Current Time Left: <br><?php echo "$days days $hours hours $min min $sec sec left"?></td>
    </tr>
    <tr>
      <td class="w3-center"><a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-round">Want to place a bid!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Want to place a bid!</a></td>
      <td class="w3-center"><a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-round">Want to place a bid!</a></td>
    </tr>
    <tr>
      <td class="w3-center">Current Price: £335</td>
      <td class="w3-center">Current Price: £800</td>
      <td class="w3-center">Current Price: £4,500</td>
    </tr>
  </table>


<!-- Current Auctions -->

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
      <P>Please Ring our number and quote the Item Id you wish to bid on.</P>
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
      <P>Please Ring our number and quote the Item Id you wish to bid on.</P>
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
      <P>Item Name: 20th Centery painting</P>
      <p>Item ID: #568</p>
    </div>
    <footer class="w3-container w3-teal">
      <P>Please Ring our number and quote the Item Id you wish to bid on.</P>
    </footer>
  </div>
</div>



</main>
<footer class="w3-container w3-gray w3-bottom">
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