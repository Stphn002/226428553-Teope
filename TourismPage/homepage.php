<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intayu homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Intayu</h1>
            </div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">Experiences</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Discover The Cordilleras</h2>
            <p>Book tours packages, activities, and more with ease</p>
            <form class="search-form">
                <input type="text" placeholder="Search for tour packages..." id="search">
                <button type="submit">Search</button>
            </form>
        </div>
    </section>

    <section class="featured">
        <h2>Welcome to the Different Provinces of CAR</h2>
        <div class="featured-items">
            <div class="featured-item">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/3e/ef/23/img-20180305-162115-largejpg.jpg?w=1200&h=-1&s=1" alt="Experience 1">
                <h3>Baguio City</h3>
                <p>Explore the best of Baguio with this amazing city tour.</p>
                <a href="baguio.php">
                    <button>Book Now</button>
                </a>
            </div>
            <div class="featured-item">
                <img src="https://hiketomountains.com/wp-content/uploads/2022/05/Northern-Blossom-Day-Tour-9-1024x768.jpg" alt="Experience 2">
                <h3>Benguet</h3>
                <p>Be one with the mountain and clouds in Benguet!</p>
                <a href="benguet.php">
                    <button>Book Now</button>
                </a>
            </div>
            <div class="featured-item">
                <img src="https://www.travel-tramp.com/wp-content/uploads/2019/11/Hanging-Coffins-Sagada.jpg" alt="Experience 3">
                <h3>Mt. Province</h3>
                <p>See the Hanging Coffins in Sagada!</p>
                <button>Book Now</button>
            </div>
            <div class="featured-item">
                <img src="https://pinaywise.com/wp-content/uploads/2024/01/Banaue-Rice-Terraces-Ifugao.jpg" alt="Experience 3">
                <h3>Ifugao</h3>
                <p>Be Mesmerized By The Rice Terraces of Banaue!</p>
                <button>Book Now</button>
            </div>
            <div class="featured-item">
                <img src="https://mediaim.expedia.com/destination/2/b072d17166c25b5aecc1d11bedc0249e.jpg" alt="Experience 3">
                <h3>Abra</h3>
                <p>Flow Like The Waterfalls in Abra!</p>
                <button>Book Now</button>
            </div>
            <div class="featured-item">
                <img src="https://live.staticflickr.com/4153/4985729507_eafd18e59c_b.jpg" alt="Experience 3">
                <h3>Kalinga</h3>
                <p>Experience The Rich Culture in Kalinga!</p>
                <button>Book Now</button>
            </div>
            <div class="featured-item">
                <img src="https://ik.imagekit.io/tvlk/blog/2023/08/shutterstock_261963620.jpg?tr=dpr-2,w-675" alt="Experience 3">
                <h3>Apayao</h3>
                <p>Have a Feast with Apayao's Corn, Coffee, Root Crops, and Vegetables!</p>
                <button>Book Now</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Intayu. All rights reserved.</p>
        </div>
    </footer>

    <script src="homepage.js"></script>
</body>

</html>