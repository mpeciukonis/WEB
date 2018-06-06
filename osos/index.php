<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
      <p>Select file: <input type="file" name="file" id="file" /></p></br>
      <p>Submit <input type="submit" name="submit" /></p>
    </form>

    <?php
    include_once 'clases.php';
    include_once 'reading_file.php';
     ?>
  </body>
</html>
