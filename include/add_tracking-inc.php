<?php
require 'header.php';
require '../admin/admin_header.php';
if (isset($_POST['submit'])){
  require 'database.php';
  $trackingId= $_POST['trno'];
  $date = $_POST['date'];
  $status = $_POST['status'];

  if (empty($trackingId) || empty($date) || empty($status)) {
    header("Location: ../admin/add_tracking.php?error=emptyfields");
    exit();

  }else{
    $sql = "SELECT trackingId FROM senderInfo where trackingId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../admin/add_tracking.php?error=sqlerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "i", $trackingId);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $rowCount = mysqli_stmt_num_rows($stmt);

      if ($rowCount == 0) {
        header("Location: ../admin/add_tracking.php?error=invalidtrackingnumber");
        exit();
      }else{
        $sql = "INSERT INTO tracking (trackingId, date, status) VALUES (?,?,?) ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../admin/add_courier.php?error=sqlerror");
          exit();
        }else{
          mysqli_stmt_bind_param($stmt, "iss", $trackingId, $date,$status);
          mysqli_stmt_execute($stmt);
          ?>
<h1 style="padding:10px 0 0 20px; font-family:Montserrat,cursive; font-size: 60px;">Tracking Details added successfully !!</h1>
<?php
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);


}
?>
