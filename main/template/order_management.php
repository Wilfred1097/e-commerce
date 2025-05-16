<?php include 'structure/check_cookies.php'; ?>
<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Handicrafts - Order Management</title>
    <!-- Favicon icon-->


    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css"/>
    <link rel="stylesheet" href="../assets/css/bulk-style.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/calendar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
  </head>
  <style>
      #suggestionsContainer {
          position: absolute;
          z-index: 1000;
          background-color: white;
          border: 1px solid #ccc;
          width: calc(100% - 2px); /* Adjust width to match input */
          max-height: 200px;
          overflow-y: auto;
        }

        #suggestionsContainer .dropdown-item {
          cursor: pointer;
          padding: 10px;
        }

        #suggestionsContainer .dropdown-item:hover {
          background-color: #f8f9fa; /* Light gray */
        }
  </style>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page header start-->
      <?php include 'structure/header.php'; ?>
      <!-- Page header end-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page sidebar start-->
        <?php include 'structure/sidebar.php'; ?>
        <!-- Page sidebar end-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2>Order Management</h2>
                        <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid calendar-basic mt-3">
              <div class="card">
                  <div class="card-body">
                      <div class="row" id="wrap">
                          <div class="col-md-12 col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                  <!-- Left side: Product List heading -->
                                  <h2 class="mb-2 mb-md-0">Order List</h2>

                                  <!-- Right side: Buttons -->
                                  <div>
                                    <input type="text" id="searchOrder" class="form-control" placeholder="Search order...">
                                  </div>
                                </div>

                                <!-- Events Table -->
                                <div class="table-responsive theme-scrollbar">
                                  <div class="mb-3 mt-2">

                                  </div>
                                    <table id="productTable" class="table display table-bordernone">
                                        <thead>
                                            <tr>
                                              <th>Order ID</th>
                                              <th>Customer</th>
                                              <th>Payment</th>
                                              <th>Delivery Address</th>
                                              <th>Total Amount</th>
                                              <th>Order Status</th>
                                              <th>Tracking Status</th>
                                              <th>Tracking Comments</th>
                                              <th>Total Ordered Items</th>
                                              <th>Product</th>
                                              <th>Order Date</th>
                                              <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="orderTableBody">
                                            <!-- Events will be dynamically inserted here -->
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Container-fluid ends-->
        </div>

        <!-- VIEW IMAGE MODAL -->
        <div class="modal fade" id="viewImageModal" tabindex="-1" aria-labelledby="viewImageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewImageModalLabel">Product Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="Product Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- Page header start-->
        <?php include 'structure/footer.php'; ?>
        <!-- Page header end-->
      </div>
    </div>
    <!-- Sweetalert js-->
    <script src="../assets/js/sweetalert/sweetalert2.min.js"></script>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- feather-->
    <script src="../assets/js/vendors/feather-icon/feather.min.js"></script>
    <script src="../assets/js/vendors/feather-icon/custom-script.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- select2_options-->
    <script src="../assets/js/vendors/@yaireo/tagify/dist/tagify.js"></script>
    <script src="../assets/js/vendors/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script src="../assets/js/vendors/@yaireo/tagify/dist/intlTelInput.min.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>

    <script>
        // Ensure loadCategories is called when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            fetchOrders();
        });

        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: '2-digit',
                hour12: true,
            };
            return date.toLocaleString('en-US', options);
        }

        let groupedOrders = {};

        function fetchOrders() {
            fetch('mysql/get_order_details.php')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const orders = data.data;
                        const orderTableBody = document.getElementById('orderTableBody');
                        orderTableBody.innerHTML = '';

                        groupedOrders = {}; // Reset

                        orders.forEach(item => {
                            const orderId = item.order_id;

                            if (!groupedOrders[orderId]) {
                                groupedOrders[orderId] = {
                                    order_id: orderId,
                                    first_name: item.first_name,
                                    last_name: item.last_name,
                                    payment_method: item.payment_method,
                                    delivery_address: item.delivery_address,
                                    total_amount: item.total_amount,
                                    current_status: item.current_status,
                                    tracking_status: item.tracking_status || '-',
                                    status_comments: item.status_comments || '-',
                                    order_date: item.order_date,
                                    total_items: parseInt(item.total_items) || 0,
                                    total_quantity: parseInt(item.quantity) || 0,
                                    images: [], // Store images here
                                };
                            } else {
                                // Aggregate total_items and quantities for grouped orders if needed
                                groupedOrders[orderId].total_items += parseInt(item.total_items) || 0;
                                groupedOrders[orderId].total_quantity += parseInt(item.quantity) || 0;
                            }

                            // Parse products JSON to get images
                            if (item.products) {
                                try {
                                    // Some APIs may return an array, others a JSON string of array - parse safely
                                    const productsArray = JSON.parse(`[${item.products}]`); // wrap in [ ] to parse multiple JSON objects separated by commas

                                    productsArray.forEach(prod => {
                                        if (prod.image && !groupedOrders[orderId].images.includes(prod.image)) {
                                            groupedOrders[orderId].images.push(prod.image);
                                        }
                                    });
                                } catch (e) {
                                    console.warn('Failed to parse products JSON:', e);
                                }
                            }
                        });

                        // Render table rows with images after order_date
                        Object.values(groupedOrders).forEach(order => {
                            // Create image thumbnails HTML string
                            const imagesHtml = order.images.map(imgPath =>
                                `<img src="mysql/${imgPath}" alt="Product Image" style="width:40px; height:40px; object-fit:cover; margin-right:5px; border-radius:4px;" onclick="viewImage('${imgPath}')" onmouseover="this.style.cursor='pointer';" onmouseout="this.style.cursor='default';">`
                            ).join('');

                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${order.order_id}</td>
                                <td>${order.first_name} ${order.last_name}</td>
                                <td>${order.payment_method}</td>
                                <td>${order.delivery_address}</td>
                                <td>${order.total_amount}</td>
                                <td>${order.current_status}</td>
                                <td>${order.tracking_status}</td>
                                <td>${order.status_comments}</td>
                                <td>${order.total_items} ${order.total_items === 1 ? 'pc' : 'pcs'}</td>
                                <td>${imagesHtml}</td>
                                <td>${formatDate(order.order_date)}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">
                                        Approve
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Decline
                                    </button>
                                </td>
                            `;
                            orderTableBody.appendChild(row);
                        });

                    } else {
                        alert('Failed to fetch orders: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching orders:', error);
                    alert('An error occurred while fetching orders.');
                });
        }

        // 🟢 Filter transactions based on the search input
        $('#searchOrder').on('keyup', function () {
            let searchValue = $(this).val().toLowerCase();
            $('#productTable tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });

         function viewImage(imagePath) {
            // Get references to the modal elements
            const modalImage = document.getElementById('modalImage');

            // Set the modal image source and title
            modalImage.src = `mysql/${imagePath}`;

            // Show the modal
            const viewImageModal = new bootstrap.Modal(document.getElementById('viewImageModal'));
            viewImageModal.show();
        }
    </script>
  </body>
</html>