<?php
include "../db/db.php";
session_start();

// Set link to signup page for failed validation
$linkToSignUpPage = "http://localhost/github-replica/join";

if (isset($_POST["home-signup"])) {
    // Import user data from submitted form
    $username   = mysqli_real_escape_string($connection, $_POST["username"]);
    $email      = mysqli_real_escape_string($connection, $_POST["email"]);
    $password   = mysqli_real_escape_string($connection, $_POST["password"]);

    // User data validation

        // Username
    if (empty($username)) {
        die(header("Location: " . $linkToSignUpPage));
    }
        // Email
    if (empty($email)) {
        die(header("Location: " . $linkToSignUpPage));
    }

    // Check if data already exists
        // Username
    $checkUsername = "SELECT username FROM sipnub-users WHERE username = '$username'";
    $checkUsernameResult = mysqli_query($connection, $checkUsername);
    if (mysqli_fetch_row($checkUsernameResult)) {
        die(header("Location: " . $linkToSignUpPage));
    }
        // Email
    $checkEmail = "SELECT email FROM sipnub-users WHERE email = '$email'";
    $checkEmailResult = mysqli_query($connection, $checkEmail);
    if (mysqli_fetch_row($checkEmailResult)) {
        die(header("Location: " . $linkToSignUpPage));
    }

    // Hash user's password
    $hashedFormat = "$2y$10$";
    $salt = "iliketohashmypasswords";
    $hashF_and_salt = $hashedFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    // Set queries for database insertion
    $query = "INSERT INTO sipnub-users(username, email, password)";
    $query .= "VALUES ('$username', '$email', '$password')";

    // Query database and set result variable
    $result = mysqli_query($connection, $query);

    // Check for error
    if (!$result) {
        die("Error occurred. Please try again");
    } else {

        die(header("Location: " . "/github-replica"));
    }
}