<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Handicrafts - Dashboard</title>
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
    <!-- <link rel="stylesheet" href="../assets/css/themify.css"/> -->
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
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
              <!--   <div class="row">
                <div class="col-sm-6 col-12">
                  <h2>Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                </div>
              </div> -->
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="col-xxl-12 col-xl-12 proorder-xxl-12 col-lg-12 box-col-12">
              <div class="card job-card">
                <div class="card-header pb-0 card-no-border">
                  <div class="header-top">
                    <h3>Sales Today</h3>
                    <div>
                      <!-- <p>Wednesday 6, <span>Dec 2022</span></p> -->
                    </div>
                  </div>
                </div>
                <div class="card-body pt-2">
                  <ul class="d-flex align-center justify-content-center gap-3">
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-primary">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#job-bag"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COALESCE(SUM(o.total_amount), 0) AS total_amount_sum FROM orders o WHERE DATE(o.date_updated) = CURDATE() GROUP BY DATE(o.date_updated);");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $totalSalesToday = $result['total_amount_sum'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo number_format($totalSalesToday, 2);
                          ?>
                          </h3>
                          <p>Total Sales Today</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-secondary">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#employees"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COUNT(order_id) as order_count FROM orders WHERE DATE(updated_at) = CURRENT_DATE()");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $totalSalesToday = $result['order_count'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo $totalSalesToday;
                          ?>
                          </h3>
                          <p>Total Orders Today</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-warning">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#hours-work"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COUNT(orders.order_id) AS delivered_product FROM orders JOIN order_items ON order_items.order_id = orders.order_id WHERE orders.order_status = 'Shipped';");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $delivered_product = $result['delivered_product'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo $delivered_product;
                          ?>
                          </h3>
                          <p>Total Shipped Product</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-warning">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#hours-work"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COUNT(orders.order_id) AS delivered_product FROM orders JOIN order_items ON order_items.order_id = orders.order_id WHERE orders.order_status = 'Delivered';");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $delivered_product = $result['delivered_product'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo $delivered_product;
                          ?>
                          </h3>
                          <p>Total Delivered Product</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-warning">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#hours-work"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COUNT(orders.order_id) AS delivered_product FROM orders JOIN order_items ON order_items.order_id = orders.order_id WHERE orders.order_status = 'Picked Up';");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $delivered_product = $result['delivered_product'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo $delivered_product;
                          ?>
                          </h3>
                          <p>Total Picked Up Product</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex gap-2">
                        <div class="flex-shrink-0 bg-light-warning">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#hours-work"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1">
                          <h3>
                          <?php
                          // Include your database connection
                          require 'mysql/conn.php';
                          // Prepare and execute the query
                          $stmt = $pdo->prepare("SELECT COUNT(orders.order_id) AS delivered_product FROM orders JOIN order_items ON order_items.order_id = orders.order_id WHERE orders.order_status = 'Cancelled';");
                          $stmt->execute();
                          // Fetch the result
                          $result = $stmt->fetch(PDO::FETCH_ASSOC);
                          // Get the total amount, default to 0 if null
                          $delivered_product = $result['delivered_product'] ?? 0;
                          // Format the number if needed, e.g., currency
                          echo $delivered_product;
                          ?>
                          </h3>
                          <p>Total Cancelled Product</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="container-fluid">
            <div class="card-body pt-2">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                    <div class="row p-2 m-2">
                      <!-- Title - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <h3>Best Selling Products</h3>
                      </div>
                      <!-- Search box - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6">
                        <input type="text" id="search-New-Orders" class="form-control" placeholder="Search New Orders...">
                      </div>
                    </div>
                    <div class="card-body transaction-history pt-0">
                      <div class="table-responsive theme-scrollbar">
                        <table class="table display table-bordernone" id="best-selling" style="width:100%">
                          <thead>
                            <tr>
                              <th>Product ID</th>
                              <th>Number of Orders</th>
                              <th>Product Image</th>
                              <th>Product Owner</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="card-body pt-2">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                    <div class="row p-2 m-2">
                      <!-- Title - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <h3>New Order</h3>
                      </div>
                      <!-- Search box - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6">
                        <input type="text" id="search-New-Orders" class="form-control" placeholder="Search New Orders...">
                      </div>
                    </div>
                    <div class="card-body transaction-history pt-0">
                      <div class="table-responsive theme-scrollbar">
                        <table class="table display table-bordernone" id="new-order" style="width:100%">
                          <thead>
                            <tr>
                              <th>Date Ordered</th>
                              <th>Customer Name</th>
                              <th>Order Method</th>
                              <th>Ordered Product Qty.</th>
                              <th>Order Status</th>
                              <th>Amount</th>
                              <th>Delivery Address</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="card-body pt-2">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                      <div class="row p-2 m-2">
                        <!-- Title - full width on mobile, half width on larger screens -->
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                          <h3>Approved Order</h3>
                        </div>
                        <!-- Search box - full width on mobile, half width on larger screens -->
                        <div class="col-12 col-md-6">
                          <input type="text" id="search-Approved-Orders" class="form-control" placeholder="Search Approved Orders...">
                        </div>
                      </div>
                      <div class="card-body transaction-history pt-0">
                        <div class="table-responsive theme-scrollbar">
                          <table class="table display table-bordernone" id="approved-order" style="width:100%">
                            <thead>
                              <tr>
                                <th>Date Ordered</th>
                                <th>Customer Name</th>
                                <th>Order Method</th>
                                <th>Ordered Product Qty.</th>
                                <th>Order Status</th>
                                <th>Amount</th>
                                <th>Delivery Address</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="card-body pt-2">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                      <div class="row p-2 m-2">
                        <!-- Title - full width on mobile, half width on larger screens -->
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                          <h3>Delivered Order</h3>
                        </div>
                        <!-- Search box - full width on mobile, half width on larger screens -->
                        <div class="col-12 col-md-6">
                          <input type="text" id="search-Delivered-Orders" class="form-control" placeholder="Search delivered Orders...">
                        </div>
                      </div>
                      <div class="card-body transaction-history pt-0">
                        <div class="table-responsive theme-scrollbar">
                          <div class="mb-3 mt-2">
                          </div>
                          <table class="table display table-bordernone" id="delivered-order" style="width:100%">
                            <thead>
                              <tr>
                                <th>Date Ordered</th>
                                <th>Customer Name</th>
                                <th>Order Method</th>
                                <th>Ordered Product Qty.</th>
                                <th>Order Status</th>
                                <th>Amount</th>
                                <th>Delivery Address</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Events will be dynamically inserted here -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
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

            <!-- VIEW EVENT IMAGE MODAL -->
            <div class="modal fade" id="viewEventImageModal" tabindex="-1" aria-labelledby="viewEventImageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="viewEventImageModalLabel">Event Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img id="eventImageModalContent" src="" alt="Event Image" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <!-- Page header start-->
            <?php include 'structure/footer.php'; ?>
            <!-- Page header end-->
          </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <!-- height_equal-->
        <script src="../assets/js/height-equal.js"></script>
        <!-- config-->
        <script src="../assets/js/config.js"></script>
        <!-- apex-->
        <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
        <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
        <!-- scrollbar-->
        <script src="../assets/js/scrollbar/simplebar.js"></script>
        <script src="../assets/js/scrollbar/custom.js"></script>
        <!-- slick-->
        <script src="../assets/js/slick/slick.min.js"></script>
        <script src="../assets/js/slick/slick.js"></script>
        <!-- data_table-->
        <script src="../assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
        <!-- page_datatable-->
        <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
        <!-- page_datatable1-->
        <script src="../assets/js/js-datatables/datatables/datatable.custom1.js"></script>
        <!-- page_datatable-->
        <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
        <!-- theme_customizer-->
        <script src="../assets/js/theme-customizer/customizer.js"></script>
        <!-- chartjs-->
        <script src="../assets/js/chart/chartjs/chart.min.js"></script>
        <!-- page_chartjs-->
        <script src="../assets/js/chart/chartjs/chart.custom.js"></script>
        <!-- tilt-->
        <script src="../assets/js/animation/tilt/tilt.jquery.js"></script>
        <!-- page_tilt-->
        <script src="../assets/js/animation/tilt/tilt-custom.js"></script>
        <!-- dashboard_1-->
        <script src="../assets/js/dashboard/dashboard_1.js"></script>
        <!-- custom script -->
        <script src="../assets/js/script.js"></script>
        <script>
        fetchPendingProduct();
        fetchApprovedOrder();
        fetchDeliveredOrder();
        fetchBestSellingProduct()
        function fetchPendingProduct() {
        $.ajax({
        url: 'mysql/fetch_pending_order.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
        let tbody = $("#new-order tbody");
        tbody.empty();
        if (data.length > 0) {
        data.forEach(pending_orders => {
        let row = `
        <tr>
          <td>${new Date(pending_orders.order_date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: '2-digit' })}</td>
          <td>${pending_orders.first_name} ${pending_orders.middle_name} ${pending_orders.last_name}</td>
          <td>${pending_orders.payment_method}</td>
          <td>
            ${pending_orders.item_quantity} ${pending_orders.item_quantity === 1 ? 'product' : 'products'}
          </td>
          <td>${pending_orders.order_status}</td>
          <td>₱${pending_orders.total_amount ? parseFloat(pending_orders.total_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
          <td>${pending_orders.delivery_address}</td>
        </tr>
        `;
        tbody.append(row);
        });
        } else {
        tbody.append(`<tr><td colspan="5" class="text-center">No product found.</td></tr>`);
        }
        }
        });
        }
        $('#search-New-Orders').on('keyup', function () {
        let searchValue = $(this).val().toLowerCase();
        $('#new-order tbody tr').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
        });
        });

        function fetchBestSellingProduct() {
          $.ajax({
            url: 'mysql/fetch_best_selling_product.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
              const tbody = $("#best-selling tbody");
              tbody.empty();

              if (data.length > 0) {
                // console.log(data);
                data.forEach(best_selling => {
                  const orderDate = new Date(best_selling.order_date).toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: '2-digit'
                  });

                  const fullName = `${best_selling.first_name} ${best_selling.middle_name} ${best_selling.last_name}`;

                  const productCountText = `${best_selling.item_quantity} ${best_selling.item_quantity === 1 ? 'product' : 'products'}`;

                  const totalAmount = best_selling.total_amount
                    ? '₱' + parseFloat(best_selling.total_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 })
                    : 'N/A';

                  const row = `
                    <tr>
                      <td>${best_selling.id}</td>
                      <td>${best_selling.number_of_orders}  ${best_selling.number_of_orders === 1 ? 'product' : 'products'}</td>
                      <td>
                          <img
                              src="mysql/${best_selling.image}"
                              alt="${best_selling.image}"
                              style="width: 30px; height: auto; cursor: pointer;"
                              onclick="viewImage('${best_selling.image}', '${best_selling.image}')"
                          >
                      </td>
                      <td>${best_selling.owner}</td>
                      <td>${best_selling.price}</td>
                    </tr>
                  `;
                  tbody.append(row);
                });
              } else {
                tbody.append('<tr><td colspan="7" class="text-center">No programs found.</td></tr>');
              }
            },
            error: function(xhr, status, error) {
              console.error('Error fetching approved orders:', error);
            }
          });
        }

        function viewImage(imagePath, productName) {
            // Get references to the modal elements
            const modalImage = document.getElementById('modalImage');

            // Set the modal image source and title
            modalImage.src = `mysql/${imagePath}`;
            modalImage.alt = productName;

            // Show the modal
            const viewImageModal = new bootstrap.Modal(document.getElementById('viewImageModal'));
            viewImageModal.show();
        }

        function fetchApprovedOrder() {
        $.ajax({
        url: 'mysql/fetch_approved_order.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
        let tbody = $("#approved-order tbody");
        tbody.empty();
        if (data.length > 0) {
        data.forEach(pending_orders => {
        let row = `
        <tr>
          <td>${new Date(pending_orders.order_date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: '2-digit' })}</td>
          <td>${pending_orders.first_name} ${pending_orders.middle_name} ${pending_orders.last_name}</td>
          <td>${pending_orders.payment_method}</td>
          <td>
            ${pending_orders.item_quantity} ${pending_orders.item_quantity === 1 ? 'product' : 'products'}
          </td>
          <td>${pending_orders.order_status}</td>
          <td>₱${pending_orders.total_amount ? parseFloat(pending_orders.total_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
          <td>${pending_orders.delivery_address}</td>
        </tr>
        `;
        tbody.append(row);
        });
        } else {
        tbody.append(`<tr><td colspan="5" class="text-center">No programs found.</td></tr>`);
        }
        }
        });
        }
        $('#search-Approved-Orders').on('keyup', function () {
        let searchValue = $(this).val().toLowerCase();
        $('#approved-order tbody tr').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
        });
        });
        function fetchDeliveredOrder() {
        $.ajax({
        url: 'mysql/fetch_delivered_order.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
        let tbody = $("#delivered-order tbody");
        tbody.empty();
        if (data.length > 0) {
        data.forEach(pending_orders => {
        let row = `
        <tr>
          <td>${new Date(pending_orders.order_date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: '2-digit' })}</td>
          <td>${pending_orders.first_name} ${pending_orders.middle_name} ${pending_orders.last_name}</td>
          <td>${pending_orders.payment_method}</td>
          <td>
            ${pending_orders.item_quantity} ${pending_orders.item_quantity === 1 ? 'product' : 'products'}
          </td>
          <td>${pending_orders.order_status}</td>
          <td>₱${pending_orders.total_amount ? parseFloat(pending_orders.total_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
          <td>${pending_orders.delivery_address}</td>
        </tr>
        `;
        tbody.append(row);
        });
        } else {
        tbody.append(`<tr><td colspan="5" class="text-center">No programs found.</td></tr>`);
        }
        }
        });
        }
        $('#search-Delivered-Orders').on('keyup', function () {
        let searchValue = $(this).val().toLowerCase();
        $('#delivered-order tbody tr').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
        });
        });
        </script>
      </body>
    </html>