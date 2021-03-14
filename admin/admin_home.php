<?php include_once 'include/header.php';
      require 'admin_header.php';?>
<?php
session_start();
if (!isset($_SESSION['sessionId'])) {
  header("Location: ../login.php?error=please login");
  exit();
}
 ?>
<section class="index">

</section>

<?php include_once 'include/footer.php' ?>
