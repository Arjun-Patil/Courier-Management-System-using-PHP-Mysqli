<?php
      include '../include/database.php';

      $id=$_GET['track'];

      $query= "DELETE FROM details where trackingId='$id'";

      $data=mysqli_query($conn,$query);

      if($data)
      {
        $query1= "DELETE FROM receiverInfo where trackingId='$id'";

        $dat=mysqli_query($conn,$query1);
        if($dat)
        {
          $query2= "DELETE FROM senderInfo where trackingId='$id'";

          $dat=mysqli_query($conn,$query2);
            header("Location: courier_report.php?Deleted");
        }
      }
?>
