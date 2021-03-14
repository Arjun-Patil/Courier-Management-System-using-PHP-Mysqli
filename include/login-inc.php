<?php
  if (isset($_POST['submit'])) {

    require 'database.php';

    $username =$_POST['username'];
    $password =$_POST['password'];

    if (empty($username) || empty($password)) {
      header("Location: ../login.php?error=emptyfields");
      exit();
    }else {
      $sql = "SELECT * FROM admin WHERE username = ?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
      }else{
        mysqli_stmt_bind_param($stmt,'s',$username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
          $passCheck = password_verify($password,$row['password']);
          if ($passCheck == false) {
            header("Location: ../login.php?error=passworddonotmatch");
            exit();
          }elseif ($passCheck == true) {
            session_start();
            $_SESSION['sessionId'] = $row['id'];
            header("Location: ../admin/admin_home.php?success=loggedin");
            exit();
          }else{
            header("Location: ../index.php?error=wrongpassword");
            exit();
          }
        }else{
          header("Location: ../index.php?error=nouser");
          exit();
        }

      }

    }

  }else {
    header("Location: ../index.php?error=accessforbidden");
    exit();
  }
 ?>
