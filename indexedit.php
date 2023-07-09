
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Home | College Canteen </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://icons8.com/icon/4HfEF5HKe7ML/creative-commons" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type = "text/css" href ="css/ourteam.css">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/indexstyle.css" rel="stylesheet">

  <script>
  window.chatbaseConfig = {
    chatbotId: "6wXmrhrpu3ROngMo5tMu2",
  }
</script>
<script
  src="https://www.chatbase.co/embed.min.js"
  id="6wXmrhrpu3ROngMo5tMu2"
  defer>
</script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 7592046959</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-fri: 10AM - 4PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">mal</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">CoLleGE C4ntEeN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="images/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <?php
if (isset($_SESSION['login_user1'])) {
  ?>
   <ul>
        <li><a class="nav-link scrollto"  href="index.php"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
        <li><a class="nav-link scrollto"  href="dashboard.php">manager panel</a></li>
        <li><a class="nav-link scrollto"  href="logout_m.php">logout</a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul>
      <li><a href="index.php"><span class="nav-link scrollto"></span> Welcome  <?php echo $_SESSION['login_user2']; ?> </a></li>
      <li><a href="foodlist.php"><span class="nav-link scrollto"></span> Food Zone </a></li>
      <li><a href="cart.php"><span class="nav-link scrollto"></span> Cart
              (<?php
              if (isset($_SESSION["cart"])) {
                  $count = count($_SESSION["cart"]);
                  echo "$count";
              } else
                  echo "0";
              ?>)
          </a></li>
      <li><a href="logout_u.php"><span class="nav-link scrollto"></span> Log Out </a></li>
  </ul>
  <?php
} else if (isset($_SESSION['login_user3'])) {
  ?>
  <ul>
      <li><a href="index.php"><span class="nav-link scrollto"></span> Welcome <?php echo $_SESSION['login_user3']; ?> </a></li>
      <li><a href="staffcontrolpanel.php">staff control panel</a></li>
      <li><a href="logout_s.php"><span class="nav-link scrollto"></span> Log Out </a></li>
  </ul>
  <?php
}

else {

  ?>

      <ul>
        <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">user login</a></li>
              <li><a href="#">Admin Login</a></li>
              <li><a href="#">staff login</a></li>

            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>sign up</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">user signup</a></li>
            </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
          </ul>

<?php
}
?>


      </nav><!-- .navbar -->
    
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>College Canteen</span></h1>
          <h2>Delivering great food for more than 5 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="customerlogin.php" class="btn-book animated fadeInUp scrollto">order food</a>
          </div>
        </div>
        
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/DWSHnSdvcGM" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="aboutt" class="aboutt">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="images/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Satisfy Cravings with College Canteen</h3>
            <p class="fst-italic">
            Well whatever the shower love on us, we believe Athiti devo bhave... Right as always
