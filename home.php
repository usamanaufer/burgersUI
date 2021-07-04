<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Fav-icon-->
    <link rel="shortcut icon" href="images/fav.png">
</head>
<body>
    
    <section class="main">
        <!--Navigation-->
        <nav>
            <a href="#" class="logo"><img src="./images/logo-new.png" alt="logo"></a>
            <!--Menu-->
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Notices</a></li>
                <li><a href="#">Team</a></li>
                <a href="logout.php" class="main-login">Logout</a>
            </ul>
            <h1 class="welcomename">Hello, <?php echo $_SESSION['name']; ?></h1>
        </nav>
        <!--Main-text-->
        <div class="home-content">
            <div class="home-text">
                <p>NO.01 DELIEVERY SERVICES SNAP KITCHEN</p>
                <h1>Taste the <span class="redtext">Best</span> that Suprise you.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.</p>
                <a href="#" class="main-btn">Contact Us</a>
            </div>
            <div class="home-img">
                <img src="./images/main.png" alt="">
            </div>
        </div>
        </div>
    </section>
    <section id = "about" class = "about container section-py">
        <div class = "about-left" data-aos = "fade-right">
          <!-- title -->
          <div class = "title">
            <h4>read our story</h4>
            <h2>we've been making <span class="redtext">Delicious</span> food since 2000</h2>
          </div>
          <!-- end of title -->
          <p class = "para-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora necessitatibus corrupti beatae in deserunt dolor possimus optio commodi officia nostrum delectus obcaecati, modi eaque pariatur sint sit odit quos blanditiis?
          </p>
          <p class = "para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione accusamus deserunt totam molestias, itaque nihil vel at doloribus dolor libero cupiditate nisi? Unde ducimus esse voluptates deleniti vel!</p>
        </div>
  
        <div class = "about-right" data-aos = "fade-left">
          <img src = "./images/burger.png" alt = "chef image">
        </div>
      </section>
      <!-- end of about -->
    <div class = "products">
        <div class = "container">
            <h1 class = "lg-title">Special Burger With Offers</h1>
            <p class = "text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium. Temporibus, quis cum.</p>

            <div class = "product-items">
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/frenchfries.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Snacks & Sides</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "product.html" class = "product-name">Medium World Famous Fries</a>
                        <p class = "product-price">Rs. 700</p>
                        <p class = "product-price">Rs. 525</p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/veg_burger.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Burgers</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Veg Paneer Burger</a>
                        <p class = "product-price">Rs. 400</p>
                        <p class = "product-price">Rs. 350</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/pizza.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Pizza</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Tandoori Cheese Chicken Pizza</a>
                        <p class = "product-price">Rs. 2500</p>
                        <p class = "product-price">Rs. 2300</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/burger.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Burgers</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Quarter Pounder with Chicken & Cheese</a>
                        <p class = "product-price">Rs. 800</p>
                        <p class = "product-price">Rs. 600</p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/frenchfries.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Snacks & Sides</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Medium World Famous Fries</a>
                        <p class = "product-price">Rs. 700</p>
                        <p class = "product-price">Rs. 525</p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/veg_burger.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Burgers</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Veg Paneer Burger</a>
                        <p class = "product-price">Rs. 400</p>
                        <p class = "product-price">Rs. 350</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/burger.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Burgers</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Quarter Pounder with Chicken & Cheese</a>
                        <p class = "product-price">Rs. 800</p>
                        <p class = "product-price">Rs. 600</p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "images/pizza.png" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Pizza</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name">Tandoori Cheese Chicken Pizza</a>
                        <p class = "product-price">Rs. 2500</p>
                        <p class = "product-price">Rs. 2300</p>
                    </div>
                </div>
                <!-- end of single product -->
                
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>