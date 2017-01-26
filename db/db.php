<?php

// $connection = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b961973f7f08c0', '61801897', 'heroku_2de62fcae6ffdbe');
$connection = mysqli_connect('localhost', 'root', '', 'sipnub');
<<<<<<< HEAD

$query = "DROP TABLE sipnub-users";
mysqli_query($connection, $query);
=======
>>>>>>> f47da081a5dd6a5da14ad258af183bf70aaf9fcf

if (!$connection) {
  die("Database connection error");
}

?>
