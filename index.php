<?php
  $path = getcwd();
  $path .= "/functions/functions.php";
  include_once($path);
?>

<!-- Import html-header -->
<?php
  $path = getcwd();
  $path .= "/partials/html-header.php";
  include_once($path);
?>
    <title>SipNub</title>
</head>
<body>

<!-- Determine which navbar to show -->
<?php
if (!isset($_SESSION["user"])) {
  $path = getcwd();
  $path .= "/partials/loggedOutNavbar.php";
  include_once($path);
} else {
    $path = getcwd();
    $path .= "/partials/loggedInNavbar.php";
    include_once($path);
}
?>

<!-- Home page content -->
<?php
if (!isset($_SESSION["user"])) {
  $path = getcwd();
  $path .= "/partials/home-page-logged-out.php";
  include_once($path);
} else {

}
?>

</body>
<!-- HTML footer -->
<?php
  $path = getcwd();
  $path .= "/partials/html-footer.php";
  include_once($path);
?>
