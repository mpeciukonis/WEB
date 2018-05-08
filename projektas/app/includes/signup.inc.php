<?php
  if (isset($_POST['submit'])) {
    include_once 'db.inc.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $info = mysqli_real_escape_string($conn, $_POST['info']);

    if (empty($first) || empty($last) || empty($email) || empty($pwd)) {
      header("Location: ../../public/index.php?signup=empty");
      exit();
    } else {
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $info)){
        header("Location: ../../public/index.php?signup=invalid");
        exit();
      } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../../public/index.php?signup=invalidemail");
          exit();
        } else {
          $sql = "SELECT * FROM users WHERE user_email = '$email'";
          $result = mysqli_query($conn, $sql);
          $result_check = mysqli_num_rows($result);
          if ($result_check > 0) {
            header("Location: ../../public/index.php?signup=usertaken");
            exit();
          } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd, user_info) VALUES('$first', '$last', '$email', '$hashedPwd', '$info');";
            mysqli_query($conn, $sql);
            header("Location: ../../public/index.php?signup=success");
            exit();
          }
        }
      }
    }
  }

  else {
    header("Location: ../../public/index.php");
    exit();
  }
 ?>
