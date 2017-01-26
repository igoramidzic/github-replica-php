<?php

$connection = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b961973f7f08c0', '61801897', 'heroku_2de62fcae6ffdbe');
// $connection = mysqli_connect('localhost', 'root', '', 'sipnub');

if (!$connection) {
  die("Database connection error");
}

?>
