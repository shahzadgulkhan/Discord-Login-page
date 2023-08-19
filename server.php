<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if email and password are valid
  if ($email == 'user@example.com' && $password == 'password123') {
    // Login successful, redirect to dashboard
    $_SESSION['user'] = $email;
    header('Location: dashboard.php');
    exit;
  } else {
    // Login failed, show error message
    $error = 'Invalid email or password';
  }