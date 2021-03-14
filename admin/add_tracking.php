<?php include_once 'header.php';
require 'admin_header.php'; ?>

<?php
session_start();
if (!isset($_SESSION['sessionId'])) {
  header("Location: ../login.php?error=please login");
  exit();
}
 ?>

<section class="tracking">
<div class="track-box">

<form class="track" action="../include/add_tracking-inc.php" method="post">

    <input type="text"  name="trno" class="input-field" placeholder="Enter Tracking id" autocomplete="off" required><br><br>

    <input type="date"  name="date"  class="input-field" autocomplete="off" required ><br><br>
    <input type="text"  name="status"  class="input-field" placeholder="Status" autocomplete="off" required><br><br>
    <input type="submit" class="btn" name="submit" value="submit">&nbsp&nbsp
    <button type="reset" class="btn" name="button">Reset</button>
</form>
</div>
</section>
<?php include_once 'footer.php' ?>
