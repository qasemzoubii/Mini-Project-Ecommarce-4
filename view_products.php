<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Items Page</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css%22/%3E">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <!----------------------------------------------- NavBar ------------------------------------------------------>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Foody</label>
        <ul>
            <li><a href="./add_products.php">Add Product</a></li>
            <li><a class="active" href="./view_products.php">View Products</a></li>
        </ul>
    </nav>
    <!--//////////////////////////////////////////// END Of Nav ////////////////////////////////////////////-->

    <!----------------------------------------------- Body ----------------------------------------------->

    <div class="container">
        <div class="card-container">
            <?php
            if (isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $product) {
                    echo '<div class="card">';
                    echo '<img src="' ."images/" . $product['itemImage']  . '" alt="Item Image"" class="card-image">';
                    echo '<div class="card-content">';
                    echo '<h3>' . $product['itemName'] . '</h3>';
                    echo '<p>Price: ' . $product['itemPrice'] . '</p>';
                    echo '<p>' . $product['itemDesc'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No Product Available</p>';
            }
            ?>
        </div>
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
                        <a href="https://github.com/qasemzoubii" target= "_blank" ><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--///////////////////////////////////////// END Of Footer /////////////////////////////////////////-->

</body>
</html>