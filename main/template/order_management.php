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
                              <div class="container-fluid mb-3">
                                  <div class="row align-items-center justify-content-between">
                                    <!-- Left side: Product List heading -->
                                    <div class="col-12 col-md-auto mb-2 mb-md-0">
                                      <h2 class="mb-0">Order List</h2>
                                    </div>
                                    <!-- Right side: Search and Button -->
                                    <div class="col-12 col-md-auto d-flex align-items-center">
                                      <input type="text" id="searchOrder" class="form-control me-2" placeholder="Search order...">
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportModal">
                                          Generate Report
                                        </button>
                                    </div>
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
                                              <th>Tracking Status</th>
                                              <th>Order Status</th>
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

        <div id="reportContent" class="mt-4"></div>

        <!-- Modal -->
        <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel">Generate Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="reportForm">
                  <!-- Select Option -->
                  <div class="mb-3">
                    <label for="reportType" class="form-label">Report Type</label>
                    <select class="form-select" id="reportType" required>
                      <option value="" disabled selected>Select report type</option>
                      <option value="Pending">Pending</option>
                      <option value="Processing">Processing</option>
                      <option value="Shipped">Shipped</option>
                      <option value="Delivered">Delivered</option>
                      <option value="Cancelled">Cancelled</option>
                      <option value="Ready for Pickup">Ready for Pickup</option>
                      <option value="Picked Up">Picked Up</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>

                  <!-- Start Date -->
                  <div class="mb-3">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="startDate" required>
                  </div>

                  <!-- End Date -->
                  <div class="mb-3">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="endDate" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="generateReportBtn">Generate</button>
              </div>
            </div>
          </div>
        </div>

        <!-- VIEW IMAGE MODAL -->
        <div class="modal fade" id="viewImageModal" tabindex="-1" aria-labelledby="viewImageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
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

    <script>
      document.getElementById('generateReportBtn').addEventListener('click', function() {
        const reportType = document.getElementById('reportType').value;
        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;

        if (!reportType || !startDate || !endDate) {
          alert('Please fill out all fields.');
          return;
        }

        // Construct the URL with query parameters
        const url = `mysql/export.php?reportType=${encodeURIComponent(reportType)}&startDate=${encodeURIComponent(startDate)}&endDate=${encodeURIComponent(endDate)}`;

        // Open the export in a new tab (or you can use window.location.href to open in same tab)
        window.open(url, '_blank');

        // Optional: Close the modal if needed
        const modal = bootstrap.Modal.getInstance(document.getElementById('reportModal'));
        modal.hide();
      });
    </script>

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

                        // console.log(orders);

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
                                    refference_num: item.refference_num,
                                    tracking_status: item.tracking_status || '-',
                                    status_comments: item.status_comments || '-',
                                    order_date: item.order_date,
                                    total_items: parseInt(item.total_items) || 0,
                                    total_quantity: parseInt(item.quantity) || 0,
                                    products: [], // Store images here
                                };
                            } else {
                                // Aggregate total_items and quantities for grouped orders if needed
                                groupedOrders[orderId].total_items += parseInt(item.total_items) || 0;
                                groupedOrders[orderId].total_quantity += parseInt(item.quantity) || 0;
                            }

                            // Parse products JSON to get images
                            if (item.products) {
                                try {
                                    const productsArray = JSON.parse(`[${item.products}]`);

                                    productsArray.forEach(prod => {
                                        if (prod.image) {
                                            const exists = groupedOrders[orderId].products.find(p => p.image === prod.image);
                                            if (!exists) {
                                                groupedOrders[orderId].products.push({
                                                    image: prod.image,
                                                    quantity: parseInt(prod.quantity) || 1,
                                                    name: prod.name || '' // optional
                                                });
                                            }
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
                            const imagesHtml = order.products.map(prod =>
                                `<img src="mysql/${prod.image}"
                                      alt="Product Image"
                                      style="width:40px; height:40px; object-fit:cover; margin-right:5px; border-radius:4px;"
                                      onclick="viewImage('${prod.image}', ${prod.quantity})"
                                      title="Qty: ${prod.quantity}"
                                      onmouseover="this.style.cursor='pointer';"
                                      onmouseout="this.style.cursor='default';">`
                            ).join('');

                            const isCancelledOrDelivered = order.current_status === 'Cancelled' || order.current_status === 'Delivered' || order.current_status === 'Picked Up';

                            const actionButtons = order.tracking_status === 'Pending'
                                ? `
                                    <button class="btn btn-primary btn-sm" onclick="handleApprove('${order.order_id}')" ${isCancelledOrDelivered ? 'disabled' : ''}>Approve</button>
                                    <button class="btn btn-danger btn-sm" onclick="handleDecline('${order.order_id}')" ${isCancelledOrDelivered ? 'disabled' : ''}>Decline</button>
                                  `
                                : `
                                    <button class="btn btn-primary btn-sm" onclick="handleUpdateStatus('${order.order_id}', '${order.payment_method}')" ${isCancelledOrDelivered ? 'disabled' : ''}>Update Status</button>
                                  `;



                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${order.order_id}</td>
                                <td>${order.first_name} ${order.last_name}</td>
                                <td>${order.payment_method}</td>
                                <td>
                                  ${order.delivery_address} ${order.refference_num ? `<a href="javascript:void(0);" onclick="showGcashPaymentDetails('${order.refference_num}')">- Paid via Gcash</a>` : ''}
                                </td>
                                <td>${order.total_amount}</td>
                                <td>${order.current_status}</td>
                                <td>${order.status_comments}</td>
                                <td>${imagesHtml}</td>
                                <td>${formatDate(order.order_date)}</td>
                                <td>${actionButtons}</td>
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

        function handleUpdateStatus(orderId, payment_method) {
          let optionsHTML = '';
          if (payment_method === 'Pickup') {
            optionsHTML = `
              <label for="statusSelect">Select Status:</label>
              <select id="statusSelect" class="swal2-select" style="width: 60%;">
                <option value="Ready for Pickup">Ready for Pickup</option>
                <option value="Picked Up">Picked Up</option>
              </select>
            `;
          } else if (payment_method === 'COD') {
            optionsHTML = `
              <label for="statusSelect">Select Status:</label>
              <select id="statusSelect" class="swal2-select" style="width: 60%;">
                <option value="Shipped">Shipped</option>
                <option value="Delivered">Delivered</option>
              </select>
            `;
          } else {
            optionsHTML = `
              <label for="statusSelect">Enter Status:</label>
              <input type="text" id="statusSelect" class="swal2-input" placeholder="Enter status" />
            `;
          }

          Swal.fire({
            title: 'Update Order Status',
            html: `
              <p>Are you sure you want to update the status for order: ${orderId}?</p>
              ${optionsHTML}
            `,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Update',
            cancelButtonText: 'Cancel',
            didOpen: () => {
              const selectElement = Swal.getPopup().querySelector('#statusSelect');
              if (selectElement) {
                selectElement.focus();
              }
            }
          }).then((result) => {
            if (result.isConfirmed) {
              const selectedStatus = Swal.getPopup().querySelector('#statusSelect').value;

              // Using POST method for better security and convention
                fetch('mysql/update_order_status.php', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                  },
                  body: `id=${encodeURIComponent(orderId)}&status=${encodeURIComponent(selectedStatus)}`
                })
                .then(response => response.json())
                .then(data => {
                  if (data.success) {
                    fetchOrders();
                    Swal.fire('Updated!', data.message, 'success');
                  } else {
                    Swal.fire('Error', data.message, 'error');
                  }
                })
                .catch(error => {
                  Swal.fire('Error', 'An error occurred while updating the status.', 'error');
                  console.error('Error:', error);
                });
            }
          });
        }

        function viewImage(imagePath, quantity) {
            const modalImage = document.getElementById('modalImage');
            const modalLabel = document.getElementById('viewImageModalLabel');

            modalImage.src = `mysql/${imagePath}`;
            modalLabel.textContent = `Quantity: ${quantity}`;

            const viewImageModal = new bootstrap.Modal(document.getElementById('viewImageModal'));
            viewImageModal.show();
        }

        function handleApprove(orderId) {
            Swal.fire({
                title: 'Approve Order?',
                text: `Are you sure you want to approve order #${orderId}?`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, Approve',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call the PHP backend
                    fetch(`mysql/approve_order.php?id=${orderId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Approved!', `Order #${orderId} has been approved.`, 'success');
                                fetchOrders(); // Reload the table to reflect status change
                            } else {
                                Swal.fire('Error', data.message, 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                        });
                }
            });
        }

        function handleDecline(orderId) {
            Swal.fire({
                title: 'Decline Order?',
                text: `Are you sure you want to decline order #${orderId}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Decline',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call the PHP backend
                    fetch(`mysql/decline_order.php?id=${orderId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Decline!', `Order #${orderId} has been decline.`, 'success');
                                fetchOrders(); // Reload the table to reflect status change
                            } else {
                                Swal.fire('Error', data.message, 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                        });
                }
            });
        }
    </script>

    <script>
        function showGcashPaymentDetails(orderId) {
          Swal.fire({
            title: 'Gcash Payment Details',
            text: 'Gcash Ref No.: ' + orderId,
            icon: 'info',
            confirmButtonText: 'OK'
          });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const table = document.getElementById('productTable');
          const headers = table.querySelectorAll('th');

          let sortDirection = {}; // Keep track of sort direction per column

          headers.forEach((header, index) => {
            header.style.cursor = 'pointer'; // Indicate clickable

            header.addEventListener('click', () => {
              const rows = Array.from(table.tBodies[0].rows);

              // Determine sort direction: toggle between asc and desc
              const dir = sortDirection[index] === 'asc' ? 'desc' : 'asc';
              sortDirection = {}; // Reset all directions
              sortDirection[index] = dir;

              rows.sort((a, b) => {
                const cellA = a.cells[index].innerText.trim();
                const cellB = b.cells[index].innerText.trim();

                // Handle numeric sorting if possible
                const numA = parseFloat(cellA.replace(/[^0-9.-]/g, ''));
                const numB = parseFloat(cellB.replace(/[^0-9.-]/g, ''));

                if (!isNaN(numA) && !isNaN(numB)) {
                  return dir === 'asc' ? numA - numB : numB - numA;
                }

                // Otherwise, compare as strings (case-insensitive)
                return dir === 'asc'
                  ? cellA.localeCompare(cellB, undefined, { numeric: true, sensitivity: 'base' })
                  : cellB.localeCompare(cellA, undefined, { numeric: true, sensitivity: 'base' });
              });

              // Append sorted rows to the tbody
              rows.forEach(row => table.tBodies[0].appendChild(row));
            });
          });
        });
        </script>
  </body>
</html>