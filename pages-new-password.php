<?php
// require_once 'main/template/mysql/check_cookies.php';
require 'main/template/mysql/conn.php'; // Ensure this sets $conn as a PDO instance

$email = $_GET['email'] ?? '';

// Check if the email is provided
if (empty($email)) {
    header("Location: pages-reset-password.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get new password from form
    $newPassword = $_POST['newpassword'] ?? '';
    $confirmPassword = $_POST['confirmpassword'] ?? '';

    // Validate the passwords
    if (empty($newPassword) || empty($confirmPassword)) {
        // Handle empty password fields
        $error = 'Both password fields are required.';
    } elseif ($newPassword !== $confirmPassword) {
        // Handle password mismatch
        $error = 'Passwords do not match.';
    } elseif (strlen($newPassword) < 8) {
        // Handle password length validation
        $error = 'Password must be at least 8 characters long.';
    } else {
        // No validation errors, proceed with password update

        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Prepare SQL statement to update the password
        $sql = "UPDATE users SET password = ? WHERE gmail = ?";
        try {
            $stmt = $pdo->prepare($sql);
            // Execute with bound parameters
            if ($stmt->execute([$hashedPassword, $email])) {
                // Password updated successfully
                header("Location: login-page.php");
                exit;
            } else {
                $error = 'Failed to update the password. Please try again.';
            }
        } catch (PDOException $e) {
            $error = 'Error: ' . $e->getMessage();
        }
    }
}

// Close database connection
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DWHMA Online Store - New Password</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <meta name="theme-color" content="#4CAF50" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="main/assets/css/style.css" rel="stylesheet">
</head>
<style>
    body {
        background: url('assets/img/baskets.png') no-repeat center center;
        background-size: cover;
        height: 100vh;
        }
  </style>
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Enter New Password</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-md-12">
                        <p id="error-message" style="color: red; font-weight: bold; text-align: center; font-size: 14px;"></p> <!-- Error message container -->
                        <div class="form-floating">
                            <input type="password" name="newpassword" class="form-control" id="newpassword" required placeholder="New Password">
                            <label for="newpassword">New Password</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required placeholder="Confirm Password">
                            <label for="confirmpassword">Confirm Password</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-success w-100" type="submit">Save Password</button>
                    </div>
                </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const newPasswordInput = document.getElementById('newpassword');
      const confirmPasswordInput = document.getElementById('confirmpassword');
      const errorMessage = document.getElementById('error-message');

      function validatePasswords() {
          const newPassword = newPasswordInput.value;
          const confirmPassword = confirmPasswordInput.value;

          if (confirmPassword === '') {
              confirmPasswordInput.style.borderColor = 'red'; // Set border color to red if confirm password is empty
              confirmPasswordInput.setCustomValidity('Please confirm your password.');
          } else if (newPassword !== confirmPassword) {
              confirmPasswordInput.style.borderColor = 'red'; // Set border color to red if passwords don't match
              confirmPasswordInput.setCustomValidity('Passwords do not match!');
          } else {
              confirmPasswordInput.style.borderColor = ''; // Reset border color if passwords match
              confirmPasswordInput.setCustomValidity('');
          }

          displayErrorMessage();
      }

      function validateNewPassword() {
          const newPassword = newPasswordInput.value;

          if (newPassword.length < 8) {
              newPasswordInput.style.borderColor = 'red'; // Set border color to red if password is too short
              newPasswordInput.setCustomValidity('Password must be at least 8 characters long.');
          } else {
              newPasswordInput.style.borderColor = ''; // Reset border color if password length is valid
              newPasswordInput.setCustomValidity('');
          }

          displayErrorMessage();
      }

      function displayErrorMessage() {
          const newPasswordValidity = newPasswordInput.validationMessage;
          const confirmPasswordValidity = confirmPasswordInput.validationMessage;
          errorMessage.textContent = newPasswordValidity || confirmPasswordValidity || '';
      }

      newPasswordInput.addEventListener('input', function() {
          validatePasswords();
          validateNewPassword();
      });
      confirmPasswordInput.addEventListener('input', validatePasswords);

      // Optional: Additional validation on form submission
      document.querySelector('form').addEventListener('submit', function (event) {
          validatePasswords();
          validateNewPassword(); // Validate password length before submitting
          if (newPasswordInput.checkValidity() === false || confirmPasswordInput.checkValidity() === false) {
              event.preventDefault(); // Prevent form submission if any validation fails
          }
      });
    });
  </script>

</body>

</html>
