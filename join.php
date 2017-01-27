<?php include "/partials/html-header.php" ?>
<?php
if (isset($_SESSION["user"])) {
  die(header("Location: /"));
}
?>
    <title>SipNub | Join</title>
</head>
<body>

<!-- Logged out navbar -->
<?php include "partials/loggedOutNavbar.php" ?>

</body>
<?php include "partials/html-footer.php" ?>
