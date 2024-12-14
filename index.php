<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="assets/ic/mmrestro.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>MM Restro</title>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar active">
            <div class="side-main">
                <ul class="menu">
                    <a href="/">
                        <li class="menu-item  active">
                            <img src="assets/ic/dashboard-icon.svg" alt="Dashboard Icon"> Home
                        </li>
                    </a>
                    <a href="">
                        <li class="menu-item">
                            <img src="assets/ic/food-order-icon.svg" alt="Food Order Icon"> Food Order
                        </li>
                    </a>
                    <a href="fav.php">
                        <li class="menu-item">
                            <img src="assets/ic/fav-icon.svg" alt="Favorite Icon"> Favorite
                        </li>
                    </a>
                    <a href="">
                        <li class="menu-item">
                            <img src="assets/ic/massage-icon.svg" alt="Message Icon"> Message
                        </li>
                    </a>
                    <a href="">
                        <li class="menu-item">
                            <img src="assets/ic/order-history.svg" alt="Order History Icon"> Order History
                        </li>
                    </a>
                    <a href="">
                        <li class="menu-item">
                            <img src="assets/ic/Bills.svg" alt="Bills Icon"> Bills
                        </li>
                    </a>
                    <a href="">
                        <li class="menu-item">
                            <img src="assets/ic/Setting.svg" alt="Settings Icon"> Setting
                        </li>
                    </a>

                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main">
            <header class="header">
                <div class="tool">
                    <div class="menu-btn">
                        <img src="assets/ic/menu.svg" alt="Menu Button" id="menu-button">
                        <div class="lottie" id="lottie-container"></div>
                    </div>
                    <div class="search-box">
                        <img src="assets/ic/magnifier.svg" alt="Search Icon" class="search-icon">
                        <input type="text" placeholder="" id="search-input">
                        <div class="suggestions" id="suggestions"></div> <!-- Search suggestions container -->
                    </div>

                    <div class="user-action">
                        <?php if (!isset($_SESSION['user_id'])): ?>
                            <!-- User not logged in -->

                            <button class="get-started-btn" id="get-started" onclick="redirectToLogin()">Get
                                Started</button>
                        <?php else: ?>
                            <!-- User logged in -->
                            <img class="bell-svg" src="assets/ic/notification.svg" alt="Notification">
                            <div class="user-profile">
                                <img src="assets/img/default-dp.jpg" alt="Profile" style="cursor: pointer;"
                                    onclick="togglePopup()">
                                <div class="profile-popup" id="profilePopup">
                                    <ul>
                                        <li><a href="profile.php">View Profile</a></li>
                                        <li><a href="settings.php">Settings</a></li>
                                        <li><a href="php/logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </header>
            <!-- banner -->
            <div class="banner">
                <img src="assets/ic/banner.png" alt="">
            </div>
            <div class="cate-card">
                <div class="cate-name">
                    <h3>Category</h3>

                    <a class="va-btn" href="">View all <img src="assets/ic/chevron-down.svg" alt=""></a>
                </div>
                <div class="category-list">
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Baked.svg" alt="">
                        <span>Bakery</span>
                    </div>
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Burger.svg" alt="">
                        <span>Burger</span>
                    </div>
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Coffee.svg" alt="">
                        <span>Coffee </span>
                    </div>
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Chicken.svg" alt="">
                        <span>Chicken </span>
                    </div>
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Fast.svg" alt="">
                        <span>Pizza</span>
                    </div>
                    <!-- grid item -->
                    <div class="category">
                        <img src="assets/ic/Fish.svg" alt="">
                        <span>SeaFood</span>
                    </div>
                </div>
            </div>
            <!-- Menu Items -->
            <div class="cate-name">
                <h3>Popular Dishes</h3>
                <a class="va-btn" href="">View all <img src="assets/ic/chevron-down.svg" alt=""></a>

            </div>
            <section class="menu-grid">
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
                <!-- Example Card -->
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/premium-photo/tasty-burgur-white-background_1000714-429.jpg"
                            alt="Fish Burger">
                        <div class="favorite-btn"><img src="assets/ic/like.svg" alt=""></div>
                    </div>
                    <h3 class="restaurant-name">Fast Food Resto</h3>
                    <div class="menu-item-name"><img src="assets/ic/Star.svg" alt=""><span>5.0 • 1K+ Reviews</span>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="footer-left">
                            <span class="item-name">Fish Burger</span>
                            <span class="price"><span class="yellow">₹</span>5.59</span>
                        </div>
                        <button class="add-btn"><img src="assets/ic/add.svg" alt=""></button>
                    </div>
                </div>
            </section>

            <!-- Pagination -->
            <footer class="pagination">

            </footer>
        </main>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.0/lottie.min.js"></script>

    <script>
        const logoAnimation = lottie.loadAnimation({
            container: document.getElementById('lottie-container'), // ID of the container element
            renderer: 'svg', // Can be 'svg', 'canvas', or 'html'
            loop: true, // Set to true if the animation should loop
            autoplay: true, // Set to true if the animation should start automatically
            path: 'assets/animation/logo.json' // Path to your animation JSON file
        });

    </script>
</body>
<div class="loading-pop">
    <div class="blur-background">
        <div class="anim" id="loading"></div>
    </div>
</div>
<style>
    .loading-pop {
        position: fixed;
        /* Fix the position to the whole screen */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        /* Semi-transparent background */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        /* Ensure it appears above all other content */
    }

    /* Blurred background effect */
    .loading-pop .blur-background {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(.5px);
        /* Adjust blur value as needed */
        background-color: rgba(255, 249, 185, 0.925);
        /* Optional: semi-transparent background */
    }

    /* Lottie animation container */
    .loading-pop .anim {
        width: 70px;
        /* Adjust size of the animation */
    }
</style>

<script>
    // Lottie animation setup
    const anianimation = lottie.loadAnimation({
        container: document.getElementById('loading'), // Container element
        renderer: 'svg', // Animation type
        loop: true, // Loop the animation
        autoplay: true, // Autoplay animation when loaded
        path: 'assets/animation/loading.json' // Path to the animation JSON file
    });

    // Optional: Hide the loading animation after a certain period
    window.onload = function () {
        setTimeout(function () {
            document.querySelector('.loading-pop').style.display = 'none'; // Hide loading after 3 seconds
        }, 1000); // Adjust time as needed
    };
</script>

</html>