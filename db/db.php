<?php

// If app is on production server, use cleardb database
if (__DIR__ == "/app/db") {
  $connection = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b961973f7f08c0', '61801897', 'heroku_2de62fcae6ffdbe');
} else {
  // If server is localhost, use localhost database
  $connection = mysqli_connect('localhost', 'root', '', 'sipnub');
}

// Check if connection is working
if (!$connection) {
  die("Database connection error");
}

?>
