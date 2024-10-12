<?php
session_start();

$error = ""; // Initialize an empty error message

// Hardcoded username and password array
$valid_credentials = [
    '11101' => ['password' => '123', 'redirect' => 'student/student1.html'],
    '11102' => ['password' => '123', 'redirect' => 'student/student2.html'],
    '11103' => ['password' => '123', 'redirect' => 'student/student3.html'],
    '11104' => ['password' => '123', 'redirect' => 'student/student4.html'],
    '11105' => ['password' => '123', 'redirect' => 'student/student5.html'],
    '11106' => ['password' => '123', 'redirect' => 'student/student6.html'],
    '11107' => ['password' => '123', 'redirect' => 'student/student7.html'],
    '11108' => ['password' => '123', 'redirect' => 'student/student8.html'],
    '11109' => ['password' => '123', 'redirect' => 'student/student9.html'],
    '11110' => ['password' => '123', 'redirect' => 'student/student10.html'],
    '11111' => ['password' => '123', 'redirect' => 'student/student11.html'],
    '11112' => ['password' => '123', 'redirect' => 'student/student12.html'],
    '11113' => ['password' => '123', 'redirect' => 'student/student13.html'],
    '11114' => ['password' => '123', 'redirect' => 'student/student14.html'],
    '11115' => ['password' => '123', 'redirect' => 'student/student15.html'],
    '11116' => ['password' => '123', 'redirect' => 'student/student16.html'],
    '11117' => ['password' => '123', 'redirect' => 'student/student17.html'],
    '11118' => ['password' => '123', 'redirect' => 'student/student18.html'],
    '11119' => ['password' => '123', 'redirect' => 'student/student19.html'],
    '11120' => ['password' => '123', 'redirect' => 'student/student20.html'],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists and if the password matches
    if (array_key_exists($username, $valid_credentials) && $valid_credentials[$username]['password'] === $password) {
        $_SESSION['username'] = $username; // Store username in session
        
        // Redirect to the corresponding page based on the username
        header('Location: ' . $valid_credentials[$username]['redirect']);
        exit();
    } else {
        // Login failed, set error message
        $_SESSION['error'] = '學號或密碼錯誤!'; // Error message in Chinese
        header('Location: login.php');  // Redirect back to login page
        exit();
    }
}