<?php
require 'admin_header.php';?>

<?php
session_start();
if (!isset($_SESSION['sessionId'])) {
  header("Location: ../login.php?error=please login");
  exit();
}
 ?>


<section class="i">


<div class="wrap">
  <h2>Courier Details</h2>
  <form class="couriers" action="../include/add_couriers-inc.php" method="post">

    <input type="text"  name="Sname" placeholder="Sender Name"  autocomplete="off" required />
    <input type="text"  name="Smobile" placeholder="Sender Mobile Number" pattern="[0-9]{10}"  autocomplete="off" required />
    <input type="email"  name="Semail" placeholder="Sender Email"  autocomplete="off" required />
    <textarea class="add" name="Saddress" type="text" placeholder="Sender Address"  autocomplete="off" required></textarea>

    <input type="text" name="Rname" placeholder="Receiver Name" autocomplete="off" required/>
    <input type="text"  name="Rmobile" placeholder="Receiver Mobile" pattern="[0-9]{10}" autocomplete="off" required/>
    <input type="email" name="Remail" placeholder="Receiver Email" autocomplete="off" required/>


    <textarea class="add" name="Raddress" type="text" placeholder="Receiver Address" autocomplete="off" required></textarea>
    <input type="text"  name="cost" placeholder="Cost" autocomplete="off" required/>
    <textarea class="add" name="description" type="text" placeholder="Description" autocomplete="off" required></textarea>

    <input type="submit" name="submit" value="SUBMIT" class="btn">
    <input type="reset"  value="RESET" class="btn">
  </form>
</div>
</section>

<?php include_once 'footer.php' ?>
