<?php
include "../db/db.php";
session_start();


if (isset($_POST["login-form"])) {
    // Import user data from submitted form
    $input_login        = mysqli_real_escape_string($connection, $_POST["usernameOrEmail"]);
    $input_password     = mysqli_real_escape_string($connection, $_POST["password"]);

    // Check if user exists
    $query = "SELECT * FROM supnub_users WHERE (username = '$input_login' OR email = '$input_login')";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
      echo "No user found!";
        // die(header("Location: " . "/login"));
    }

    // Check if input_password matches database_password
        // Hash the input_password
    $hashedFormat = "$2y$10$";
    $salt = "iliketohashmypasswords";
    $hashF_and_salt = $hashedFormat . $salt;
    $input_password = crypt($input_password, $hashF_and_salt);
    $database_password = $data["password"];
    // Remove the password from $data array
    unset($data["password"]);
        // Check if the passwords match
    if (!($input_password === $database_password)) {
      echo "Incorrect username or password";
        // die(header("Location: " . "/login"));
    } else {
        $_SESSION["user"] = $data;
        die(header("Location: /"));
    }
}
