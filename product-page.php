<?php
// Include the database connection
require 'main/template/mysql/conn.php';

// Check if 'id' parameter exists in URL
if (isset($_GET['id'])) {
    // Sanitize input: ensure it's an integer
    $productId = intval($_GET['id']);

    // Prepare SQL statement using PDO
    $stmt = $pdo->prepare("SELECT products.*,product_category.name AS category_name FROM products JOIN product_category ON product_category.id = products.category_id WHERE products.id = :id");
    $stmt->bindParam(':id', $productId, PDO::PARAM_INT);

    // Execute the statement
    $stmt->execute();

    // Fetch the product data
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Product found, you can now use $product array
        // e.g., echo $product['description'];
    } else {
        // No product found with this ID
        die("Product not found.");
    }
} else {
    // 'id' parameter not provided
    die("Product ID not specified.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DWHMA Online Store - Product Page</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <meta name="theme-color" content="#4CAF50" />

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
<!-- <style>
  /* Flex layout to push footer down */
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
  }

  /* Make main content expand */
  .main {
    flex: 1;
  }

  /* Keep footer at bottom if content is short */
  footer {
    margin-top: auto;
  }
  /* Optional: your footer styles */
  .footer {
    padding: 20px;
  }
</style> -->
<body class="starter-page-page">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h3 class="sitename">Dumingag Women Handicrafts Makers Association</h3>
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="ms-3 position-relative">
          <a href="pages-cart.php" class="d-flex align-items-center" title="Cart">
            <i class="bi bi-cart" style="font-size: 1.5rem;"></i>
            <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" style="display: none;">
              0
            </span>
          </a>
        </li>
        <li class="ms-3">
          <a href="login-page.php" class="d-flex align-items-center" title="User Profile">
            <i class="bi bi-person" style="font-size: 1.5rem;"></i>
          </a>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <!-- <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a> -->
  </div>

<main class="main mb-5">

    <?php
    // Assuming the previous code block is here and $product is fetched successfully
    if (!isset($product)) {
        die("Product not found or ID not provided.");
    }
    ?>

    <section id="product-page" class="product-page section py-5 bg-light">
      <div class="container">
        <div class="row align-items-center mb-4">

          <!-- Product Image -->
          <div class="col-md-5 col-lg-3">
            <img src="main/template/mysql/<?php echo htmlspecialchars($product['image']); ?>" alt="main/template/mysql/<?php echo htmlspecialchars($product['description']); ?>" class="img-fluid rounded">
          </div>

          <!-- Product Details -->
          <div class="col-md-7 col-lg-9">
            <h2 class="mb-3"><?php echo htmlspecialchars($product['description']); ?></h2>
            <p class="text-muted mb-3"><?php echo htmlspecialchars($product['owner']); ?></p>
            <h4 class="text-primary mb-3">₱ <?php echo htmlspecialchars(number_format($product['price'], 2)); ?></h4>
            <p class="mb-0"><strong>Size:</strong> <?php echo htmlspecialchars($product['size']); ?></p>
            <p class="mb-0" id="available_qty_<?php echo $product['id']; ?>" data-qty="<?php echo htmlspecialchars($product['qty']); ?>"><strong>Available Quantity:</strong> <?php echo htmlspecialchars($product['qty']); ?></p>
            <p class="mb-0"><strong>Address:</strong> <?php echo htmlspecialchars($product['adress']); ?></p>
            <p class="mb-0"><strong>Category:</strong> <?php echo htmlspecialchars($product['category_name']); ?></p>
            <p class="mb-2"><strong>Material:</strong> <?php echo htmlspecialchars($product['material']); ?></p>


            <!-- Action Buttons -->
            <div class="d-flex gap-3">
              <button class="btn btn-success btn-sm" onclick="startChat(<?php echo $product['id']; ?>)"><i class="bi bi-chat-dots"></i> Chat</button>
              <!-- Quantity input field -->
              <input type="number"
                 id="quantity_<?php echo $product['id']; ?>"
                 name="quantity_<?php echo $product['id']; ?>"
                 value="1"
                 min="1"
                 max="<?php echo htmlspecialchars($product['qty']); ?>"
                 style="width: 50px; margin: 0px 10px 0px 20px;"
                 oninput="validateQuantity(<?php echo $product['id']; ?>)"
                 onchange="validateQuantity(<?php echo $product['id']; ?>)" />

              <!-- Add to Cart button -->
              <button class="btn btn-danger btn-sm" onclick="addToCart(<?php echo $product['id']; ?>)">
                  <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>
        </div>

        <!-- Optional: Additional products or related items can go here -->
      </div>
    </section>
    <script>
      function validateQuantity(productId) {
          const input = document.getElementById('quantity_' + productId);
          const max = parseInt(input.max);
          let value = parseInt(input.value);

          if (isNaN(value) || value < 1) {
              input.value = 1; // Reset to minimum if invalid
          } else if (value > max) {
              input.value = max; // Reset to max if over
          }
      }
      </script>

  <!-- Optional: Chat Functionality Script -->
  <script>
    function startChat(productId) {
      // Check if the DWHMA0 cookie exists
      const cookies = document.cookie.split(';').map(cookie => cookie.trim());
      const hasDWHMA0 = cookies.some(cookie => cookie.startsWith('DWHMA0='));

      if (hasDWHMA0) {
        window.location.href = `messaging-page.php?product_id=${productId}`;
      } else {
        // Show SweetAlert warning
        Swal.fire({
          icon: 'warning',
          title: 'Login Required',
          text: 'You need to login to start messaging.',
          showCancelButton: true,
          confirmButtonText: 'Okay',
          cancelButtonText: 'Login Now'
        }).then((result) => {
          if (result.isDismissed || result.dismiss === Swal.DismissReason.cancel) {
            // User clicked "Login Now"
            window.location.href = 'login-page.php';
          } else {
            // User clicked "Okay" or dismissed the alert
            // Do nothing or any other action
          }
        });
      }
    }

    function addToCart(productId) {
      // Get the quantity input value
      const quantityInput = document.getElementById('quantity_' + productId);
      const quantity = parseInt(quantityInput.value) || 1;

      // Get the available quantity from a data attribute
      // This requires adding a data attribute to your quantity element
      const availableQty = parseInt(document.getElementById('available_qty_' + productId).dataset.qty);

      // Validate that requested quantity doesn't exceed available
      if (quantity > availableQty) {
          Swal.fire({
              icon: 'error',
              title: 'Not enough stock',
              text: `Sorry, only ${availableQty} items available.`,
              confirmButtonText: 'OK'
          });
          return;
      }

      // Retrieve existing cart or initialize
      let cart = JSON.parse(localStorage.getItem('cart')) || [];

      // Check if product already in cart
      const existingItemIndex = cart.findIndex(item => item.productId === productId);

      if (existingItemIndex !== -1) {
          // Calculate new total quantity
          const newTotalQty = cart[existingItemIndex].quantity + quantity;

          // Check if new total quantity exceeds available
          if (newTotalQty > availableQty) {
              Swal.fire({
                  icon: 'warning',
                  title: 'Limited Stock',
                  text: `You already have ${cart[existingItemIndex].quantity} of this item in your cart. Adding ${quantity} more would exceed the available stock of ${availableQty}.`,
                  confirmButtonText: 'OK'
              });
              return;
          }

          // Update the quantity if already in cart
          cart[existingItemIndex].quantity = newTotalQty;
      } else {
          // Add new item to cart with available quantity
          cart.push({
              productId: productId,
              availableQty: availableQty,  // Store available quantity
              quantity: quantity
          });
      }

      // Save updated cart
      localStorage.setItem('cart', JSON.stringify(cart));

      // Show SweetAlert
      Swal.fire({
          icon: 'success',
          title: 'Added to Cart!',
          text: 'The product has been added to your shopping cart.',
          timer: 2000,
          showConfirmButton: false
      });

      // Update badge
      updateCartBadge();
  }

  function updateCartBadge() {
      // Retrieve cart array from local storage
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const badge = document.getElementById('cart-badge');

      if (cart.length > 0) {
          // Count total items (considering quantities)
          const totalItems = cart.length;
          badge.textContent = totalItems;
          badge.style.display = 'inline-block';
      } else {
          badge.style.display = 'none';
      }
  }

  // Call this function when the page loads
  window.addEventListener('DOMContentLoaded', updateCartBadge);
  </script>

</main>

  <footer id="footer" class="footer white-background">

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
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://github.com/Wilfred1097">Wil Fred</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="homepage/assets/vendor/php-email-form/validate.js"></script>
  <script src="homepage/assets/vendor/aos/aos.js"></script>
  <script src="homepage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="homepage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="homepage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Sweetalert js-->
  <script src="main/assets/js/sweetalert/sweetalert2.min.js"></script>

  <!-- Main JS File -->
  <script src="homepage/assets/js/main.js"></script>

</body>

</html>