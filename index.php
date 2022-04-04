<html>
    <?php 
        $dbhost = 'localhost';
        $dbuser = 'website';
        $dbpass = 'foo';
        $dbname = 'website';

        $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

        if($conn->connect_error) {
            die("connecion failid: " . $conn->connect_error);
        }

        $sql = "SELECT userId, username, email FROM users";
        $result = $conn->query($sql); 
    ?>
<head>
    <title>SNT Antiques & Auctions</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="/Uni/assets/css/style.css" type="text/css">

    <!-- Adding FontAwesome Scrips-->
    <script src="https://kit.fontawesome.com/f5f2392733.js" crossorigin="anonymous"></script>
    
</head>
<header>
    <a href="/index.php"><img src="/Uni/assets/images/logo/logo.png" alt="logo" class="logo"></a>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav class="nav-main">
        <ul>
            <li>
                <a href="/index.php">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li> 
            <li><a href="/pages/about.html">About</a></li> 
            <li><a href="/pages/items.html">Listings</a></li>
            <li><a href="/pages/items.html">New Items</a></li>
            <li><a href="/pages/contact_us.html">Contact</a></li>
            <li>
                <a href="/pages/login.html">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login                       
                </a>
            </li> 
        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-lable">
        <span></span>
    </label>
</header>

<div class="content">
    <p>  <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "User ID: " . $row["userId"] . " - Username: " . $row[" -username"] . "Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?> </p>
       
    
    <h2 class="title"></h2>
</div>

<footer>

</footer>
</html>