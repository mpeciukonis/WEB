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

    <div class="container-fluid">
      <?php
        include_once 'header.php';
       ?>
       <div class="search-filter">
          <input class="form-control" id="search_input" type="text" placeholder="Search..">
          <br>
          <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nuotrauka</th>
              <th>Aprašymas</th>
              <th>Kūrėjas</th>
            </tr>
          </thead>
          <tbody id="search_table">
            <tr>
              <td>
                <div class="search_image">
                  <a href="google.lt">Jogh</a>
                </div>
              </td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@mail.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@greatstuff.com</td>
            </tr>
            <tr>
              <td>Anja</td>
              <td>Ravendale</td>
              <td>a_r@test.com</td>
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
