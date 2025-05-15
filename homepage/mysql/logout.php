<?php
// Start session if needed (not necessary here unless you use sessions)
session_start();

// Delete the 'DWHMA' cookie by setting it with an expiration in the past
setcookie('DWHMA0', '', time() - 3600, "/");

// Redirect to index.php after logout
header("Location: ../../index.php");
exit();
?>