</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Fresh and flavorful</li>
              <li><i class="bi bi-check-circle"></i> your food Journey</li>
              <li><i class="bi bi-check-circle"></i> Gastronomic adventure</li>
            </ul>
            <p>
            At College Canteen, we believe that food is not just about taste, but also about the ambiance it creates. Our warm and friendly staff go above and beyond to ensure that every guest feels welcomed and comfortable. From the inviting decor to the upbeat music, we strive to create an atmosphere that radiates positivity and good vibes, making every dining experience a memorable one.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why College Canteen is the Ultimate Dining Destination</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Good Vibes</h4>
              <p>At College Canteen, we believe that food is not just about taste, but also about the ambiance it creates. Our warm and friendly staff go above and beyond to ensure that every guest feels welcomed and comfortable. From the inviting decor to the upbeat music, we strive to create an atmosphere that radiates positivity and good vibes, making every dining experience a memorable one</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Elegant Look</h4>
              <p>College Canteen understands the importance of ambiance when it comes to dining. That’s why we’ve curated a sleek and sophisticated decor that sets the mood for an unforgettable culinary experience. From the elegant lighting to the tasteful artwork, every element has been carefully chosen to create a refined and stylish atmosphere that complements the diverse and delicious menu offerings</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Nature</h4>
              <p>College Canteen is proud to offer an outdoor seating area that allows guests to immerse themselves in nature while enjoying their meals. Surrounded by lush greenery and a serene atmosphere, the outdoor seating area provides a refreshing and rejuvenating dining experience that is perfect for those who want to escape the hustle and bustle of the city. our outdoor seating area is the perfect choice</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Menu</h2>
      <p>Check Our Tasty Menu</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-starters">Starters</li>
          <li data-filter=".filter-salads">Salads</li>
          <li data-filter=".filter-specialty">Specialty</li>
        </ul>
      </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-6 menu-item filter-starters">
        <img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Prawn Curry</a><span>₹300</span>
        </div>
        <div class="menu-ingredients">
          Authentic Kerala-style prawn curry made with local spices and coconut milk.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="images/menu/bread-barrel.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Appam with Vegetable Stew</a><span>₹200</span>
        </div>
        <div class="menu-ingredients">
          Soft and fluffy appams served with a delicious mixed vegetable stew.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="images/menu/cake.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Malabar Chicken Biryani</a><span>₹250</span>
        </div>
        <div class="menu-ingredients">
          Fragrant and flavorful biryani cooked with tender chicken, aromatic spices, and basmati rice.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="images/menu/caesar.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Fish Curry</a><span>₹280</span>
        </div>
        <div class="menu-ingredients">
          Spicy and tangy fish curry prepared in the traditional Kerala style.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="images/menu/tuscan-grilled.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Porotta with Beef Fry</a><span>₹220</span>
        </div>
        <div class="menu-ingredients">
          Flaky layered porottas served with spicy and succulent beef fry.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="images/menu/mozzarella.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Style Fish Fry</a><span>₹180</span>
        </div>
        <div class="menu-ingredients">
          Crispy and flavorful fish fry marinated with traditional Kerala spices.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="images/menu/greek-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Avial</a><span>₹150</span>
        </div>
        <div class="menu-ingredients">
          A traditional mixed vegetable curry with coconut and yogurt, a must-try dish from Kerala.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="images/menu/spinach-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Parotta with Chicken Curry</a><span>₹200</span>
        </div>
        <div class="menu-ingredients">
          Layered and flaky parottas served with spicy and aromatic chicken curry.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="images/menu/lobster-roll.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kerala Style Beef Roast</a><span>₹280</span>
        </div>
        <div class="menu-ingredients">
          Tender and spicy beef roast cooked with traditional Kerala spices and flavors.
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Menu Section -->
<section id="specials" class="specials">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Specials</h2>
      <p>Check Our Specials</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Kerala Fish Curry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Kerala Sadya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kerala Prawn Roast</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Kerala Beef Fry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Kerala Banana Fritters</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kerala Fish Curry</h3>
                <p class="fst-italic">Spicy and tangy fish curry prepared in the traditional Kerala style.</p>
                <p>Authentic Kerala-style fish curry made with local spices and coconut milk. Perfectly pairs with steamed rice or appam.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="images/kerala-fish-curry.jpg" alt="Kerala Fish Curry" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kerala Sadya</h3>
                <p class="fst-italic">A traditional Kerala feast served on a banana leaf with a variety of vegetarian dishes.</p>
                <p>Kerala Sadya is a wholesome vegetarian meal with an assortment of curries, pickles, papadam, and desserts served on a fresh banana leaf.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="images/kerala-sadya.jpg" alt="Kerala Sadya" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kerala Prawn Roast</h3>
                <p class="fst-italic">Delicious and spicy prawn roast cooked with traditional Kerala spices.</p>
                <p>Kerala Prawn Roast is a flavorful dish made with succulent prawns marinated in a blend of aromatic spices and pan-roasted to perfection.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="images/kerala-prawn-roast.jpg" alt="Kerala Prawn Roast" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kerala Beef Fry</h3>
                <p class="fst-italic">Spicy and aromatic beef fry prepared in the traditional Kerala style.</p>
                <p>Kerala Beef Fry is a popular dish made with tender beef pieces cooked with spices, onions, and curry leaves. It is a perfect side dish for rice or appam.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="images/kerala-beef-fry.jpg" alt="Kerala Beef Fry" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kerala Banana Fritters</h3>
                <p class="fst-italic">Crispy and sweet fritters made with ripe bananas and coated in a batter.</p>
                <p>Kerala Banana Fritters, also known as Pazham Pori, are a popular tea-time snack made with ripe bananas dipped in a batter of flour, sugar, and spices, and deep-fried until golden brown.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="images/kerala-banana-fritters.jpg" alt="Kerala Banana Fritters" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Events</h2>
      <p>Organize Your Events in our Canteen</p>
    </div>

    <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Traditional Kerala-Style Birthday Parties</h3>
              <div class="price">
                <p><span>189</span></p>
              </div>
              <p class="fst-italic">
                Experience the essence of Kerala with our traditional-style birthday parties.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Authentic Kerala cuisine and delicacies.</li>
                <li><i class="bi bi-check-circled"></i> Kerala-themed decorations and ambiance.</li>
                <li><i class="bi bi-check-circled"></i> Traditional Kerala music and cultural performances.</li>
              </ul>
              <p>
                Celebrate your special day in a truly Kerala-style way, immersing yourself in the rich culture and traditions of the region.
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Kerala Bcom Fest</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="fst-italic">
                Experience the vibrant and colorful Bcom Fest with a touch of Kerala culture.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Exciting competitions and cultural events.</li>
                <li><i class="bi bi-check-circled"></i> Traditional Kerala performances and art forms.</li>
                <li><i class="bi bi-check-circled"></i> Delicious Kerala cuisine and snacks.</li>
              </ul>
              <p>
                Immerse yourself in the unique blend of academic excellence and Kerala's cultural extravaganza at the Kerala Bcom Fest.
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Kerala Bca Fest</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="fst-italic">
                Experience the creativity and technology at the Kerala Bca Fest.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Innovative technology exhibitions and showcases.</li>
                <li><i class="bi bi-check-circled"></i> Interactive workshops and seminars.</li>
                <li><i class="bi bi-check-circled"></i> Authentic Kerala cuisine and refreshments.</li>
              </ul>
              <p>
                Join us to explore the exciting world of technology and immerse yourself in the warmth of Kerala's hospitality at the Kerala Bca Fest.
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Events Section -->

