<html>
<head>
    <title>SNT Login</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css" type="text/css">

    <!-- Adding FontAwesome Scrips-->
    <script src="https://kit.fontawesome.com/f5f2392733.js" crossorigin="anonymous"></script>
    
</head>
<header>
    <img src="/assets/images/logo/logo.png" alt="logo" class="logo">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav class="nav-main">
        <ul>
            <li>
                <a href="/index.html">
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

<div class="content grid-container">
    <form class="login" action="login.php" method="get">
        <label for="uname">Username:</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="pword">Password:</label><br>
        <input type="password" name="pword" id="pword"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">
    </form>    
    <?php
// Linking the Database
$link =  mysqli_connect("localhost", "website", "foo", "website");

// connection check
if($link === false){
    die("Error: Could not connect. " . mysqli_connect_error());
}

$user_name = mysqli_real_escape_string($link,$_REQUEST['uname']);
$password = mysqli_real_escape_string($link,$_REQUEST['pword']);
$email = mysqli_real_escape_string($link,$_REQUEST['email']);

// attemtping to added input to db
$sql = "INSERT INTO users (username, password, email) VALUES ('$user_name','$password','$email')";
if(mysqli_query($link, $sql)){
    echo "Recored Added";
} else {
    echo "Error: could not execure $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link)
?>



</div>

<footer>

</footer>
</html>