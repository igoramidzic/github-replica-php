<?php
session_start();

if (isset($_POST["logout-button"])) {
    session_destroy();
    die(header('location: /github-replica'));
}