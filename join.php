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

<!-- Signup page content -->
<?php
  $path = getcwd();
  $path .= "/partials/signup-page-form.php";
  include_once($path);
?>

</body>
<?php
  $path = getcwd();
  $path .= "/partials/html-footer.php";
  include_once($path);
?>
