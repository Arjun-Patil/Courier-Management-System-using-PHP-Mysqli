<?php
session_start();

if (isset($_SESSION['sessionId'])) {
  session_destroy();
  header("Location: ../index.php");
} ?>
