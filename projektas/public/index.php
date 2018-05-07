<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/css/master.css">
    <title>Jaunų Meistrų Aukcionas</title>
  </head>
  <body>

    <div class="container-fluid">
      <?php
        include_once '../app/views/modal_registracija.php';
        include_once '../app/views/modal_prisijungimas.php';
        include_once '../app/views/header.php';
        include_once '../app/views/carousel.php';
        include_once '../app/views/article.php';
        include_once '../app/views/works_gallery.php';
        include_once '../app/views/footer.php';

        if (isset($_SESSION['u_id'])) {
          echo "<p>Prisijungete sekmingai!</p>";
        }
      ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $("#registruotis").click(function(){
            $("#modal_registracija").modal();
        });
        $("#prisijungti").click(function(){
            $("#modal_prisijungimas").modal();
        });
    });
    </script>
  </body>
</html>
