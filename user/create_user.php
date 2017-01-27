<?php
include "../db/db.php";
session_start();

// Set link to signup page for failed validation

if (isset($_POST["home-signup"])) {
    // Import user data from submitted form
    $username   = mysqli_real_escape_string($connection, $_POST["username"]);
    $email      = mysqli_real_escape_string($connection, $_POST["email"]);
    $password   = mysqli_real_escape_string($connection, $_POST["password"]);

    // User data validation

        // Username
    if (empty($username)) {
        die(header("Location: /join"));
    }
        // Email
    if (empty($email)) {
        die(header("Location: /join"));
    }

    // Check if data already exists
        // Username
    $checkUsername = "SELECT username FROM sipnub_users WHERE username = '$username'";
    $checkUsernameResult = mysqli_query($connection, $checkUsername);

    if (mysqli_fetch_row($checkUsernameResult)) {
        die(header("Location: /join"));
    }
        // Email
    $checkEmail = "SELECT email FROM sipnub_users WHERE email = '$email'";
    $checkEmailResult = mysqli_query($connection, $checkEmail);
    if (mysqli_fetch_row($checkEmailResult)) {
        die(header("Location: /join"));
    }

    // Hash user's password
    $hashedFormat = "$2y$10$";
    $salt = "iliketohashmypasswords";
    $hashF_and_salt = $hashedFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    // Set queries for database insertion
    $query = "INSERT INTO sipnub_users(username, email, password)";
    $query .= "VALUES ('$username', '$email', '$password')";

    // Query database and set result variable
    $result = mysqli_query($connection, $query);

    // Check for error
    if (!$result) {
        die("Error occurred. Please try again");
    }

    // Get new user and save to SESSION
    $query = "SELECT * FROM sipnub_users WHERE (username = '$username')";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);

    // Remove the password from $data array
    unset($data["password"]);

    // Set user's SESSION and redirect
    $_SESSION["user"] = $data;
    die(header("Location: /"));
}
