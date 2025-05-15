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
        <li>
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
                echo '<a href="account.php" class="d-flex align-items-center" title="Profile">Profile</a>';
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
    <div class="container">
      <h2 class="mb-4">Your Shopping Cart</h2>

      <!-- Cart Items -->

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

      function renderCartItems(products) {
        const cartContainer = document.querySelector('#cart-section .container');

        // Clear previous content except the heading
        cartContainer.innerHTML = '<h2 class="mb-4">Your Shopping Cart</h2>';

        // Check if cart is empty
        if (products.length === 0) {
            const emptyCart = document.createElement('div');
            emptyCart.className = 'text-center py-5';
            emptyCart.innerHTML = `
                <h4>Your cart is empty</h4>
                <p>Browse our products and add something you like!</p>
                <a href="index.php" class="btn btn-success mt-3">Continue Shopping</a>
            `;
            cartContainer.appendChild(emptyCart);
            return;
        }

        // Create cart items container
        const itemsContainer = document.createElement('div');
        itemsContainer.className = 'cart-items mb-4';

        // Track total price
        let totalPrice = 0;

        // For each product, create a new cart row
        products.forEach(product => {
            // Make sure we're using the correct quantity property and price is a number
            const quantity = parseInt(product.quantity || 0);
            const price = parseFloat(product.price || 0);
            const availableQty = parseInt(product.qty || 0); // Get available quantity from product data
            const productTotal = price * quantity;

            // Only add to total if it's a valid number
            if (!isNaN(productTotal)) {
                totalPrice += productTotal;
            }

            const row = document.createElement('div');
            row.className = 'row align-items-center mb-3 pb-3 cart-item border-bottom';
            row.setAttribute('data-id', product.id);

            // Product Image
            const imgCol = document.createElement('div');
            imgCol.className = 'col-md-2';
            const img = document.createElement('img');
            img.src = 'main/template/mysql/' + product.image;
            img.alt = product.category_name;
            img.className = 'img-fluid rounded';
            imgCol.appendChild(img);

            // Product Info
            const infoCol = document.createElement('div');
            infoCol.className = 'col-md-4';

            const name = document.createElement('h5');
            name.textContent = product.category_name;

            const owner = document.createElement('p');
            owner.textContent = `Artisans: ${product.owner}`;

            const description = document.createElement('p');
            description.className = 'small text-muted';
            description.textContent = product.description;

            const priceElem = document.createElement('p');
            priceElem.className = 'fw-bold';
            priceElem.textContent = `Price: ₱${price.toFixed(2)}`;

            // Add available quantity info
            const stockInfo = document.createElement('p');
            stockInfo.className = 'small';
            stockInfo.innerHTML = `Available: <span class="badge bg-${availableQty > 10 ? 'success' : availableQty > 5 ? 'warning' : 'success'}">${availableQty}</span>`;

            infoCol.appendChild(name);
            infoCol.appendChild(owner);
            infoCol.appendChild(description);
            infoCol.appendChild(priceElem);
            infoCol.appendChild(stockInfo);

            // Quantity Controls
            const qtyCol = document.createElement('div');
            qtyCol.className = 'col-md-3';

            const qtyLabel = document.createElement('label');
            qtyLabel.className = 'form-label';
            qtyLabel.textContent = 'Quantity:';

            const qtyWrapper = document.createElement('div');
            qtyWrapper.className = 'input-group';

            const minusBtn = document.createElement('button');
            minusBtn.className = 'btn btn-outline-secondary';
            minusBtn.innerHTML = '<i class="bi bi-dash"></i>';
            minusBtn.onclick = () => {
                if (parseInt(qtyInput.value) > 1) {
                    qtyInput.value = parseInt(qtyInput.value) - 1;
                    updateCartItemQuantity(product.id, parseInt(qtyInput.value));
                }
            };

            const qtyInput = document.createElement('input');
            qtyInput.type = 'number';
            qtyInput.className = 'form-control text-center';
            qtyInput.value = quantity;
            qtyInput.min = 1;
            qtyInput.max = availableQty; // Set maximum to available quantity
            qtyInput.onchange = () => {
                let newQty = parseInt(qtyInput.value);

                // Ensure minimum is 1
                if (newQty < 1 || isNaN(newQty)) {
                    newQty = 1;
                    qtyInput.value = newQty;
                }

                // Ensure maximum doesn't exceed available stock
                if (newQty > availableQty) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Limited Stock',
                        text: `Sorry, only ${availableQty} items available.`,
                        confirmButtonText: 'OK'
                    });
                    newQty = availableQty;
                    qtyInput.value = newQty;
                }

                updateCartItemQuantity(product.id, newQty);
            };

            const plusBtn = document.createElement('button');
            plusBtn.className = 'btn btn-outline-secondary';
            plusBtn.innerHTML = '<i class="bi bi-plus"></i>';
            plusBtn.onclick = () => {
                const currentQty = parseInt(qtyInput.value);

                // Only increase if below available stock
                if (currentQty < availableQty) {
                    qtyInput.value = currentQty + 1;
                    updateCartItemQuantity(product.id, currentQty + 1);
                } else {
                    // Show message if trying to exceed available stock
                    Swal.fire({
                        icon: 'warning',
                        title: 'Limited Stock',
                        text: `Sorry, only ${availableQty} items available.`,
                        confirmButtonText: 'OK'
                    });
                }
            };

            qtyWrapper.appendChild(minusBtn);
            qtyWrapper.appendChild(qtyInput);
            qtyWrapper.appendChild(plusBtn);

            qtyCol.appendChild(qtyLabel);
            qtyCol.appendChild(qtyWrapper);

            // Subtotal and Delete Button
            const actionCol = document.createElement('div');
            actionCol.className = 'col-md-3 text-end';

            const subtotal = document.createElement('p');
            subtotal.className = 'fw-bold mb-2';
            subtotal.textContent = `Subtotal: ₱${isNaN(productTotal) ? '0.00' : productTotal.toFixed(2)}`;

            const deleteBtn = document.createElement('button');
            deleteBtn.className = 'btn btn-success btn-sm';
            deleteBtn.innerHTML = '<i class="bi bi-trash"></i> Remove';
            deleteBtn.onclick = () => {
                removeCartItem(product.id);
            };

            actionCol.appendChild(subtotal);
            actionCol.appendChild(deleteBtn);

            // Add all columns to row
            row.appendChild(imgCol);
            row.appendChild(infoCol);
            row.appendChild(qtyCol);
            row.appendChild(actionCol);

            // Append to cart items container
            itemsContainer.appendChild(row);
        });

        cartContainer.appendChild(itemsContainer);

        // Add order summary and checkout button
        const summaryRow = document.createElement('div');
        summaryRow.className = 'row mt-4';
        summaryRow.innerHTML = `
            <div class="col-md-8">
                <a href="index.php" class="btn btn-outline-success mb-3">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>₱${totalPrice.toFixed(2)}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping:</span>
                            <span>Calculated at checkout</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold mb-3">
                            <span>Total:</span>
                            <span>₱${totalPrice.toFixed(2)}</span>
                        </div>
                        <button id="checkout-btn" class="btn btn-success w-100">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        `;

        cartContainer.appendChild(summaryRow);

        // Add checkout button event listener
        document.getElementById('checkout-btn').addEventListener('click', function() {
            // Redirect to checkout page or handle checkout process
            window.location.href = 'checkout.php';
        });
    }

    function updateCartItemQuantity(productId, newQuantity) {
        // Update quantity in localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const itemIndex = cart.findIndex(item => item.productId === productId);

        if (itemIndex !== -1) {
            cart[itemIndex].quantity = newQuantity; // Use 'quantity' to match your localStorage structure
            localStorage.setItem('cart', JSON.stringify(cart));

            // Re-fetch and render cart to update all calculations
            sendCartToServer();
        }
    }

    function removeCartItem(productId) {
        // Remove item from localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = cart.filter(item => item.productId !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));

        // Re-fetch and render cart
        sendCartToServer();
        updateCartBadge();
    }

    function handleProductData(data) {
        if (data.status === 'success' && Array.isArray(data.data)) {
            // Enhance product data with quantity from localStorage
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            const enhancedProducts = data.data.map(product => {
                // Find this product in the cart
                const cartItem = cart.find(item => item.productId === product.id);

                // Add quantity from cart to the product object
                if (cartItem) {
                    product.quantity = cartItem.quantity;

                    // Check if the requested quantity exceeds available stock
                    if (product.quantity > product.qty) {
                        // Automatically adjust the quantity to max available
                        product.quantity = product.qty;
                        cartItem.quantity = product.qty;

                        // Update localStorage with corrected quantity
                        localStorage.setItem('cart', JSON.stringify(cart));

                        // Show a notification about the adjustment
                        Swal.fire({
                            icon: 'info',
                            title: 'Quantity Adjusted',
                            text: `We've adjusted the quantity of ${product.category_name} to match our current stock of ${product.qty}.`,
                            timer: 4000,
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false
                        });
                    }
                } else {
                    product.quantity = 0;
                }

                return product;
            });

            renderCartItems(enhancedProducts);
        } else {
            // Handle error or empty data
            console.error('No products found or error:', data.message);
            renderCartItems([]); // Render empty cart
        }
    }

    // Fetch cart items and render them
    function sendCartToServer() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        if (cart.length === 0) {
            renderCartItems([]); // Render empty cart
            return;
        }

        const productIds = cart.map(item => item.productId);
        const idsParam = productIds.join(',');

        fetch(`homepage/mysql/get_product_info.php?productIds=${encodeURIComponent(idsParam)}`)
            .then(response => response.json())
            .then(data => {
                handleProductData(data);
            })
            .catch(error => {
                console.error('Error fetching product info:', error);
                renderCartItems([]); // Render empty cart on error
            });
    }

    // Initialize cart when page loads
    window.addEventListener('DOMContentLoaded', updateCartBadge);
    window.addEventListener('DOMContentLoaded', sendCartToServer);
  </script>

</body>

</html>