<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4CAF50" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DWHMA Online Store- Homepage</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
<!--   <link href="homepage/assets/img/favicon.png" rel="icon">
  <link href="homepage/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="homepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="homepage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="homepage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="homepage/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <?php include 'homepage/assets/structure/header.php'; ?>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Celebrate Artistry with<br>Handcrafted Abaca Creations</h1>
            <p data-aos="fade-up" data-aos-delay="100">We are team of talented artisans making handicrafts with Hands</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#product" class="btn-get-started">Browse All Product</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="homepage/assets/img/hero-img2.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Menu Section -->
    <section id="product" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Product</h2>
        <p><span>Check Our</span> <span class="description-title">Latest Product</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul id="categories" class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <!-- Dynamic category tabs will be appended here -->
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">
            <div class="tab-header text-center">
              <h3 id="category-title">All</h3>
            </div>
            <!-- Place for products -->
            <div id="product-list" class="row gy-5 justify-content-center"></div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

    <section id="best-selling" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>Check Our</span> <span class="description-title">Best Selling Product</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="row gy-5 justify-content-center" id="best-selling-products">
              <!-- Dynamic product items will be appended here -->
            </div>
          </div><!-- End Starter Menu Content -->

        </div>

      </div>

    </section>
    <!-- /Best Selling Product -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="https://ecowarriorph.com/wp-content/uploads/2020/01/abaca1.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Call or text for more inquiries.</h3>
              <p>+63 9709 05153 54</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Handcrafting abaca bags is a time-honored tradition that showcases the skill and creativity of local artisans.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Each bag is carefully woven using natural abaca fibers, known for their durability and eco-friendliness.
The process involves intricate patterns and attention to detail, making every piece unique and culturally significant.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Artisans dedicate hours of manual labor to ensure that every bag meets the standards of quality and craftsmanship.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>These handmade abaca bags not only promote sustainability but also support the livelihood of indigenous communities and help preserve traditional weaving techniques passed down through generations.</span></li>
              </ul>
              <!--<p>-->
              <!--  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
              <!--  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident-->
              <!--</p>-->

              <div class="position-relative mt-4">
                <img src="https://cf.shopee.ph/file/sg-11134201-23010-quabvokocylvd9" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=M-PRMotIsco" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <!-- <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore lore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- /Why Us Section -->

    <!-- Stats Section -->
