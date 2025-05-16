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
    <title>Handicrafts - Product Management</title>
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
                        <h2>Product Management</h2>
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
                              <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3">
                                  <!-- Left side: Product List heading -->
                                  <h2 class="mb-2 mb-md-0">Product List</h2>

                                  <!-- Right side: Buttons -->
                                  <div class="d-flex flex-column flex-md-row gap-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryManagementModal">Category Management</button>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#typeManagementModal">Type Management</button>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
                                  </div>
                                </div>
                              <!-- Calendar Container -->

                                <!-- Events Table -->
                                <div class="table-responsive theme-scrollbar">
                                  <div class="mb-3 mt-2">
                                      <input type="text" id="searchProduct" class="form-control" placeholder="Search product...">
                                  </div>
                                    <table id="productTable" class="table display table-bordernone">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Artisan</th>
                                                <th>Address</th>
                                                <th>Size</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Material</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="productTableBody">
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

        <!-- Product Category Management Modal -->
        <div class="modal fade" id="categoryManagementModal" tabindex="-1" aria-labelledby="categoryManagementModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="categoryManagementModalLabel">Add New Product Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Form with input and submit button in one row -->
                <form id="categoryForm" class="d-flex mb-3">
                  <input type="text" class="form-control me-2" id="categoryName" placeholder="Category Name" required>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <!-- Table displaying categories -->
                <table class="table table-bordered" id="categoryTable">
                  <thead>
                    <tr>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Example row, you can dynamically add more rows -->
                    <tr>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Type Management Modal -->
        <div class="modal fade" id="typeManagementModal" tabindex="-1" aria-labelledby="typeManagementModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="typeManagementModalLabel">Add New Product Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Form with input and submit button in one row -->
                <form id="typeForm" class="d-flex mb-3">
                  <input type="text" class="form-control me-2" id="typeName" placeholder="Type Name" required>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <!-- Table displaying categories -->
                <table class="table table-bordered" id="typeTable">
                  <thead>
                    <tr>
                      <th>Type Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Example row, you can dynamically add more rows -->
                    <tr>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- ADD PRODUCT MODAL -->
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="addProductForm" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label for="productCategory" class="form-label">Product Category</label>
                              <select class="form-select" id="productCategory" name="productCategory" required>
                                <option value="" disabled selected>Select Category</option>
                                <!-- Options will be populated dynamically -->
                              </select>
                            </div>

                            <div class="mb-3">
                              <label for="productSize" class="form-label">Product Size & Price</label>
                              <div class="row g-2 align-items-center">
                                <!-- Product Size Dropdown -->
                                <div class="col-md-5">
                                  <select class="form-select" id="productSize" name="productSize" required>
                                    <option value="" disabled selected>Select product size</option>
                                    <option value="sm">Small</option>
                                    <option value="md">Medium</option>
                                    <option value="lg">Large</option>
                                    <option value="xl">Extra Large</option>
                                  </select>
                                </div>
                                <!-- Price Input -->
                                <div class="col-md-4">
                                  <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Price" min="0" step="0.01" required>
                                </div>
                                <!-- Quantity Input -->
                                <div class="col-md-3">
                                  <input type="number" class="form-control" id="productQuantity" name="productQuantity" placeholder="Quantity" min="0" step="0.01" required>
                                </div>
                              </div>
                            </div>

                            <div class="mb-3">
                              <label for="productType" class="form-label">Product Type:</label>
                              <input type="text" class="form-control" id="productTypeInput" placeholder="Select Type(s)" readonly required>
                              <input type="hidden" id="productTypeHidden" name="productType">
                              <div id="suggestionsContainer" class="dropdown-menu show" style="display: none;">
                                <!-- Suggestions will be dynamically populated here -->
                              </div>
                            </div>

                            <div class="mb-3">
                                <label for="productArtisan" class="form-label">Artisan:</label>
                                <input type="text" class="form-control" id="productArtisan" name="productArtisan" required placeholder="enter product artisan">
                            </div>

                            <div class="mb-3">
                                <label for="artisanAddress" class="form-label">Location</label>
                                <input type="text" class="form-control" id="artisanAddress" name="artisanAddress" required placeholder="enter artisan adress">
                            </div>

                            <div class="mb-3">
                                <label for="productMaterials" class="form-label">Materials:</label>
                                <textarea class="form-control" id="productMaterials" name="productMaterials" rows="3" required placeholder="enter product materials"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required placeholder="enter product description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="productImage" name="productImage" accept=".png, .jpeg, .jpg">
                                <small class="text-muted">Only PNG, JPEG, and JPG formats are allowed.</small>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- EDIT PRODUCT MODAL -->
        <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="editaddProductForm" enctype="multipart/form-data">
                            <input type="hidden" id="editproductId" name="editproductId">

                            <div class="mb-3">
                              <label for="editProductCategory" class="form-label">Product Category</label>
                              <select class="form-select" id="editProductCategory" name="editProductCategory" required>
                                <option value="" disabled selected>Select Category</option>
                                <!-- Options will be populated dynamically -->
                              </select>
                            </div>

                            <div class="mb-3">
                                <label for="editProductSize" class="form-label">Product Size & Price</label>
                                <div class="row g-2 align-items-center">
                                    <!-- Product Size Dropdown -->
                                    <div class="col-md-5">
                                        <select class="form-select" id="editProductSize" name="editProductSize" required>
                                            <option value="" disabled selected>Select product size</option>
                                            <option value="sm">Small</option>
                                            <option value="md">Medium</option>
                                            <option value="lg">Large</option>
                                            <option value="xl">Extra Large</option>
                                        </select>
                                    </div>
                                    <!-- Price Input -->
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="editProductPrice" name="editProductPrice" placeholder="Price" min="0" step="0.01" required>
                                    </div>
                                    <!-- Quantity Input -->
                                    <div class="col-md-3">
                                        <input type="number" class="form-control" id="editProductQuantity" name="editProductQuantity" placeholder="Quantity" required>
                                      </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="editProductType" class="form-label">Product Type:</label>
                                <input type="text" class="form-control" id="editProductType" name="editProductType" required>
                            </div>

                            <div class="mb-3">
                                <label for="editProductArtisan" class="form-label">Artisan:</label>
                                <input type="text" class="form-control" id="editProductArtisan" name="editProductArtisan" required>
                            </div>

                            <div class="mb-3">
                                <label for="editProductAddress" class="form-label">Location</label>
                                <input type="text" class="form-control" id="editProductAddress" name="editProductAddress" required>
                            </div>

                            <div class="mb-3">
                                <label for="editProductMaterials" class="form-label">Materials:</label>
                                <textarea class="form-control" id="editProductMaterials" name="editProductMaterials" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="editProductDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="editProductDescription" name="editProductDescription" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="editProductImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="editProductImage" name="editProductImage" accept=".png, .jpeg, .jpg">
                                <small class="text-muted">Only PNG, JPEG, and JPG formats are allowed.</small>
                                <img id="editProductImagePreview" alt="Image Preview" style="display: none; width: 100px; height: auto; margin-top: 10px;">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- VIEW IMAGE MODAL -->
        <div class="modal fade" id="viewImageModal" tabindex="-1" aria-labelledby="viewImageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewImageModalLabel"></h5>
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
            loadCategories();
        });

        // Define loadCategories outside so it can be called anywhere
        function loadCategories() {
            fetch('mysql/fetch_product_categories.php')
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        const categories = result.categories;
                        const tbody = document.getElementById('categoryTable').querySelector('tbody');
                        const categorySelectElement = document.getElementById('productCategory');
                        const editcategorySelectElement = document.getElementById('editProductCategory');

                        // Clear existing rows before adding new ones
                        tbody.innerHTML = '';
                        categorySelectElement.innerHTML = '<option value="" disabled selected>Select Category</option>';
                        editcategorySelectElement.innerHTML = '<option value="" disabled selected>Select Category</option>';

                        categories.forEach(cat => {
                            const categoryId = cat.id; // Get the id from the category object
                            const categoryName = cat.name;

                            // Add category to "Add" and "Edit" dropdowns
                            const option = document.createElement('option');
                            option.value = categoryId; // Use ID as value
                            option.textContent = categoryName; // Display name

                            categorySelectElement.appendChild(option);
                            editcategorySelectElement.appendChild(option.cloneNode(true)); // Clone to avoid duplication in DOM

                            // Create a new row for the table
                            const newRow = document.createElement('tr');

                            // Category name cell
                            const nameCell = document.createElement('td');
                            nameCell.textContent = categoryName;

                            // Action cell
                            const actionCell = document.createElement('td');
                            const deleteBtn1 = document.createElement('button');
                            deleteBtn1.className = 'btn btn-sm btn-danger delete-btn1';
                            deleteBtn1.textContent = 'Delete';

                            // Set the data-id attribute using categoryId
                            deleteBtn1.setAttribute('data-id', categoryId);

                            // Append delete button
                            actionCell.appendChild(deleteBtn1);

                            // Append cells to row
                            newRow.appendChild(nameCell);
                            newRow.appendChild(actionCell);

                            // Append row to tbody
                            tbody.appendChild(newRow);
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: result.message,
                        });
                    }
                })
                .catch(error => {
                    console.error('Error fetching categories:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to load categories.',
                    });
                });
        }

        document.getElementById('categoryForm').addEventListener('submit', function(e) {
          e.preventDefault();
          const categoryNameInput = document.getElementById('categoryName');
          const categoryName = categoryNameInput.value.trim();

          const data = new FormData();
          data.append('categoryName', categoryName);

          // Send to PHP to add category
          fetch('mysql/add_product_category.php', {
            method: 'POST',
            body: data
          })
          .then(response => response.json())
          .then(result => {
            Swal.fire({
              icon: result.status === 'success' ? 'success' : 'error',
              title: result.status === 'success' ? 'Success' : 'Error',
              text: result.message,
              confirmButtonText: 'OK'
            });
            if (result.status === 'success') {
              // Reload categories after adding new one
              loadCategories();
              categoryNameInput.value = ''; // clear input
            }
          })
          .catch(error => {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
            });
            console.error('Error:', error);
          });
        });

        // Handle delete button clicks
        document.getElementById('categoryTable').addEventListener('click', function(e) {
          if (e.target.classList.contains('delete-btn1')) {
            const row = e.target.closest('tr');
            const categoryName = row.querySelector('td').textContent;
            const categoryId = e.target.getAttribute('data-id'); // We'll set this attribute below

            // Confirm deletion
            Swal.fire({
              title: 'Are you sure?',
              text: `Delete category "${categoryName}"?`,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'Cancel'
            }).then((result) => {
              if (result.isConfirmed) {
                // Send delete request
                fetch('mysql/delete_product_category.php', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                  },
                  body: `categoryId=${encodeURIComponent(categoryId)}`
                })
                .then(response => response.json())
                .then(result => {
                  if (result.status === 'success') {
                    Swal.fire('Deleted!', result.message, 'success');
                    loadCategories(); // Refresh the list
                  } else {
                    Swal.fire('Error', result.message, 'error');
                  }
                })
                .catch(error => {
                  Swal.fire('Error', 'Failed to delete category.', 'error');
                  console.error('Error:', error);
                });
              }
            });
          }
        });
    </script>

    <script>
          // Define loadCategories outside so it can be called anywhere
        function loadTypes() {
            fetch('mysql/fetch_product_type.php')
                .then((response) => response.json())
                .then((result) => {
                    if (result.status === 'success') {
                        const types = result.types;
                        const suggestionsContainer = document.getElementById('suggestionsContainer');
                        const productTypeInput = document.getElementById('productTypeInput');
                        const productTypeHidden = document.getElementById('productTypeHidden');
                        const typeTableBody = document.getElementById('typeTable').querySelector('tbody');

                        // Clear existing suggestions and table rows
                        suggestionsContainer.innerHTML = '';
                        typeTableBody.innerHTML = '';

                        // Populate suggestions and table
                        types.forEach((type) => {
                            const typeId = type.id;
                            const typeName = type.name;

                            // --- Populate Suggestions ---
                            const suggestionItem = document.createElement('div');
                            suggestionItem.className = 'dropdown-item';
                            suggestionItem.textContent = typeName;
                            suggestionItem.setAttribute('data-id', typeId);

                            // Add click event to suggestion item
                            suggestionItem.addEventListener('click', () => {
                                const selectedTypes = productTypeInput.value ? productTypeInput.value.split(', ') : [];
                                const selectedTypeIds = productTypeHidden.value ? productTypeHidden.value.split(',') : [];

                                if (!selectedTypeIds.includes(typeId.toString())) {
                                    selectedTypes.push(typeName); // Add name to the visible field
                                    selectedTypeIds.push(typeId); // Add ID to the hidden field
                                    productTypeInput.value = selectedTypes.join(', ');
                                    productTypeHidden.value = selectedTypeIds.join(','); // Update hidden input value
                                }

                                console.log(`Selected Type IDs: ${productTypeHidden.value}`); // Log the type IDs
                                suggestionsContainer.style.display = 'none';
                            });

                            suggestionsContainer.appendChild(suggestionItem);

                            // --- Populate Table ---
                            const newRow = document.createElement('tr');

                            // Type name cell
                            const nameCell = document.createElement('td');
                            nameCell.textContent = typeName;

                            // Action cell
                            const actionCell = document.createElement('td');
                            const deleteButton = document.createElement('button');
                            deleteButton.className = 'btn btn-sm btn-danger delete-btn';
                            deleteButton.textContent = 'Delete';
                            deleteButton.setAttribute('data-id', typeId);

                            // Add click event for delete button
                            deleteButton.addEventListener('click', () => {
                                // Capture typeId and typeName in the event scope to avoid conflicts
                                const capturedTypeId = typeId;
                                const capturedTypeName = typeName;

                                // console.log(capturedTypeId);

                                // Confirm deletion
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: `Delete type "${capturedTypeName}"?`,
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes, delete it!',
                                    cancelButtonText: 'Cancel'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Send delete request
                                        fetch('mysql/delete_product_type.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/x-www-form-urlencoded'
                                            },
                                            body: `typeId=${encodeURIComponent(capturedTypeId)}`
                                        })
                                            .then(response => response.json())
                                            .then(result => {
                                                if (result.status === 'success') {
                                                    Swal.fire('Deleted!', result.message, 'success');
                                                    loadTypes(); // Reload types after deletion
                                                } else {
                                                    Swal.fire('Error', result.message, 'error');
                                                }
                                            })
                                            .catch(error => {
                                                Swal.fire('Error', 'Failed to delete type.', 'error');
                                                console.error('Error:', error);
                                            });
                                    }
                                });
                            });

                            actionCell.appendChild(deleteButton);

                            // Append cells to row
                            newRow.appendChild(nameCell);
                            newRow.appendChild(actionCell);

                            // Append row to table body
                            typeTableBody.appendChild(newRow);
                        });

                        // Show suggestions when the input is focused
                        productTypeInput.addEventListener('focus', () => {
                            suggestionsContainer.style.display = 'block';
                        });

                        // Hide suggestions when clicking outside
                        document.addEventListener('click', (event) => {
                            if (!productTypeInput.contains(event.target) && !suggestionsContainer.contains(event.target)) {
                                suggestionsContainer.style.display = 'none';
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: result.message,
                        });
                    }
                })
                .catch((error) => {
                    console.error('Error fetching types:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to load types.',
                    });
                });
        }

        // Load types on page load
        document.addEventListener('DOMContentLoaded', () => {
            loadTypes();
        });

        // Function to fetch products and populate the table
        function fetchProducts() {
            fetch('mysql/get_products.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        const products = data.data; // Extract product data from the response
                        const productTableBody = document.getElementById('productTableBody');

                        // Clear existing table rows
                        productTableBody.innerHTML = '';

                        // Loop through products and add rows to the table
                        products.forEach(product => {
                            const row = document.createElement('tr');

                            // Create table cells with product details
                            row.innerHTML = `
                                  <td>${product.category_name}</td>
                                  <td>${product.type_names}</td>
                                  <td class="w-25">${product.description}</td>
                                  <td>${product.owner}</td>
                                  <td>${product.adress}</td>
                                  <td>${product.size}</td>
                                  <td>${product.qty}</td>
                                  <td>${product.price}</td>
                                  <td>${product.material}</td>
                                  <td>
                                      <img
                                          src="mysql/${product.image}"
                                          alt="${product.category_name}"
                                          style="width: 30px; height: auto; cursor: pointer;"
                                          onclick="viewImage('${product.image}', '${product.category_name}')"
                                      >
                                  </td>
                                  <td>
                                      <button class="btn btn-primary btn-sm" onclick="editProduct(
                                          ${product.id},
                                          '${product.category_id}',
                                          '${product.type_names}',
                                          '${product.description.replace(/'/g, "\\'")}',
                                          '${product.owner.replace(/'/g, "\\'")}',
                                          '${product.adress.replace(/'/g, "\\'")}',
                                          '${product.size}',
                                          '${product.price}',
                                          '${product.material.replace(/'/g, "\\'")}',
                                          '${product.image}',
                                          ${product.qty}
                                      )"><i class="fas fa-edit"></i></button>
                                      <button class="btn btn-sm btn-danger delete-btn" onclick="confirmDeleteProduct(${product.id});"><i class="fas fa-trash-alt"></i></button>
                                  </td>
                              `;

                            // Append the row to the table body
                            productTableBody.appendChild(row);
                        });
                    } else {
                        console.error('Error fetching products:', data.message);
                        alert('Failed to fetch products. Please try again later.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An unexpected error occurred while fetching products.');
                });
        }

        // 🟢 Confirm & Delete RAO Program
        function confirmDeleteProduct(programId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post("mysql/delete_product.php", { id: programId }, function (response) {
                        Swal.fire("Deleted!", response.message, "success");
                        fetchProducts();
                    }, "json");
                }
            });
        }

        function viewImage(imagePath, productName) {
            // Get references to the modal elements
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('viewImageModalLabel');

            // Set the modal image source and title
            modalImage.src = `mysql/${imagePath}`;
            modalImage.alt = productName;
            modalTitle.textContent = productName;

            // Show the modal
            const viewImageModal = new bootstrap.Modal(document.getElementById('viewImageModal'));
            viewImageModal.show();
        }

        // 🟢 Filter transactions based on the search input
        $('#searchProduct').on('keyup', function () {
            let searchValue = $(this).val().toLowerCase();
            $('#productTable tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });

        function editProduct(id, categoryName, typeNames, description, owner, address, size, price, material, image, qty) {
            // Populate the form fields
            document.getElementById('editproductId').value = id;
            document.getElementById('editProductCategory').value = categoryName;
            document.getElementById('editProductType').value = typeNames; // assuming comma-separated
            document.getElementById('editProductDescription').value = description;
            document.getElementById('editProductArtisan').value = owner;
            document.getElementById('editProductAddress').value = address;
            document.getElementById('editProductSize').value = size;
            document.getElementById('editProductPrice').value = price;
            document.getElementById('editProductMaterials').value = material;

            // Set the quantity
            document.getElementById('editProductQuantity').value = qty;

            // Handle image preview
            const imageElement = document.getElementById('editProductImagePreview');
            if (imageElement) {
                imageElement.src = `mysql/${image}`;
                imageElement.alt = description;
                imageElement.style.display = 'block';
            }

            // Show modal
            const editProductModal = new bootstrap.Modal(document.getElementById('editProductModal'));
            editProductModal.show();
        }

        // Call fetchProducts on page load
        document.addEventListener('DOMContentLoaded', fetchProducts, fetchProducts);

        // Load categories on page load
        window.addEventListener('DOMContentLoaded', loadTypes);

        document.getElementById('addProductForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Create a FormData object
            const formData = new FormData(event.target);

            // Send the form data to add_product.php using fetch
            fetch('mysql/add_product.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Hide the modal
                    const addProductModalElement = document.getElementById('addProductModal');
                    const addProductModal = bootstrap.Modal.getInstance(addProductModalElement); // Get the existing modal instance
                    if (addProductModal) {
                        addProductModal.hide(); // Hide the modal
                    }

                    // Reset the form after success
                    document.getElementById('addProductForm').reset();

                    // Show SweetAlert success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data.message,
                    }).then(() => {
                        // Call fetchProducts to refresh the table
                        fetchProducts();
                    });
                } else {
                    // Show SweetAlert error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show SweetAlert generic error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An unexpected error occurred. Please try again later.',
                });
            });
        });

        document.getElementById('editaddProductForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Create a FormData object
            const formData = new FormData(event.target);

            console.log('Form Data Entries:');
            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }

            // Send the form data to add_product.php using fetch
            fetch('mysql/update_product.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Hide the modal
                    const editProductModalElement = document.getElementById('editProductModal');
                    const editProductModal = bootstrap.Modal.getInstance(editProductModalElement); // Get the existing modal instance
                    if (editProductModal) {
                        editProductModal.hide(); // Hide the modal
                    }

                    // Reset the form after success
                    document.getElementById('editaddProductForm').reset();

                    // Show SweetAlert success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data.message,
                    }).then(() => {
                        // Call fetchProducts to refresh the table
                        fetchProducts();
                    });
                } else {
                    // Show SweetAlert error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show SweetAlert generic error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An unexpected error occurred. Please try again later.',
                });
            });
        });

        document.getElementById('typeForm').addEventListener('submit', function(e) {
          e.preventDefault();
          const typeNameInput = document.getElementById('typeName');
          const typeName = typeNameInput.value.trim();

          const data = new FormData();
          data.append('typeName', typeName);

          // Send to PHP to add category
          fetch('mysql/add_product_type.php', {
            method: 'POST',
            body: data
          })
          .then(response => response.json())
          .then(result => {
            console.log(result);
            Swal.fire({
              icon: result.status === 'success' ? 'success' : 'error',
              title: result.status === 'success' ? 'Success' : 'Error',
              text: result.message,
              confirmButtonText: 'OK'
            });
            if (result.status === 'success') {
              // Reload categories after adding new one
              loadTypes();
              typeNameInput.value = ''; // clear input
            }
          })
          .catch(error => {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
            });
            console.error('Error:', error);
          });
        });

        // Handle delete button clicks
        document.getElementById('typeTable').addEventListener('click', function(e) {
          if (e.target.classList.contains('delete-btn2')) {
            const row = e.target.closest('tr');
            const categoryName = row.querySelector('td').textContent;
            const categoryId = e.target.getAttribute('data-id'); // We'll set this attribute below

            // Confirm deletion
            Swal.fire({
              title: 'Are you sure?',
              text: `Delete category "${categoryName}"?`,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'Cancel'
            }).then((result) => {
              if (result.isConfirmed) {
                // Send delete request
                fetch('mysql/delete_product_type.php', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                  },
                  body: `categoryId=${encodeURIComponent(categoryId)}`
                })
                .then(response => response.json())
                .then(result => {
                  if (result.status === 'success') {
                    Swal.fire('Deleted!', result.message, 'success');
                    loadTypes(); // Refresh the list
                  } else {
                    Swal.fire('Error', result.message, 'error');
                  }
                })
                .catch(error => {
                  Swal.fire('Error', 'Failed to delete category.', 'error');
                  console.error('Error:', error);
                });
              }
            });
          }
        });
    </script>
  </body>
</html>