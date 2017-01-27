<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
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
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/partials/loggedOutNavbar.php";
  include_once($path);
?>

</body>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/partials/html-footer.php";
  include_once($path);
?>
