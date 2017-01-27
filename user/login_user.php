<?php
include "../db/db.php";
session_start();


if (isset($_POST["login-form"])) {
  // Import user data from submitted form
  $input_login        = mysqli_real_escape_string($connection, $_POST["usernameOrEmail"]);
  $input_password     = mysqli_real_escape_string($connection, $_POST["password"]);

  $query2 = "SELECT * FROM sipnub_users";
  $result2 = mysqli_query($connection, $query2);
  echo "Hello <br>";
  print_r($result2);
  echo "Hello <br>";
  $data2 = mysqli_fetch_assoc($result2);
  print_r($data2);

  // Check if user exists
  $query = "SELECT * FROM sipnub_users WHERE (username = '$input_login' OR email = '$input_login')";
  $result = mysqli_query($connection, $query);
  $data = mysqli_fetch_assoc($result);
  if (!$data) {
    die(header("Location: " . "/login"));
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
    die(header("Location: " . "/login"));
  } else {
    $_SESSION["user"] = $data;
    die(header("Location: /"));
  }
}
