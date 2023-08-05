<?php
session_start();

if(isset($_POST['addItem'])) {
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemImage = $_POST['itemImage'];

        $_SESSION['products'][] = array(
            'itemName' => $itemName,
            'itemPrice' => $itemPrice,
            'itemDesc' => $itemDesc,
            'itemImage' => $itemImage,
        );
    
    }

if(isset($_POST['clear'])) {
    unset($_SESSION['products']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css%22/%3E">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <!----------------------------------------------- NavBar ----------------------------------------------->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Foody</label>
        <ul>
            <li><a class="active" href="#addProduct">Add Product</a></li>
            <li><a href="./view_products.php">View Products</a></li>
        </ul>
    </nav>
    <!--//////////////////////////////////////////// END Of Nav ////////////////////////////////////////////-->

	<!----------------------------------------------- Header ----------------------------------------------->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="./images/image1.jpg">
            <div id="addProduct"  class="text">Restaurant</div>
        </div>

        <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="./images/image2.jpg">
            <div class="text">Restaurant</div>
        </div>

        <div class="mySlides fade">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="./images/image3.jpg">
            <div class="text">Restaurant</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <!--//////////////////////////////////////////// END Of Header ////////////////////////////////////////////-->
    
    <!----------------------------------------------- Body ----------------------------------------------->
    <div class="container">
        <div class="itemForm">
            <form action="" method="post" >
                <h3>Add New Product : </h3>

                <input type="text" placeholder="Product Name" name="itemName" class="box" required>
                <input type="number" placeholder="Product Price" name="itemPrice" class="box" required>
                <input type="text"  placeholder="Product Details"  name="itemDesc" class="box" required> 
                <input type="file" name="itemImage" class="box" required >
                <input type="submit" class="btn" name="addItem" value="Add">

            </form>
        </div>
    </div>



<form class="clear-session" method='POST'><input type='submit' name='clear' value='Clear' class="btn"></form>



    <div class="itemDetails">
        <table class="itemDetails">
            <!-- <h1>Product Table</h1> -->
        <thead>
            <tr>
                <th>Image</th>       
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['addItem']) && $_POST['addItem'] == true){
                header('Location:add_products.php');
                exit;
            }
            if(isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $product) {
                    echo '<tr>';
                    echo '<td><img src="' ."images/" . $product['itemImage']  . '" alt="Item Image" class="itemImage"></td>';
                    echo '<td>' . $product['itemName'] . '</td>';
                    echo '<td>' . $product['itemPrice'] . '</td>';
                    echo '<td>' . $product['itemDesc'] . '</td>';
                    echo '</tr>';
                    
                }
            } else {
                echo '<tr><td colspan="4">No Product Available</td></tr>';
            }
            ?>       
            </tbody>
        </table>
    </div>

    <div class="detail">
        <a href="./view_products.php" class="btn"> Show all Product</a>
    </div>
    <!--///////////////////////////////////////// END Of Body /////////////////////////////////////////-->
    
    <!----------------------------------------------- Footer ----------------------------------------------->
    <footer class="footer">
        <div class="containerf">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Burger</a></li>
                        <li><a href="#">Shawrma</a></li>
                        <li><a href="#">BBQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/qasemzo3bii/" target= "_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/qasemzo3bii/" target= "_blank" ><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/qasem-zo3bi/" target= "_blank" ><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/qasemzoubii"  target= "_blank" ><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--///////////////////////////////////////// END Of Footer /////////////////////////////////////////-->
    
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>

</body>
</html>