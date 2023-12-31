<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated | Ecommerce Shop</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css\popup.css" />
  </head>

  <body>
    <div class="popup">
      <div class="popup-bg-1 popup-bg"></div>
      <div class="popup-bg-2 popup-bg"></div>
      <div class="popup-bg-3 popup-bg"></div>
      <div class="container popup-container">
        <div class="text-area">
          <h1 class="hide"><span class="text">hey </span></h1>
          <h1 class="hide"><span class="text">anandx</span></h1>
          <h1 class="hide"><span class="text">of life</span></h1>
        </div>
      </div>
    </div>
    <section id="hero">
      <div class="hero-container">
        <div class="container">
          <div class="hero-content">
            <h3 class="subheading">100% Natural Food</h3>
            <h1 class="heading">
              Choose the best <br />
              healthier way <br />
              of life
            </h1>
            <div>
              <a href="#!" class="btn-primary">
                <span>Explore Now</span>
                <ion-icon name="arrow-forward-circle"></ion-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <header>
        <div class="container">
          <nav class="navigation">
            <a href="#!" class="logo">
              <img src="images/logo.svg" alt="Logo" class="logo-img" />
            </a>
            <ul class="nav_menu">
              <li class="nav_list">
                <a href="#!" class="nav_link">Home</a>
              </li>
              <li class="nav_list">
                <a href="#!" class="nav_link">About</a>
              </li>
              <li class="nav_list">
                <a href="#!" class="nav_link">Pages</a>
              </li>
              <li class="nav_list">
                <a href="#!" class="nav_link">Shop</a>
              </li>
              <li class="nav_list">
                <a href="#!" class="nav_link">Projects</a>
              </li>
              <li class="nav_list">
                <a href="#!" class="nav_link">News</a>
              </li>
            </ul>
            <div class="nav_actions">
              <div class="input-search-container">
                <input type="text" name="search" autocomplete="off" />
                <div class="search-btn">
                  <ion-icon name="search-outline"></ion-icon>
                </div>
              </div>
              <div class="cart-bucket">
                <ion-icon name="bag-add-outline"></ion-icon>
                <span>Cart (0)</span>
              </div>
              <div>
                <ion-icon name="menu-outline" class="menu_toggle"></ion-icon>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </section>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="js\popup.js"></script>
  </body>
</html>