<?php include 'include/header.php';
require 'header1.php'; ?>
<section class="t">

<h1 class="h1t">Track Courier</h1>
<form  class="fo"action="track_courier.php" method="post">
  <input type="text" name="trackingID" placeholder="Enter Tracking Id" autocomplete="off" required> <br><br>
  <input type="submit" name="submit" value="submit" >
</form>

<?php
if (isset($_POST['submit'])) {
  $track = $_POST['trackingID'];
?>


<table id="table">

  <?php
    $sql = "SELECT trackingId,date,status from tracking where trackingId=$track";
    $query = mysqli_query($conn,$sql);
    $nums = mysqli_num_rows($query);
    if ($nums == 0) {
  ?>
  <h1 class="h1i">Invalid Tracking Id !!</h1>

  <?php
}else{ ?>
  <h1 class="h">COURIER DETAILS</h1>

  <tr>
    <th>&nbsp Tracking Id &nbsp</th>
    <th>&nbsp Date &nbsp</th>
    <th>&nbsp Status &nbsp</th>
  </tr>





<?php

  while ($res = mysqli_fetch_array($query)) {
?>

<tr>
  <td><?php echo $res['trackingId']; ?></td>
  <td><?php echo $res['date']; ?></td>
  <td><?php echo $res['status']; ?></td>
</tr>
<?php
}
}}
 ?>
</table>
</section>

<?php include_once 'include/footer.php' ?>
