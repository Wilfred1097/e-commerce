<?php
// Check if the 'DWHMA' cookie is present
if (!isset($_COOKIE['DWHMA0'])) {
    // Redirect to index.php
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DWHMA Online Store - Cart</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="theme-color" content="#4CAF50" />

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
<style>
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
</style>
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
            Cart
            <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" style="display: none;">
              0
            </span>
          </a>
        </li>
        <li class="ms-3">
          <?php
            if (isset($_COOKIE['DWHMA0'])) {
                // Show Profile and Logout links side by side
                echo '<div style="display: flex; gap: 10px;">'; // flex container with gap
                echo '<a href="messaging-page.php" class="d-flex align-items-center" title="Profile">Messages</a>';
                echo '<a href="homepage/mysql/logout.php" class="d-flex align-items-center" title="Logout">Logout</a>';
                echo '</div>';
            } else {
                // Show Login icon
                echo '<a href="login-page.php" class="d-flex align-items-center" title="Login">';
                echo '<i class="bi bi-person" style="font-size: 1.5rem;"></i>';
                echo '</a>';
            }
          ?>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <!-- <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a> -->
  </div>

<main class="main">

  <section id="cart-section" class="cart-section section py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-4">Order History</h2>

      <!-- Order Tracking Table -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Payment Method</th>
                    <th>Delivery Address</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Products</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody id="customerOrderTableBody">
                <!-- Fetched data will go here -->
            </tbody>
        </table>
      </div>
    </div>
  </section>

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
  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <!-- Main JS File -->
  <script src="homepage/assets/js/main.js"></script>

  <script>
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

      window.addEventListener('DOMContentLoaded', updateCartBadge);
  </script>

  <script>
    function formatDate(datetime) {
        const d = new Date(datetime);
        return d.toLocaleDateString() + ' ' + d.toLocaleTimeString();
    }
    function fetchCustomerOrders() {
        fetch('homepage/mysql/get_customer_orders.php')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('customerOrderTableBody');
                tableBody.innerHTML = '';

                if (data.success && data.orders.length > 0) {
                    data.orders.forEach(order => {
                        const productList = order.products.map(product => `
                            <div class="d-flex align-items-center mb-2">
                                <img src="main/template/mysql/${product.product_image}" alt="Product" style="width: 40px; height: 40px; object-fit: cover; margin-right: 8px;">
                                <span>x${product.quantity}</span>
                            </div>
                        `).join('');

                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${order.order_id}</td>
                            <td>${formatDate(order.order_date)}</td>
                            <td>
                              ${order.payment_method}${order.refference_num ? ' / Paid via Gcash' : ''}
                            </td>
                            <td>${order.delivery_address}</td>
                            <td>₱${parseFloat(order.total_amount).toFixed(2)}</td>
                            <td>${order.tracking_status}</td>
                            <td>
                                ${productList}
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                } else {
                    tableBody.innerHTML = `<tr><td colspan="8">No orders found.</td></tr>`;
                }
            })
            .catch(err => {
                console.error(err);
                document.getElementById('customerOrderTableBody').innerHTML = `<tr><td colspan="8">Error loading orders.</td></tr>`;
            });
    }

    document.addEventListener('DOMContentLoaded', fetchCustomerOrders);


  </script>

</body>

</html>