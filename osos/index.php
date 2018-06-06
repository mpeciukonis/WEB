<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <tr>
          <td>Select file</td>
          <td><input type="file" name="file" id="file" /></td>
        </tr>
        <tr>
          <td>Submit</td>
          <td><input type="submit" name="submit" /></td>
        </tr>
      </form>
    </table>

    <?php
    include_once 'clases.php';
    include_once 'reading_file.php';
     ?>
  </body>
</html>