<section id="about" class="about">
<h2 align="center"> O U R T E A M </h2>
        
        <div class="main"  data-aos="fade-up">
            <div class="profile-card">
                <div class="img">
                    <img src="https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg">
                </div>
                <div class="caption">
                    <h3>Vin Diesel</h3>
                    <p>Senior App Developer</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img src="images\anandhprofile.jpg">
                </div>
                <div class="caption">
                    <h3>Anandhx</h3>
                    <p>Developer</p>
                    <div class="social-links">
                        <a href="wa.link/ta6c71"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/mind________freezer"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/anandhx"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img src="images\anandhprofile.jpg">
                </div>
                <div class="caption">
                    <h3>Tom Cruise</h3>
                    <p>Full Stact Developer</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!-- ======= .Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Get in touch</h2>
          <p>contact</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your  request was sent. We will call back or send an Email Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">sent request</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am highly impressed with the user-friendly interface and extensive menu options on your website. Ordering food from your canteen has become incredibly convenient and enjoyable.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>James Thomas</h3>
                <h4>Mes &amp; Bca </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The quality of the food offered on your website is exceptional. Every bite is a burst of flavors, and the prompt delivery service ensures a satisfying dining experience<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Noyal Augusty</h3>
                <h4>bcom dept</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I love how your website showcases the nutritional information for each menu item. It allows me to make informed choices and align my meals with my health goals<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Sijo</h3>
                <h4>bca dept</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I have recommended your website to all my friends and colleagues. The variety, quality, and overall experience have exceeded my expectations, and I can't wait to order from you again<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Alno</h3>
                <h4>chemistry dept</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Your website's visually appealing design and vibrant food photography create a mouthwatering experience. It's like browsing through a food paradise before placing my order.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Deny</h3>
                <h4>physics dept</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Canteent</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="images/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="images/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="images/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="images/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2></h2>
          <p>Location</p>
        </div>
      </div>

      <div data-aos="fade-up">
        
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.240929218917!2d76.5957978!3d9.5744884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062c738c159f55%3A0xd2f85120e3b5cdf2!2sMES%20Golden%20Jubilee%20College!5e0!3m2!1sen!2sin!4v1688557073991!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>address:</h4>
                <p>Kochumattom, Payyappady P.O, Puthuppally

</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-friday:<br>
                  10:00 AM - 4 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>anandhu@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 7592 04 6959</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>College Canteen</h3>
              <p>
              Kochumattom
              <br>
                Payyappady P.O, Puthuppally<br><br>
                <strong>Phone:</strong> +91 75 92 04 69 59<br>
                <strong>Email:</strong> anandhu@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Your feedback is invaluable to us. We appreciate your thoughts, suggestions, and reviews. Please take a moment to share your experience and help us serve you better. We're constantly striving to exceed your expectations, and your input is instrumental in shaping our offerings.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>colllege canteen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Developed by <a href="#">anandhx</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  
  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>