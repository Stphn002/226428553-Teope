<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baguio</title>
  <link rel="stylesheet" href="baguio.css">
</head>
<body>
  <header class="header">
    <h1>Baguio City</h1>
  </header>

  <!-- Carousel Section -->
  <div class="carousel">
    <div class="carousel-images">
      <img src="https://ik.imagekit.io/tvlk/blog/2024/10/shutterstock_2416671753-1.jpg?tr=dpr-2,w-675" alt="Slide 1">
      <img src="https://wanderingsoulscamper.wordpress.com/wp-content/uploads/2015/08/img_0137-1.jpg" alt="Slide 2">
      <img src="https://besaphil.com/wp-content/uploads/2019/12/Botanical-garden02.jpg" alt="Slide 3">
      <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Wright_Park%2C_Baguio.JPG" alt="Slide 4">
      <img src="https://mybaguiocityguide.com/wp-content/uploads/2023/07/session-road-baguio-city.jpeg" alt="Slide 5">
    </div>
    <button class="carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="carousel-button next" onclick="moveSlide(1)">&#10095;</button>
  </div>

  <section class="products">
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Product 1">
      <h2>Product 1</h2>
      <p>$19.99</p>
      <div class="buttons">
        <button onclick="addToCart('Product 1')">Add to Cart</button>
        <button onclick="learnMore('Product 1')">Learn More</button>
      </div>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Product 2">
      <h2>Product 2</h2>
      <p>$29.99</p>
      <div class="buttons">
        <button onclick="addToCart('Product 2')">Add to Cart</button>
        <button onclick="learnMore('Product 2')">Learn More</button>
      </div>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Product 3">
      <h2>Product 3</h2>
      <p>$39.99</p>
      <div class="buttons">
        <button onclick="addToCart('Product 3')">Add to Cart</button>
        <button onclick="learnMore('Product 3')">Learn More</button>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p>&copy; 2024 Your Store. All rights reserved.</p>
  </footer>

  <script src="baguio.js"></script>
</body>
</html>
