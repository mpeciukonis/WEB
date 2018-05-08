<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/master.css">
    <title>Jaunų Meistrų Aukcionas</title>
  </head>
  <body>
    <?php
      if (!isset($_SESSION['u_id'])) {
        echo 'Atsiprašome, bet turite prisijungti <a href="http://localhost/projektas/public/index.php">tituliniame</a> puslapyje.';
        exit();
      }
     ?>
    <div class="container-fluid">
      <?php
        include_once 'header.php';
      ?>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="profile_picture">
            <img src="../images/profile_unknown.jpg" alt="Unknown profile picture" />
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
          <div class="profile_info">
            <aside>
              <h3><?php echo $_SESSION['u_first'].' '.$_SESSION['u_last'] ?></h3>
              <strong>Email:</strong>
              <address><?php echo $_SESSION['u_email'] ?></address>
              <strong>Trumpai apie mane:</strong>
              <p><?php echo $_SESSION['u_info'] ?></p>
            </aside>
          </div>
        </div>
      </div>

      <div class="table_works">
        <h3>Darbų sąrašas</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pavadinimas</th>
              <th scope="col">Aprašymas</th>
              <th scope="col">Pradinė kaina</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Medinis stalas</td>
              <td>Medinis stalas iš panaudotų palečių - išardytos paletės, suklijuotas stalas, nušlifuotas, atnaujintas.</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Laikrodis</td>
              <td>Sieninis laikrodis iš panaudotų produktų, suklijuotų plastmasių ir tt.</td>
              <td>20</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
