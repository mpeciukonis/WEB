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
       <div class="search-filter">
          <input class="form-control" id="search_input" type="text" placeholder="Įveskite paieškos kriterijus."><br/>
          <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nuotrauka</th>
              <th>Aprašymas</th>
              <th>Kūrėjas</th>
              <th>Pradinė kaina</th>
            </tr>
          </thead>
          <tbody id="search_table">
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work1.jpg" alt="">
                </div>
              </td>
              <td>Testuoju1_a</td>
              <td>atestuoju@testa.com</td>
              <td>20</td>
            </tr>
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work2.jpg" alt="">
                </div>
              </td>
              <td>Testuoju2_b</td>
              <td>btestuoju@testa.com</td>
              <td>50</td>
            </tr>
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work3.jpg" alt="">
                </div>
              </td>
              <td>Testuoju3_c</td>
              <td>ctestuoju@testa.com</td>
              <td>40</td>
            </tr>
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work4.jpg" alt="">
                </div>
              </td>
              <td>Testuoju4_d</td>
              <td>dtestuoju@testa.com</td>
              <td>100</td>
            </tr>
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work5.jpg" alt="">
                </div>
                <td>Testuoju5_e</td>
                <td>etestuoju@testa.com</td>
              <td>40</td>
            </tr>
            <tr>
              <td>
                <div class="search_image">
                  <img src="../images/work6.jpeg" alt="">
                </div>
              </td>
              <td>Testuoju6_f</td>
              <td>ftestuoju@testa.com</td>
              <td>80</td>
            </tr>
          </tbody>
          </table>
       </div>
    </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){
      $("#search_input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#search_table tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
 </body>
</html>
