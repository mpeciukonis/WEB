<?php
  if (isset($_POST["submit"])) {
     if (isset($_FILES["file"])) {
          if ($_FILES["file"]["error"] > 0) {
              echo "File returns errors, please try again.";
          }
          else {
                $file = fopen($_FILES["file"]["tmp_name"], 'r');
                $athletes = [];
                while(!feof($file)){
                  $line = fgets($file);
                  $linearray = explode(';', $line);
                  $athlete = new Athlete($linearray[0], $linearray[1], $linearray[2], $linearray[3], $linearray[4], $linearray[5], $linearray[6], $linearray[7], $linearray[8], $linearray[9], $linearray[10]);
                  array_push($athletes, $athlete);
                }
                fclose($file);
                echo '<p>File uploaded successfully!</p>';

                function compare($a, $b){
                  return strcmp($b->total_score, $a->total_score);
                }

                usort($athletes, "compare");

                for ($i=0; $i < count($athletes); $i++) {
                  $athletes[$i]->place = $i+1;
                }

                $fp = fopen('results.json', 'w');
                fwrite($fp, json_encode($athletes));
                fclose($fp);
          }
       }
       else {
         echo "No file selected.";
       }
    }
 ?>
