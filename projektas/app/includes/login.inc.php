<?php
  session_start();
  if (isset($_POST['submit'])) {
    include_once 'db.inc.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email) || empty($pwd)) {
      header("Location: ../../public/index.php?login=empty");
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE user_email = '$email'";
      $result = mysqli_query($conn, $sql);
      $result_check = mysqli_num_rows($result);
      if ($result_check < 1) {
        header("Location: ../../public/index.php?login=error");
        exit();
      } else {
        if ($row = mysqli_fetch_assoc($result)) {
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if ($hashedPwdCheck == false) {
            header("Location: ../../public/index.php?login=error");
            exit();
          } elseif ($hashedPwdCheck == true) {
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['user_first'];
            $_SESSION['u_last'] = $row['user_last'];
            $_SESSION['u_email'] = $row['user_email'];
            header("Location: ../../public/index.php?login=success");
            exit();
          }
        }
      }
    }
  } else {
    header("Location: ../../public/index.php?login=error");
    exit();
  }
 ?>
