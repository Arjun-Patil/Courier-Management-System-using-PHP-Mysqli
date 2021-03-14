<?php

if (isset($_POST['submit'])){
  require 'database.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];



  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    header("Location: ../contact_us.php?error=emptyfields");
    exit();

  }else{
    $sql = "INSERT INTO contact_us (name,email,subject,message) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../contact_us.php?error=sqlerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
      mysqli_stmt_execute($stmt);
      header("Location: ../index.php?success=submitted");
      exit();
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

 ?>
