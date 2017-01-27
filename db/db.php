<?php

echo __DIR__;

if (__DIR__ == "/Applications/XAMPP/xamppfiles/htdocs/github-replica/db") {
  $connection = mysqli_connect('localhost', 'root', '', 'sipnub');
// } elseif (__DIR__) {
//
// }
$connection = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b961973f7f08c0', '61801897', 'heroku_2de62fcae6ffdbe');


if (!$connection) {
  die("Database connection error");
}

?>
