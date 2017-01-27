<?php
  $path = getcwd();
  $path .= "/partials/html-header.php";
  include_once($path);

  if (isset($_SESSION["user"])) {
    die(header("Location: /"));
  }
?>
    <title>SipNub | Join</title>
</head>
<body>

<!-- Logged out navbar -->
<?php
  $path = getcwd();
  $path .= "/partials/loggedOutNavbar.php";
  include_once($path);
?>

</body>
<?php
  $path = getcwd();
  $path .= "/partials/html-footer.php";
  include_once($path);
?>
