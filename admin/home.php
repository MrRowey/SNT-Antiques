<?php 
## get images here https://www.sellingantiques.co.uk/t/antique-seals/
?>
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
    <a class="w3-bar-item w3-button" href="/auctionsandtheme.php">Add Data</a>
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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quidem repudiandae. Reiciendis labore fugiat facilis commodi. Reprehenderit facilis velit maxime ducimus. Quibusdam nobis dolorem explicabo consectetur sit quo, aliquid deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis recusandae minus corporis ad temporibus sunt eos inventore rerum aut aperiam, impedit iure, molestiae accusamus totam nemo dolores culpa provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cum laborum beatae repudiandae officiis excepturi obcaecati hic, illo quibusdam officia quas, culpa omnis! Corporis accusantium minus velit sed, a nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, odio illum laudantium veniam quas praesentium cumque voluptatum itaque veritatis eaque expedita nihil alias velit facere corrupti provident soluta adipisci impedit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, molestias cupiditate asperiores veritatis repellendus vitae laudantium quos blanditiis reiciendis! Assumenda maiores optio dolor nobis laboriosam corporis aliquam porro nostrum veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi necessitatibus debitis ad dolores provident repellendus odit aut, omnis, incidunt magni repudiandae adipisci id dolore voluptas doloremque. Debitis assumenda quas officia.
    </p>
    <h1>Featuer Items</h1>
    <div w3-row>
        <div class="w3-col s4 w3-center w3-green"><p>Item 1</p></div>        
        <div class="w3-col s4 w3-center w3-red"><p>Item 1</p></div>
        <div class="w3-col s4 w3-center w3-orange"><p>Item 1</p></div>    
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