<!--     <section id="stats" class="stats section dark-background">

      <img src="homepage/assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><

        </div>

      </div>

    </section> -->
    <!-- /Stats Section -->



    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="homepage/assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="homepage/assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="homepage/assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="homepage/assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Testimonials Section -->

    <!-- Events Section -->
    <!-- <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(homepage/assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(homepage/assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(homepage/assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(homepage/assets/img/events-4.jpg)">
              <h3>Wedding Parties</h3>
              <div class="price align-self-start">$899</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Events Section -->

    <!-- Chefs Section -->
    <!-- <section id="chefs" class="chefs section">

      <div class="container section-title" data-aos="fade-up">
        <h2>chefs</h2>
        <p><span>Our</span> <span class="description-title">Proffesional Chefs<br></span></p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="homepage/assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="homepage/assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="homepage/assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <!-- <section id="book-a-table" class="book-a-table section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <p><span>Book Your</span> <span class="description-title">Stay With Us<br></span></p>
      </div>

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url(homepage/assets/img/reservation.jpg);"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Book a Table</button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </section> -->
    <!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <!--<section id="gallery" class="gallery section light-background">-->

    <!--  <div class="container section-title" data-aos="fade-up">-->
    <!--    <h2>Gallery</h2>-->
    <!--    <p><span>Check</span> <span class="description-title">Our Gallery</span></p>-->
    <!--  </div>-->

    <!--  <div class="container" data-aos="fade-up" data-aos-delay="100">-->

    <!--    <div class="swiper init-swiper">-->
    <!--      <script type="application/json" class="swiper-config">-->
    <!--        {-->
    <!--          "loop": true,-->
    <!--          "speed": 600,-->
    <!--          "autoplay": {-->
    <!--            "delay": 5000-->
    <!--          },-->
    <!--          "slidesPerView": "auto",-->
    <!--          "centeredSlides": true,-->
    <!--          "pagination": {-->
    <!--            "el": ".swiper-pagination",-->
    <!--            "type": "bullets",-->
    <!--            "clickable": true-->
    <!--          },-->
    <!--          "breakpoints": {-->
    <!--            "320": {-->
    <!--              "slidesPerView": 1,-->
    <!--              "spaceBetween": 0-->
    <!--            },-->
    <!--            "768": {-->
    <!--              "slidesPerView": 3,-->
    <!--              "spaceBetween": 20-->
    <!--            },-->
    <!--            "1200": {-->
    <!--              "slidesPerView": 5,-->
    <!--              "spaceBetween": 20-->
    <!--            }-->
    <!--          }-->
    <!--        }-->
    <!--      </script>-->
    <!--      <div class="swiper-wrapper align-items-center">-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-1.jpg"><img src="homepage/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-2.jpg"><img src="homepage/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-3.jpg"><img src="homepage/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-4.jpg"><img src="homepage/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-5.jpg"><img src="homepage/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-6.jpg"><img src="homepage/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-7.jpg"><img src="homepage/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>-->
    <!--        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="homepage/assets/img/gallery/gallery-8.jpg"><img src="homepage/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>-->
    <!--      </div>-->
    <!--      <div class="swiper-pagination"></div>-->
    <!--    </div>-->

    <!--  </div>-->

    <!--</section>-->
    <!-- /Gallery Section -->

    <!-- /Best Selling Product -->
    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact or Visit Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">

          <iframe style="width: 100%; height: 400px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.47006561567!2d123.3330560118608!3d8.155303391841326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3254652f084dce41%3A0x1051d0b61f630f54!2sDumingag%20Women%20Handicraft%20Makers%20Association!5e0!3m2!1sen!2sph!4v1747237143093!5m2!1sen!2sph" allowfullscreen="" ></iframe>
        </div><!-- End Google Maps -->

        <!--<div class="row gy-4">-->

        <!--  <div class="col-md-6">-->
        <!--    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">-->
        <!--      <i class="icon bi bi-geo-alt flex-shrink-0"></i>-->
        <!--      <div>-->
        <!--        <h3>Address</h3>-->
        <!--        <p>DWHMA Community Center - Dumingag</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div-->

        <!--  <div class="col-md-6">-->
        <!--    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">-->
        <!--      <i class="icon bi bi-telephone flex-shrink-0"></i>-->
        <!--      <div>-->
        <!--        <h3>Call Us</h3>-->
        <!--        <p>+63 9709 05153 54</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-md-6">-->
        <!--    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">-->
        <!--      <i class="icon bi bi-clock flex-shrink-0"></i>-->
        <!--      <div>-->
        <!--        <h3>Opening Hours<br></h3>-->
        <!--        <p><strong>Mon-Fri:</strong> 9AM - 4PM</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--</div>-->

        <!--<form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">-->
        <!--  <div class="row gy-4">-->

        <!--    <div class="col-md-6">-->
        <!--      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">-->
        <!--    </div>-->

        <!--    <div class="col-md-6 ">-->
        <!--      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">-->
        <!--    </div>-->

        <!--    <div class="col-md-12">-->
        <!--      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">-->
        <!--    </div>-->

        <!--    <div class="col-md-12">-->
        <!--      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>-->
        <!--    </div>-->

        <!--    <div class="col-md-12 text-center">-->
        <!--      <div class="loading">Loading</div>-->
        <!--      <div class="error-message"></div>-->
        <!--      <div class="sent-message">Your message has been sent. Thank you!</div>-->

        <!--      <button type="submit">Send Message</button>-->
        <!--    </div>-->

        <!--  </div>-->
        <!--</form>-->
        <!-- End Contact Form -->

      </div>

    </section>
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer white-background justify-content-center align-items-center">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>DWHMA Community Center</p>
            <p>Dumingag, Zamboanag del Sur</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+63 9709 05153 54</span><br>
              <!--<strong>Email:</strong> <span>info@example.com</span><br>-->
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Fi:</strong> <span>9AM - 4PM</span><br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://github.com/Wilfred1097">Wil Fred</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="homepage/assets/vendor/php-email-form/validate.js"></script>
  <script src="homepage/assets/vendor/aos/aos.js"></script>
  <script src="homepage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="homepage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="homepage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Sweetalert js-->
  <script src="main/assets/js/sweetalert/sweetalert2.min.js"></script>
  <!-- jquery-->
  <script src="main/assets/js/vendors/jquery/jquery.min.js"></script>
  <!-- Main JS File -->
  <script src="homepage/assets/js/main.js"></script>

  <script>
      $(document).ready(function () {
        // Create "All" tab and tab-pane with 'active' classes before initialization
        $('#categories').prepend(`
            <li class="nav-item">
                <a class="nav-link active" id="nav-link-all" data-bs-toggle="tab" data-bs-target="#menu-all" role="tab" aria-selected="true">
                    <h4>All</h4>
                </a>
            </li>
        `);

        // Append the tab pane with 'show active' classes
        $('#tabContent').append(`
            <div class="tab-pane fade show active" id="menu-all" role="tabpanel">
                <!-- products will load here -->
            </div>
        `);

        // Now, activate the tab explicitly
        $('#nav-link-all').tab('show');

        // Load products for "All" initially
        loadAllProducts();

        // Function to load all products
        function loadAllProducts() {
            $('#category-title').text('All');
            $.ajax({
                url: 'homepage/mysql/get_all_product.php',
                method: 'GET',
                dataType: 'json',
                success: function (response) {
                    $('#product-list').empty();
                    if (response.status === 'success' && response.data.length > 0) {
                        response.data.forEach(function(product) {
                            const productHtml = `
                                <div class="col-lg-4 menu-item justify-content-center p-4">
                                    <a href="product-page.php?id=${product.id}" class="glightbox">
                                        <img src="main/template/mysql/${product.image}" class="menu-img img-fluid" alt="${product.description}">
                                    </a>
                                    <p style="font-size: 13px;">${product.description}</p>
                                    <h5>Artisans: ${product.owner}</h5>
                                    <p class="price">₱${product.price}</p>
                                </div>
                            `;
                            $('#product-list').append(productHtml);
                        });
                    } else {
                        $('#product-list').append('<p class="text-center">No products available.</p>');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        // Set up click handler for "All" tab
        $('#categories').on('click', '#nav-link-all', function () {
            loadAllProducts();
        });

        // Fetch categories dynamically and create other tabs
        $.ajax({
            url: 'homepage/mysql/get_product.php',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success' && response.data) {
                    const products = response.data;
                    const uniqueCategories = new Set();

                    products.forEach(product => {
                        const categoryName = product.category_name;
                        if (!uniqueCategories.has(categoryName)) {
                            uniqueCategories.add(categoryName);
                            const categoryId = categoryName.toLowerCase().replace(/\s+/g, '-');
                            const navLinkId = `nav-link-${categoryId}`;

                            $('#categories').append(`
                                <li class="nav-item">
                                    <a class="nav-link" id="${navLinkId}" data-bs-toggle="tab" data-bs-target="#menu-${categoryId}">
                                        <h4>${categoryName}</h4>
                                    </a>
                                </li>
                            `);
                        }
                    });

                    // Handle tab switching
                    $('#categories').on('shown.bs.tab', 'a[data-bs-toggle="tab"]', function (e) {
                        const categoryName = $(e.target).find('h4').text().trim();
                        $('#category-title').text(categoryName);

                        // Fetch and display category-specific products
                        $.ajax({
                            url: 'homepage/mysql/fetch_products_by_category.php',
                            method: 'POST',
                            data: { category_name: categoryName },
                            dataType: 'json',
                            success: function (response) {
                                $('#product-list').empty();
                                if (response.status === 'success' && response.data.length > 0) {
                                    response.data.forEach(function(product) {
                                        const productHtml = `
                                            <div class="col-lg-4 menu-item">
                                                <a href="product-page.php?id=${product.id}" class="glightbox">
                                                    <img src="main/template/mysql/${product.image}" class="menu-img img-fluid" alt="${product.description}">
                                                </a>
                                                <p style="font-size: 13px; padding: 0px, 5px, 0px, 5px;">${product.description}</p>
                                                <h5>Artisans: ${product.owner}</h5>
                                                <p class="price">₱${product.price}</p>
                                            </div>
                                        `;
                                        $('#product-list').append(productHtml);
                                    });
                                } else {
                                    $('#product-list').append('<p class="text-center">No products available in this category.</p>');
                                }
                            }
                        });
                    });
                }
            }
        });
    });
  </script>
  <script type="text/javascript">
    function updateCartBadge() {
        // Retrieve cart array from local storage
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const badge = document.getElementById('cart-badge');

        if (cart.length > 0) {
          badge.textContent = cart.length;
          badge.style.display = 'inline-block';
        } else {
          badge.style.display = 'none';
        }
      }

      // Call this function when the page loads
      window.addEventListener('DOMContentLoaded', updateCartBadge);
  </script>

  <script>
    $(document).ready(function() {
        const dataUrl = 'homepage/mysql/get_best_selling_products.php';

        $.ajax({
            url: dataUrl,
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success' && response.data.length > 0) {
                    response.data.forEach(function(product) {
                        const productHtml = `
                            <div class="col-lg-4 menu-item">
                                <a href="product-page.php?id=${product.id}" class="glightbox">
                                 <img src="main/template/mysql/${product.image}" class="menu-img img-fluid" alt="${product.product_types}">
                                </a>
                                <h5>Artisan: ${product.owner}</h5>
                                <h5>Sold Item: ${product.number_of_orders}</h5>
                                <p class="ingredients">${product.product_types}</p>
                                <p class="price">₱${product.price}</p>
                            </div>
                        `;
                        $('#best-selling-products').append(productHtml);
                    });
                } else {
                    $('#best-selling-products').html('<p>No products found.</p>');
                }
            },
            error: function() {
                $('#best-selling-products').html('<p>Failed to load products.</p>');
            }
        });
    });
    </script>
</body>

</html>