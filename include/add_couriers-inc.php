<?php
require 'header.php';
require '../admin/admin_header.php';

if (isset($_POST['submit'])){
  require 'database.php';

  $trackId = rand(1000,1000000);
  $sname = $_POST['Sname'];
  $smobile = $_POST['Smobile'];
  $semail = $_POST['Semail'];
  $saddress = $_POST['Saddress'];
  $rname = $_POST['Rname'];
  $rmobile = $_POST['Rmobile'];
  $remail = $_POST['Remail'];
  $raddress = $_POST['Raddress'];
  $cost = $_POST['cost'];
  $desc = $_POST['description'];


  $sql = "CALL insertDatai(?,?,?,?,?,?,?,?,?,?,?)";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../admin/add_couriers.php?error=sqlerror");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt, "ssssssssdsi",$sname,$smobile, $semail,$saddress,$rname,$rmobile, $remail,$raddress,$cost,$desc,$trackId);
    mysqli_stmt_execute($stmt);
    ?>

    <section style="height: 100vh; background-image: url('../images/c24.jpg'); background-size: cover;">
    <h1 style="margin-top:0; padding: 100px 0 0 50px; font-size:40px; font-family: Montserrat;">Courier Information Is placed Courier Id is <?php echo $trackId ?></h1>
    </section>

    <?php
    exit();
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>
