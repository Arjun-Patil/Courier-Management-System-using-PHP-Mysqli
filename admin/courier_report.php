<?php include '../include/header.php';
      include '../include/database.php';
      require 'admin_header.php';
?>

<?php
session_start();
if (!isset($_SESSION['sessionId'])) {
  header("Location: ../login.php?error=please login");
  exit();
}
 ?>




<section class="r">


<table id="table">
  <tr id="header" ?>>
    <th>&nbsp Tracking Number &nbsp</th>
    <th>&nbsp Receiver Name &nbsp</th>
    <th>&nbsp Sender Name &nbsp</th>
    <th>&nbsp Sender Mobile &nbsp</th>
    <th>&nbsp Receiver Mobile &nbsp</th>
    <th>&nbsp Operation &nbsp</th>
  </tr>
  <?php
  $sql = "select s.trackingId, r.rname, s.sname, s.smobile, r.rmobile from senderInfo s, receiverInfo r where s.trackingId=r.trackingId";
  $query = mysqli_query($conn,$sql);
  $nums = mysqli_num_rows($query);
  while ($res = mysqli_fetch_array($query)) {

  ?>
  <tr>
    <td><?php echo $res['trackingId']; ?></td>
    <td><?php echo $res['rname']; ?></td>
    <td><?php echo $res['sname']; ?></td>
    <td><?php echo $res['smobile']; ?></td>
    <td><?php echo $res['rmobile']; ?></td>
    <td><a onclick='return confirm("Are you sure you want to delete this record")' href="delete.php?track=<?php echo $res['trackingId']; ?>" >Delete</a> </td>
  </tr>
  </section>

  <?php
}
   ?>


</table>

<script>
  function check()
  {
    return confirm('');
  }
</script>
<?php include_once '../include/footer.php' ?>
