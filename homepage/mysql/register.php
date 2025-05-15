<?php
session_start();
include './../../main/template/mysql/conn.php';

// Retrieve and sanitize form inputs
$firstName = htmlspecialchars($_POST['first_name'] ?? '');
$middleName = htmlspecialchars($_POST['middle_name'] ?? '');
$lastName = htmlspecialchars($_POST['last_name'] ?? '');
$address = htmlspecialchars($_POST['address'] ?? '');
$gender = htmlspecialchars($_POST['gender'] ?? '');
$contactNumber = htmlspecialchars($_POST['contact_number'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');
$confirmPassword = htmlspecialchars($_POST['confirmpassword'] ?? '');
$otp = htmlspecialchars($_POST['otp'] ?? '');
$dob = htmlspecialchars($_POST['dob'] ?? '');
$username = htmlspecialchars($_POST['username'] ?? '');

// Validate required fields
$errors = [];
if (empty($firstName)) $errors[] = "First Name is required.";
if (empty($lastName)) $errors[] = "Last Name is required.";
if (empty($address)) $errors[] = "Address is required.";
if (empty($gender)) $errors[] = "Gender is required.";
if (empty($contactNumber) || strlen($contactNumber) !== 11) $errors[] = "Contact Number must be exactly 11 digits.";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "A valid Email is required.";
if (empty($password)) $errors[] = "Password is required.";
if ($password !== $confirmPassword) $errors[] = "Passwords do not match.";
if (empty($dob)) $errors[] = "Date of Birth is required.";
if (empty($username)) $errors[] = "Username is required.";

// Handle errors
if (!empty($errors)) {
    echo "Errors:<br>";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>";
    }
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL query
$sql = "INSERT INTO users (first_name, middle_name, last_name, address, gender, cont, gmail, password, activate_code, status, role, image_path, dob, username)
        VALUES (:first_name, :middle_name, :last_name, :address, :gender, :cont, :gmail, :password, :activate_code, :status, :role, :image_path, :dob, :username)";

// Set default values for role and profile
$role = 'user'; // or whatever default role you want
$profile = '../../main/template/uploads/profile/user.jpg'; // or default profile image
$status = '0'; // assuming '1' means active

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':first_name' => $firstName,
        ':middle_name' => $middleName,
        ':last_name' => $lastName,
        ':address' => $address,
        ':gender' => $gender,
        ':cont' => $contactNumber,
        ':gmail' => $email,
        ':password' => $hashedPassword,
        ':activate_code' => $otp,
        ':status' => $status,
        ':role' => $role,
        ':image_path' => $profile,
        ':dob' => $dob,
        ':username' => $username
    ]);

    // Store data in session
    $_SESSION['user_email'] = $email;
    $_SESSION['first_name'] = $firstName;
    $_SESSION['middle_name'] = $middleName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['user_otp'] = $otp;

    // Redirect to confirmation page
    echo '<script>
            window.location.href = "../../pages-confirm-otp.php";
          </script>';
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>