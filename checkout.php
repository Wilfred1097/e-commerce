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
  <title>DWHMA Online Store - Checkout</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
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
<style>
  /* Flex layout to push footer down */
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
  }

  /* Checkout page specific styles */
  .checkout-card {
    height: 100%;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }

  .checkout-card:hover {
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
  }

  .payment-options {
    text-align: left;
    padding: 20px;
  }

  @media (max-width: 767.98px) {
    .col-md-6:first-child {
      margin-bottom: 20px;
    }
  }
</style>
<body class="starter-page-page">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
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
  </div>

<main class="main">

  <section id="cart-section" class="cart-section section py-5 bg-light">
    <div class="container">
      <h2 class="mb-4 text-center">Checkout</h2>

      <div class="row">
        <!-- Left Column - Order Summary -->
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="card checkout-card">
            <div class="card-body">
              <h5 class="card-title">Order Summary</h5>
              <div class="d-flex justify-content-between mb-2">
                <span>Subtotal:</span>
                <span id="summary-subtotal">₱0.00</span>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Shipping:</span>
                <span id="shipping-fee">₱0.00</span>
              </div>
              <hr>
              <div class="d-flex justify-content-between fw-bold mb-3">
                <span>Total:</span>
                <span id="summary-total">₱0.00</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column - Payment Methods -->
        <div class="col-md-6">
          <div class="card checkout-card">
            <div class="card-body">
              <h5 class="card-title">Select Payment Method</h5>

              <div class="payment-options mb-4">
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="paymentMethod" id="pickupOption" value="Pickup" checked>
                  <label class="form-check-label" for="pickupOption">
                    <strong>Pick Up</strong>
                    <div class="text-muted small">Collect your order at our store location</div>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="paymentMethod" id="codOption" value="COD">
                  <label class="form-check-label" for="codOption">
                    <strong>Cash on Delivery (COD)</strong>
                    <div class="text-muted small">Pay when you receive your order</div>
                  </label>
                </div>
              </div>

              <!-- Address Input (hidden by default) -->
              <div class="mb-4" id="addressContainer" style="display: none;">
                <label for="deliveryAddress" class="form-label">Enter Delivery Address:</label>
                <textarea class="form-control" id="deliveryAddress" rows="3" placeholder="Enter your complete delivery address"></textarea>
              </div>

              <!-- Submit Button -->
              <button id="placeOrderBtn" class="btn btn-success w-100">Place Order</button>
            </div>
          </div>
        </div>
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
    // Function to get URL parameters
    function getUrlParameter(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    }

    // Retrieve subtotal from URL
    const subtotalParam = getUrlParameter('subtotal');
    const subtotal = subtotalParam ? parseFloat(subtotalParam) : 0;

    // Update the subtotal and total display
    function updateSummary(subtotal) {
      document.getElementById('summary-subtotal').textContent = `₱${subtotal.toFixed(2)}`;
      document.getElementById('summary-total').textContent = `₱${subtotal.toFixed(2)}`;
    }

    // Initialize the summary with URL parameter
    updateSummary(subtotal);

    // Display cart items in the order summary
    function displayOrderItems() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const container = document.getElementById('order-items-container');

      if (cart.length === 0) {
        container.innerHTML = '<div class="text-center text-muted"><small>Your cart is empty</small></div>';
        return;
      }

      let html = '';
      cart.forEach(item => {
        html += `
          <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex align-items-center">
              <span class="badge bg-secondary me-2">${item.quantity}</span>
              <span class="text-truncate" style="max-width: 150px;" title="${item.name}">${item.name}</span>
            </div>
            <span>₱${(item.price * item.quantity).toFixed(2)}</span>
          </div>
        `;
      });

      container.innerHTML = html;
    }

    // Handle payment method selection
    const pickupRadio = document.getElementById('pickupOption');
    const codRadio = document.getElementById('codOption');
    const addressContainer = document.getElementById('addressContainer');
    const shippingFeeSpan = document.getElementById('shipping-fee');

    pickupRadio.addEventListener('change', toggleAddressAndFee);
    codRadio.addEventListener('change', toggleAddressAndFee);

    const originalSubtotal = subtotal;
    const summaryTotalElement = document.getElementById('summary-total');

    function toggleAddressAndFee() {
      let totalAmount = originalSubtotal;

      if (document.getElementById('codOption').checked) {
        addressContainer.style.display = 'block';
        // Set shipping fee to ₱100.00
        shippingFeeSpan.textContent = '₱100.00';
        // Add 100 to subtotal for total
        totalAmount += 100;
      } else {
        addressContainer.style.display = 'none';
        // Reset shipping fee
        shippingFeeSpan.textContent = '₱0.00';
      }

      // Update the summary total display
      document.getElementById('summary-total').textContent = `₱${totalAmount.toFixed(2)}`;
    }

    // Function to get user ID from cookie
    function getUserIdFromCookie() {
      const cookieName = 'DWHMA0';
      const cookies = document.cookie.split(';').map(cookie => cookie.trim());
      const targetCookie = cookies.find(cookie => cookie.startsWith(`${cookieName}=`));

      if (targetCookie) {
        try {
          // Get cookie value and decode URI components
          const cookieValue = decodeURIComponent(targetCookie.split('=')[1]);
          // Parse the JSON data
          const userData = JSON.parse(cookieValue);
          // Extract and return only the user_id
          return userData.user_id;
        } catch (error) {
          console.error('Error parsing cookie data:', error);
          return null;
        }
      }

      console.error('User cookie not found');
      return null;
    }

    document.getElementById('placeOrderBtn').addEventListener('click', () => {
      const selectedMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
      const address = document.getElementById('deliveryAddress').value.trim();
      const userId = getUserIdFromCookie();

      // Validate user login
      if (!userId) {
        Swal.fire({
          icon: 'error',
          title: 'Login Required',
          text: 'Please log in to complete your order.',
          footer: '<a href="login-page.php">Click here to login</a>'
        });
        return;
      }

      // Validate address if COD
      if (selectedMethod === 'COD' && !address) {
        Swal.fire({
          icon: 'error',
          title: 'Address Required',
          text: 'Please enter your delivery address for Cash on Delivery.'
        });
        return;
      }

      // Get cart
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      if (cart.length === 0) {
        Swal.fire({
          icon: 'error',
          title: 'Empty Cart',
          text: 'Your cart is empty. Please add items before checkout.'
        });
        return;
      }

      // Calculate total amount considering COD or Pickup
      const totalAmount = selectedMethod === 'COD' ? subtotal + 100 : subtotal;

      // Variable to hold reference number if provided
      let referenceNumber = null;

      // Function to proceed with order submission
      function submitOrder() {
        const orderData = {
          user_id: userId,
          payment_method: selectedMethod,
          delivery_address: selectedMethod === 'COD' ? address : 'Pickup',
          total_amount: totalAmount,
          items: cart,
          reference_number: referenceNumber // include reference number if available
        };

        console.log(orderData);

        // Show confirmation before submitting
        Swal.fire({
          title: 'Confirm Order',
          text: `Total: ₱${totalAmount.toFixed(2)}\nPayment: ${selectedMethod}`,
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#4CAF50',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Place Order'
        }).then((result) => {
          if (result.isConfirmed) {
            // Send order to server
            fetch('homepage/mysql/place_order.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
              body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                Swal.fire({
                  title: 'Order Placed!',
                  text: `Order #${data.order_id} has been successfully placed.`,
                  icon: 'success',
                  timer: 3000,
                  showConfirmButton: false
                }).then(() => {
                  localStorage.removeItem('cart');
                  window.location.href = `account.php`;
                });
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Order Failed',
                  text: data.message || 'There was an error processing your order.'
                });
              }
            })
            .catch(error => {
              console.error('Error:', error);
              Swal.fire({
                icon: 'error',
                title: 'Server Error',
                text: 'There was a problem connecting to the server. Please try again.'
              });
            });
          }
        });
      }

      if (selectedMethod === 'Pickup') {
        // Ask user if they want to pay now or later
        Swal.fire({
          title: 'Choose Payment Option',
          text: 'Would you like to pay now or pay later?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Pay Now',
          cancelButtonText: 'Pay Later'
        }).then((result) => {
          if (result.isConfirmed) {
            // Show a custom SweetAlert with image and number input
            Swal.fire({
              title: 'Complete Payment',
              html:
                `<img src="assets/img/gcash.jpg" alt="Payment" style="width:280px; display:block; margin: 10px auto;">
                 <p>Please enter the Ref No. after paying.:</p>
                 <input type="text" id="refferenceNum" class="swal2-input" placeholder="Enter refference number">`,
              focusConfirm: false,
              showCancelButton: true,
              confirmButtonText: 'Submit Payment',
              preConfirm: () => {
                const refferenceNum = document.getElementById('refferenceNum').value;
                if (!refferenceNum || refferenceNum.length <= 12) {
                  Swal.showValidationMessage('Please enter a valid refference number.');
                  return false;
                }
                return refferenceNum;
              }
            }).then((paymentResult) => {
              if (paymentResult.isConfirmed) {
                referenceNumber = paymentResult.value; // Capture reference number
                // Proceed with order submission including reference number if required
                submitOrder();
              }
            });
          } else {
            // User chose to pay later
            // Proceed with order submission without reference number
            submitOrder();
          }
        });
      } else if (selectedMethod === 'COD') {
        // For COD, proceed to submit directly
        // But check if user wants to pay now with reference number
        // If needed, you can implement similar prompt here
        submitOrder();
      }
    });

    // Load order items when the page loads
    window.addEventListener('DOMContentLoaded', function() {
      displayOrderItems();
    });
  </script>

</body>
</html>