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
    <title>Bulatok - Transaction</title>
    <!-- Favicon icon-->
    <link rel="icon" href="./../../assets/img/brgylogo.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="./../../assets/img/brgylogo.png" type="image/x-icon"/>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
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
              <div class="row">
                <div class="col-sm-12 col-12">
                  <h2>Transaction Management</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                </div>
              </div>
              <div class="row mt-3">
                  <!-- Button on the Left -->
                  <div class="col">
                      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#addTransactionModal">Add Transaction</button>
                  </div>
                  
                  <!-- Buttons on the Right -->
                  <div class="col text-end">
                      <button id="export-transaction" class="btn btn-primary">Export SOIC</button>
                      <button id="export-transmital" class="btn btn-primary">Transmittal letter</button>
                      <button id="export-imcd" class="btn btn-primary">IMCD</button>
                  </div>
              </div>
            </div>
          </div>

          <!-- Disbursement Modal -->
          <div class="modal fade" id="transmitalModal" tabindex="-1" aria-labelledby="transmitalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="transmitalModalLabel">Disbursement Voucher</h5>
                </div>
                <div class="modal-body">
                  <!-- Container for RCD rows -->
                  <div id="rcd-container">
                    <!-- First RCD input row -->
                    <div class="row rcd-row mb-3">
                      <div class="col">
                        <div class="form-group">
                          <label for="rcd">RCD</label>
                          <input type="text" class="form-control" name="rcd" placeholder="00-00-000">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="rcd-date">Date</label>
                          <input type="date" class="form-control" name="rcd-date">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="rcd-amount">Amount</label>
                          <input type="number" class="form-control" name="rcd-amount" placeholder="Enter Amount">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Container for Additional Reports -->
                  <div id="other-report-container" class="mb-3"></div>

                  <!-- Buttons -->
                  <div class="d-flex justify-content-start mb-3">
                    <button type="button" class="btn btn-secondary me-2" id="add-rcd-btn">Add Another RCD</button>
                    <button type="button" class="btn btn-secondary" id="add-other-report-btn">Add Other Report</button>
                  </div>
                </div>
                <!-- inside your transmitalModal -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="submit-transmital">Generate Transmittal Letter</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Insert Transaction Modal -->
           <div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="addTransactionModal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> <!-- Added modal-lg for larger width -->
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Add Transaction</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="" id="financialForm">
                              <div class="row">
                                  <!-- Date -->
                                  <div class="col-md-6">
                                      <label class="form-label">Date:</label>
                                      <input type="date" class="form-control" id="date" required>
                                  </div>
                                  <!-- PBC No. -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">PBC No.:</label>
                                        <input type="text" class="form-control" placeholder="enter PBC number" id="pbcNo" required>
                                    </div>
                              </div>

                              <div class="row mt-2">
                                <!-- Payee -->
                                  <div class="col-md-6">
                                      <label class="form-label">Payee:</label>
                                      <input type="text" class="form-control" placeholder="enter payee name" id="payee" required>
                                  </div>
                                  <!-- Payee -->
                                  <div class="col-md-6">
                                      <label class="form-label">Account No:</label>
                                      <input type="text" class="form-control" placeholder="enter account number" id="accountNumber" required>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                <!-- Cheque No -->
                                  <div class="col-md-6">
                                      <label class="form-label">Cheque No.:</label>
                                      <input type="text" class="form-control" placeholder="enter cheque number" id="chequeNumber" required>
                                  </div>
                                  <!-- Disbursement Voucher No. -->
                                  <div class="col-md-6">
                                      <label class="form-label">Disbursement Voucher No.:</label>
                                      <input type="text" class="form-control" placeholder="enter voucher number" id="voucherNo" required>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                <!-- Particulars -->
                                  <div class="col-md-6">
                                      <label class="form-label">Particulars:</label>
                                      <input type="text" class="form-control" placeholder="enter particulars" id="particulars" required>
                                  </div>
                                <!-- Fund -->
                                  <div class="col-md-6">
                                      <label class="form-label">Fund:</label>
                                      <select class="form-control" id="fund" required>
                                          <option value="" disabled selected>Select a Program</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <!-- Gross Amount -->
                                  <div class="col-md-6 col-sm-12">
                                      <label class="form-label">Gross Amount:</label>
                                      <input type="text" class="form-control" placeholder="select program" id="grossAmount" readonly="">
                                  </div>
                                  <!-- Cash Advance -->
                                  <div class="col-md-3 col-sm-3">
                                      <label for="cash-advance" class="form-label">Cash Advance:</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="cash-advance" onclick="toggleVatEvatFields()">
                                          <label class="form-check-label" for="cashAdvanceCheckbox">Yes</label>
                                      </div>
                                  </div>
                                  <!-- Vatable -->
                                  <div class="col-md-3 col-sm-3">
                                      <label for="vatable" class="form-label">Vatable:</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="vatable" onclick="toggleVatEvatFields()">
                                          <label class="form-check-label" for="vatableCheckbox">Yes</label>
                                      </div>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <!-- VAT -->
                                  <div class="col-md-6 col-sm-6">
                                      <label for="vat">VAT:</label>
                                      <select class="form-control" id="vat" disabled>
                                          <option value="1">1%</option>
                                          <option value="3">3%</option>
                                          <option value="5">5%</option>
                                      </select>
                                  </div>
                                  <!-- VEVAT -->
                                  <div class="col-md-6 col-sm-6">
                                      <label for="evat">EVAT:</label>
                                      <select class="form-control" id="evat" disabled>
                                          <option value="1">1%</option>
                                          <option value="2">2%</option>
                                      </select>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary mt-2 d-flex float-end">
                                  Add Transaction
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Insert Transaction Modal -->

          <!-- Edit Transaction Modal -->
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> <!-- Added modal-lg for larger width -->
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Edit Transaction</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="" id="editTransactionForm">
                              <input type="hidden" id="edit_id" name="id">

                              <div class="row">
                                  <div class="col-md-6">
                                      <label for="edit_date" class="form-label">Date:</label>
                                      <input type="date" class="form-control" id="edit_date" name="date" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">PBC No.:</label>
                                      <input type="text" class="form-control" placeholder="Enter PBC number" id="edit_pbc" name="pbc" required>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <div class="col-md-6">
                                      <label class="form-label">Cheque No.:</label>
                                      <input type="text" class="form-control" placeholder="Enter cheque number" id="edit_cheque" name="cheque" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Account No:</label>
                                      <input type="text" class="form-control" placeholder="Enter account number" id="edit_accountNumber" name="accountNumber" required>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <div class="col-md-6">
                                      <label class="form-label">Disbursement Voucher No.:</label>
                                      <input type="text" class="form-control" placeholder="Enter voucher number" id="edit_voucher" name="voucher" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Fund:</label>
                                      <select class="form-control" id="edit_fund" name="fund" required>
                                          <option value="" disabled selected>Select a Program</option>
                                          <!-- Options will be dynamically populated with JavaScript -->
                                      </select>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <div class="col-md-6">
                                      <label class="form-label">Payee:</label>
                                      <input type="text" class="form-control" placeholder="Enter payee name" id="edit_payee" name="payee" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Particulars:</label>
                                      <input type="text" class="form-control" placeholder="Enter particulars" id="edit_particulars" name="particulars" required>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <!-- Edit Transaction Modal Gross Amount Field -->
                                  <div class="col-md-6">
                                      <label class="form-label">Gross Amount:</label>
                                      <input type="text" class="form-control" placeholder="Enter gross amount" id="edit_gross" name="gross" readonly>
                                  </div>
                                  <div class="col-md-2">
                                      <label for="edit_vatable" class="form-label">Vatable:</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="edit_vatable" name="vatable">
                                          <label class="form-check-label" for="edit_vatable">Yes</label>
                                      </div>
                                  </div>

                                  <div class="col-md-2">
                                      <label for="edit_vat">VAT:</label>
                                      <select class="form-control" id="edit_vat" name="vat" disabled>
                                          <option value="1">1%</option>
                                          <option value="2">2%</option>
                                          <option value="5">52%</option>
                                      </select>
                                  </div>

                                  <div class="col-md-2">
                                      <label for="edit_evat">EVAT:</label>
                                      <select class="form-control" id="edit_evat" name="evat" disabled>
                                          <option value="1">1%</option>
                                          <option value="2">2%</option>
                                      </select>
                                  </div>
                              </div>

                              <button type="submit" class="btn btn-success mt-2 d-flex float-end">
                                  Update Transaction
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Edit Transaction Modal -->

          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-xxl-12 col-xl-12 proorder-xxl-5 col-md-12 box-col-12">
                <div class="card height-equal">
                  <div class="card-header card-no-border pb-0">
                    <!-- Title row - always visible -->
                    <div class="row mb-3">
                      <div class="col-12">
                        <h3>Transaction History</h3>
                      </div>
                    </div>
                    
                    <!-- Filter and search row - stacks on mobile -->
                    <div class="row">
                      <!-- Date filters - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6 mb-3">
                        <div class="row">
                          <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" id="startDate" class="form-control w-100" placeholder="From Start Date">
                          </div>
                          <div class="col-12 col-sm-6">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" id="endDate" class="form-control w-100" placeholder="To End Date">
                          </div>
                        </div>
                      </div>
                      
                      <!-- Search box - full width on mobile, half width on larger screens -->
                      <div class="col-12 col-md-6 mb-3">
                        <label for="searchTransactions" class="form-label">Search Transactions</label>
                        <input type="text" id="searchTransactions" class="form-control w-100" placeholder="Search transactions...">
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 manage-invoice filled-checkbox">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="transaction-history" style="width:100%">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check checkbox checkbox-solid-primary">
                                <input class="form-check-input" id="solid" type="checkbox"/>
                                <label class="form-check-label" for="solid"> </label>
                              </div>
                            </th>
                            <!-- <th>ID</th> -->
                            <th>Date</th>
                            <th>PBC No.</th>
                            <th>Cheque No.</th>
                            <th>Voucher No.</th>
                            <th>Account No.</th>
                            <th>Fund</th>
                            <th>Payee</th>
                            <th>Particulars</th>
                            <th>Gross Amount</th>
                            <th>Vatable</th>
                            <th>Vat</th>
                            <th>eVat</th>
                            <th>Vat Amount</th>
                            <th>eVat Amount</th>
                            <th>Net Amount</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-12 col-xl-12 col-md-12 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>SOIC Export History</h3>
                    </div>
                    <div class="card-body pt-0 manage-invoice">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="file-history" style="width:100%">
                        <thead>
                          <tr>
                            <th>Filename</th>
                            <th>Date Generated</th>
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

              <div class="col-xxl-12 col-xl-12 col-md-12 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Transmital Export History</h3>
                    </div>
                    <div class="card-body pt-0 manage-invoice">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="transmital-history" style="width:100%">
                        <thead>
                          <tr>
                            <th>Filename</th>
                            <th>Date Generated</th>
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
          </div>

        </div>
        <!-- Page header start-->
        <?php include 'structure/footer.php'; ?>
        <!-- Page header end-->
      </div>
    </div>
    <!-- Sweetalert js-->
    <script src="../assets/js/sweetalert/sweetalert2.min.js"></script>
    <script src="../assets/js/sweetalert/sweetalert-custom.js"></script>
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
    <!-- tilt-->
    <script src="../assets/js/animation/tilt/tilt.jquery.js"></script>
    <!-- page_tilt-->
    <script src="../assets/js/animation/tilt/tilt-custom.js"></script>
    <!-- dashboard_1-->
    <script src="../assets/js/dashboard/dashboard_1.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>

    <script>
      // Handle RAO Program form submission
      document.getElementById('raoProgramForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const year = document.getElementById('raoYear').value;
        const programName = document.getElementById('raoProgramName').value;
        const amount = document.getElementById('raoAmount').value;
        console.log('RAO Program Submitted:', { year, programName, amount });
        // Add your form submission logic here
      });

      // Handle Sub Program form submission
      document.getElementById('subProgramForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const programName = document.getElementById('subProgramName').value;
        const amount = document.getElementById('subAmount').value;
        console.log('Sub Program Submitted:', { programName, amount });
        // Add your form submission logic here
      });
    </script>

    <script type="text/javascript">
      function toggleVatEvatFields() {

          let vatSelect = document.getElementById("vat");
          let evatSelect = document.getElementById("evat");
          let vatableCheckbox = document.getElementById("vatable");

          vatSelect.disabled = !vatableCheckbox.checked;
          evatSelect.disabled = !vatableCheckbox.checked;
      }
    </script>

    <!-- JavaScript to handle adding new RCD rows -->
    <script>
      document.getElementById('add-rcd-btn').addEventListener('click', function() {
        // Get the container
        const container = document.getElementById('rcd-container');

        // Clone the first RCD row
        const firstRow = container.querySelector('.rcd-row');
        const newRow = firstRow.cloneNode(true);

        // Optionally, clear input values in the cloned row
        newRow.querySelectorAll('input').forEach(input => input.value = '');

        // Append the new row
        container.appendChild(newRow);
      });
    </script>

    <script>
    $(document).ready(function () {
        // Initial fetch on page load
        fetchTransactions();
        fetchGeneratedReport();
        fetchGeneratedTransmital();
        setCurrentDate();
        fetchPrograms();
        fetchProgramsForEdit();

        // Fetch programs for the edit form and populate the select input
        function fetchProgramsForEdit() {
            $.ajax({
                url: 'mysql/fetch_programs.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    let fundSelect = $('#edit_fund');
                    fundSelect.empty().append('<option value="" disabled selected>Select a Program</option>');

                    // Store the data in session storage
                    // sessionStorage.setItem('programs', JSON.stringify(data));

                    // Populate the dropdown with fetched program names and amounts
                    data.forEach(sub_program => {
                        fundSelect.append(`<option value="${sub_program.id}" data-amount="${sub_program.amount}">${sub_program.name} - ₱${parseFloat(sub_program.amount).toLocaleString()}</option>`);
                    });
                },
                error: function () {
                    console.error("Error fetching programs.");
                }
            });
        }

        function setCurrentDate() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById("date").value = today;
        }

        // 🟢 Handle clicking the edit button
        $(document).on('click', '.edit-btn', function () {
            $('#edit_id').val($(this).data('id'));
            $('#edit_date').val($(this).data('date'));
            $('#edit_cheque').val($(this).data('cheque'));
            $('#edit_voucher').val($(this).data('voucher'));
            $('#edit_fund').val($(this).data('fund'));
            $('#edit_payee').val($(this).data('payee'));
            $('#edit_particulars').val($(this).data('particulars'));
            $('#edit_pbc').val($(this).data('pbc'));
            $('#edit_accountNumber').val($(this).data('account'));

            let vatableValue = $(this).data('vatable');
            let vatValue = $(this).data('vat') || '3';
            let evatValue = $(this).data('evat') || '1';

            $('#edit_vatable').prop('checked', vatableValue == 1);

            if (vatableValue == 1) {
                $('#edit_vat, #edit_evat').prop('disabled', false);
                $('#edit_vat').val(vatValue);
                $('#edit_evat').val(evatValue);
            } else {
                $('#edit_vat, #edit_evat').prop('disabled', true).val('');
            }

            // Set the selected fund value
            let fundValue = $(this).data('fund');
            $('#edit_fund').val(fundValue);

            // Fetch the amount based on the selected program ID
            let selectedOption = $('#edit_fund').find('option:selected');
            let amount = selectedOption.data('amount');
            $('#edit_gross').val(amount ? parseFloat(amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : '');

            var editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        });

        // 🟢 Handle checkbox change for enabling/disabling VAT and EVAT
        $('#edit_vatable').change(function () {
            $('#edit_vat, #edit_evat').prop('disabled', !this.checked);
            if (this.checked) {
                if (!$('#edit_vat').val()) $('#edit_vat').val('3');
                if (!$('#edit_evat').val()) $('#edit_evat').val('1');
            } else {
                $('#edit_vat, #edit_evat').val('');
            }
        });

        // 🟢 Handle form submission for editing transactions
        $('#editTransactionForm').submit(function (event) {
            event.preventDefault();

            if ($('#edit_vatable').is(':checked')) {
                $('#edit_vat, #edit_evat').prop('disabled', false);
            }

            let formData = $(this).serializeArray();
            formData.push({ name: "vatable", value: $('#edit_vatable').is(':checked') ? 1 : 0 });

            // console.log(formData);

            $.ajax({
                url: "mysql/update_transaction.php",
                type: "POST",
                data: formData,
                success: function (response) {
                    if (response.status === "success") {
                        $('#editModal').modal('hide');
                        Swal.fire({ title: "Success!", text: response.message, icon: "success", timer: 2000, showConfirmButton: true });
                        setTimeout(fetchTransactions, 500);
                    } else {
                        Swal.fire({ title: "Error!", text: response.message, icon: "error" });
                    }
                },
                error: function () {
                    Swal.fire({ title: "Error!", text: "An error occurred.", icon: "error" });
                }
            });
        });

        // 🟢 Handle form submission for adding transactions
        $("#financialForm").on("submit", function (event) {
            event.preventDefault();

            let formData = {};
            let elements = this.elements;

            for (let element of elements) {
                if (element.id && element.type !== "submit") {
                    formData[element.id] = element.type === "checkbox" ? (element.checked ? 1 : 0) : element.value;
                }
            }

            // Ensure gross amount is correctly parsed as a number
            // formData['grossAmount'] = parseFloat(formData['grossAmount'].replace(/,/g, ''));
            console.log(formData);

            $.ajax({
                url: "mysql/add_transaction.php",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("#addTransactionModal").modal("hide");
                        Swal.fire({ title: "Success!", text: response.message, icon: "success", confirmButtonText: "OK" })
                            .then(() => {
                                $("#financialForm")[0].reset();
                                toggleVatEvatFields();
                                fetchTransactions();
                                setCurrentDate();
                            });
                    } else {
                        Swal.fire({ title: "Error!", text: response.message, icon: "error" });
                    }
                },
                error: function () {
                    Swal.fire({ title: "Error!", text: "An error occurred.", icon: "error" });
                }
            });
        });

        function fetchPrograms() {
            $.ajax({
                url: 'mysql/fetch_programs.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    let fundSelect = $('#fund');
                    fundSelect.empty().append('<option value="" disabled selected>Select a Program</option>');

                    // Populate the dropdown with fetched program names and amounts
                    data.forEach(rao_program => {
                        fundSelect.append(`<option value="${rao_program.id}" data-amount="${rao_program.amount}">${rao_program.name} - ₱${parseFloat(rao_program.amount).toLocaleString()}</option>`);
                    });
                },
                error: function () {
                    console.error("Error fetching programs.");
                }
            });
        }

        // Populate Gross Amount input when a fund is selected (Add Transaction)
        $('#fund').change(function () {
            let selectedOption = $(this).find('option:selected');
            let amount = selectedOption.data('amount');
            $('#grossAmount').val(amount ? parseFloat(amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : '');
        });

        // Populate Gross Amount input when a fund is selected (Edit Transaction)
        $('#edit_fund').change(function () {
            let selectedOption = $(this).find('option:selected');
            let amount = selectedOption.data('amount');
            $('#edit_gross').val(amount ? parseFloat(amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : '');
        });

        // 🟢 Toggle VAT & EVAT fields when vatable checkbox is clicked
        function toggleVatEvatFields() {
            let vatSelect = document.getElementById("vat");
            let evatSelect = document.getElementById("evat");
            let vatableCheckbox = document.getElementById("vatable");

            vatSelect.disabled = !vatableCheckbox.checked;
            evatSelect.disabled = !vatableCheckbox.checked;
        }

        // 🟢 Filter transactions based on the search input
        $('#searchTransactions').on('keyup', function () {
            let searchValue = $(this).val().toLowerCase();
            $('#transaction-history tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });

        // Select/Deselect all checkboxes
        $("#solid").on("change", function () {
            let isChecked = $(this).prop("checked");
            $("#transaction-history tbody tr:visible input[type='checkbox']").prop("checked", isChecked);
        });

        // Ensure if any checkbox is unchecked, the header checkbox gets unchecked too
        $(document).on("change", "#transaction-history tbody tr:visible input[type='checkbox']", function () {
            if (!$(this).prop("checked")) {
                $("#solid").prop("checked", false);
            } else if ($("#transaction-history tbody tr:visible input[type='checkbox']:checked").length === $("#transaction-history tbody tr:visible input[type='checkbox']").length) {
                $("#solid").prop("checked", true);
            }
        });

        // Log all selected row IDs when "Export Transaction" button is clicked
        $("#export-transaction").on("click", function () {
            let selectedIds = [];

            $("#transaction-history tbody tr:visible input[type='checkbox']:checked").each(function () {
                let row = $(this).closest("tr"); // Get the parent row
                let transactionId = row.find(".edit-btn").data("id"); // Get the correct ID from the edit button

                if (transactionId) {
                    selectedIds.push(transactionId); // Collect the correct transaction ID
                }
            });

            // console.log("Selected Transaction IDs:", selectedIds);

            if (selectedIds.length > 0) {
                // Convert array to a comma-separated string
                let params = new URLSearchParams({ ids: selectedIds.join(',') });

                // Open export_transaction.php in a new tab with the selected IDs
                window.open("mysql/export_transaction.php?" + params.toString(), "_blank");
            } else {
                Swal.fire({
                    title: "No Transactions Selected",
                    text: "Please select at least one transaction to export.",
                    icon: "warning"
                });
            }
        });

        // Handle Export Transmittal button click
        $(document).on('click', '#submit-transmital', function() {
          let selectedIds = [];

          // Gather the IDs of all checked transactions
          $("#transaction-history tbody input[type='checkbox']:checked").each(function () {
            let row = $(this).closest("tr");
            let transactionId = row.find(".edit-btn").data("id");
            if (transactionId) {
              selectedIds.push(transactionId);
            }
          });

          if (selectedIds.length > 0) {
            // Collect RCD data
            const rcdEntries = [];
            $('#rcd-container .rcd-row').each(function() {
              const rcd = $(this).find('input[name="rcd"]').val();
              const rcdDate = $(this).find('input[name="rcd-date"]').val();
              const rcdAmount = $(this).find('input[name="rcd-amount"]').val();

              rcdEntries.push({
                rcd: rcd,
                date: rcdDate,
                amount: rcdAmount
              });
            });

            // Collect Additional Reports data
            const reportEntries = [];
            $('#other-report-container .row').each(function() {
              const reportType = $(this).find('input[name="report_type[]"]').val();
              const periodCovered = $(this).find('input[name="period_covered[]"]').val();

              reportEntries.push({
                report_type: reportType,
                period_covered: periodCovered
              });
            });

            // Serialize and encode report entries
            const reportDataEncoded = encodeURIComponent(JSON.stringify(reportEntries));
            const rcdDataEncoded = encodeURIComponent(JSON.stringify(rcdEntries));

            // Prepare URL parameters
            const params = new URLSearchParams({
              ids: selectedIds.join(','),
              rcdData: rcdDataEncoded,
              reportData: reportDataEncoded
            });

            // Open the export URL with all data
            window.open("mysql/export_transmital.php?" + params.toString(), "_blank");
          } else {
            Swal.fire({
              title: "No Transactions Selected",
              text: "Please select at least one transaction to export.",
              icon: "warning"
            });
          }

          // Close modal
          var modalEl = document.getElementById('transmitalModal');
          var modal = bootstrap.Modal.getInstance(modalEl);
          if (modal) {
            modal.hide();
          }
        });
    });

    // 🟢 Fetch transactions from the server
    function fetchTransactions() {
        $.ajax({
            url: 'mysql/fetch_transaction.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let tbody = $("#transaction-history tbody");
                tbody.empty();

                if (data.length > 0) {
                    data.forEach(transaction => {
                        let row = `
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>${new Date(transaction.date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: '2-digit' })}</td>
                                <td>${transaction.pbc_no || 'N/A'}</td>
                                <td>${transaction.cheque_no || 'N/A'}</td>
                                <td>${transaction.dv_no || 'N/A'}</td>
                                <td>${transaction.account_no || 'N/A'}</td>
                                <td>${transaction.name || 'N/A'}</td>
                                <td>${transaction.payee || 'N/A'}</td>
                                <td>${transaction.particulars || 'N/A'}</td>
                                <td>₱${transaction.gross_amount ? parseFloat(transaction.gross_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
                                <td>${transaction.vatable == 1 ? 'Yes' : 'No'}</td>
                                <td>${transaction.vat || 'N/A'}</td>
                                <td>${transaction.evat || 'N/A'}</td>
                                <td>₱${transaction.vat_amount ? parseFloat(transaction.vat_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
                                <td>₱${transaction.evat_amount ? parseFloat(transaction.evat_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
                                <td>₱${transaction.net_amount ? parseFloat(transaction.net_amount).toLocaleString('en-PH', { minimumFractionDigits: 2 }) : 'N/A'}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary edit-btn" data-id="${transaction.transaction_id}" data-pbc="${transaction.pbc_no}" data-account="${transaction.account_no}" data-date="${transaction.date}" data-cheque="${transaction.cheque_no}" data-voucher="${transaction.dv_no}" data-fund="${transaction.fund}" data-payee="${transaction.payee}" data-particulars="${transaction.particulars}" data-vatable="${transaction.vatable}" data-gross="${transaction.gross_amount}" data-vat="${transaction.vat}" data-evat="${transaction.evat}"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger delete-btn" onclick="confirmDelete(${transaction.transaction_id});"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        `;
                        tbody.append(row);
                    });
                } else {
                    tbody.append(`<tr><td colspan="14" class="text-center">No transactions found.</td></tr>`);
                }
            }
        });
    }

    // 🟢 Fetch generated reports from the server
    function fetchGeneratedReport() {
        $.ajax({
            url: 'mysql/fetch_generated_report.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let tbody = $("#file-history tbody");
                tbody.empty();

                if (data.length > 0) {
                    data.forEach(reports => {
                        let row = `
                            <tr>
                                <td>
                                    ${reports.filename ? `<a href="mysql/${reports.filename}" target="_blank">${reports.filename.split('/').pop()}</a>` : 'N/A'}
                                </td>
                                <td>
                                    ${reports.created_at ? new Date(reports.created_at).toLocaleString('en-US', {
                                        year: 'numeric',
                                        month: 'long',
                                        day: '2-digit',
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        hour12: true
                                    }) : 'N/A'}
                                </td>
                            </tr>
                        `;
                        tbody.append(row);
                    });
                } else {
                    tbody.append(`<tr><td colspan="14" class="text-center">No Generated File found.</td></tr>`);
                }
            }
        });
    }

  // 🟢 Fetch generated transmital reports from the server
    function fetchGeneratedTransmital() {
        $.ajax({
            url: 'mysql/fetch_generated_transmital.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let tbody = $("#transmital-history tbody");
                tbody.empty();

                if (data.length > 0) {
                    data.forEach(reports => {
                        let row = `
                            <tr>
                                <td>
                                    ${reports.filename ? `<a href="mysql/uploads/transmital/${reports.filename}" target="_blank">${reports.filename.split('/').pop()}</a>` : 'N/A'}
                                </td>
                                <td>
                                    ${
                                      reports.export_date
                                        ? new Date(reports.export_date).toLocaleString('en-US', {
                                            year: 'numeric',
                                            month: 'long',
                                            day: '2-digit',
                                            hour: '2-digit',
                                            minute: '2-digit',
                                            hour12: true
                                          })
                                        : 'N/A'
                                    }
                                  </td>
                            </tr>
                        `;
                        tbody.append(row);
                    });
                } else {
                    tbody.append(`<tr><td colspan="14" class="text-center">No Generated File found.</td></tr>`);
                }
            }
        });
    }

    // 🟢 Confirm & Delete Transaction
    function confirmDelete(transactionId) {
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
                $.post("mysql/delete_transaction.php", { id: transactionId }, function (response) {
                    Swal.fire("Deleted!", response.message, "success");
                    fetchTransactions();
                }, "json");
            }
        });
    }
    </script>
  <script>
    $(document).ready(function () {
      // Handle date filtering
      $('#startDate, #endDate').on('change', function () {
          filterTransactionsByDate();
      });

      function filterTransactionsByDate() {
          const startDate = $('#startDate').val();
          const endDate = $('#endDate').val();

          $('#transaction-history tbody tr').each(function () {
              const transactionDate = new Date($(this).children('td:nth-child(3)').text()); // Assuming date is in the 3rd column
              const isAfterStartDate = startDate ? transactionDate >= new Date(startDate) : true;
              const isBeforeEndDate = endDate ? transactionDate <= new Date(endDate) : true;

              // Show or hide rows based on date criteria
              $(this).toggle(isAfterStartDate && isBeforeEndDate);
          });
      }
  });
  </script>
  <script>
    // Attach event listener to the "Transmittal letter" button
    $('#export-transmital').on('click', function(event) {
        const selectedCheckboxes = $('#transaction-history tbody input[type="checkbox"]:checked');

        if (selectedCheckboxes.length === 0) {
            // No rows selected, show alert
            Swal.fire({
                title: "No Transaction Selected",
                text: "Please select at least one transaction before generating the transmittal letter.",
                icon: "warning"
            });
            // Do not open modal
        } else {
            // Rows are selected - open modal programmatically
            var modalEl = document.getElementById('transmitalModal');
            var modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    });
  </script>
  <script>
    // When "Add Other Report" is clicked
    $('#add-other-report-btn').on('click', function() {
      const container = $('#other-report-container');

      // Create a new row with two inputs
      const newRow = `
        <div class="row mb-3 align-items-end">
          <!-- Type of Report -->
          <div class="col-md-6">
            <label class="form-label">Type of Report</label>
            <input type="text" class="form-control" name="report_type[]" placeholder="Enter type of report">
          </div>
          <!-- Period Covered (Month & Year) -->
          <div class="col-md-6">
            <label class="form-label">Period Covered</label>
            <input type="month" class="form-control" name="period_covered[]" placeholder="Month and Year">
          </div>
        </div>
      `;
      container.append(newRow);
    });
  </script>
  <script>
    // Handle Export IMCD button click
    $(document).ready(function() {
        $('#export-imcd').on('click', function() {
            // Get all checked checkboxes in the transaction history table
            let selectedCheckboxes = $('#transaction-history tbody input[type="checkbox"]:checked');
            
            // Check if any rows are selected
            if (selectedCheckboxes.length === 0) {
                // No rows selected, show alert
                Swal.fire({
                    title: "No Transactions Selected",
                    text: "Please select at least one transaction to export IMCD.",
                    icon: "warning"
                });
            } else {
                // Collect the transaction IDs from all selected rows
                let selectedIds = [];
                
                selectedCheckboxes.each(function() {
                    let row = $(this).closest("tr"); // Get the parent row
                    let transactionId = row.find(".edit-btn").data("id"); // Get ID from the edit button
                    
                    if (transactionId) {
                        selectedIds.push(transactionId);
                    }
                });
                
                // Log the selected IDs to console for debugging
                console.log("Selected Transaction IDs for IMCD:", selectedIds);
                
                if (selectedIds.length > 0) {
                    // Convert array to a comma-separated string to pass as URL parameter
                    let params = new URLSearchParams({ ids: selectedIds.join(',') });
                    
                    // Show brief processing message
                    window.open("mysql/export_imcd.php?" + params.toString(), "_blank");
                } else {
                    Swal.fire({
                        title: "Error",
                        text: "Could not retrieve any transaction IDs.",
                        icon: "error"
                    });
                }
            }
        });
    });
  </script>
  </body>
</html>