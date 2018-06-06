<?php
  if (isset($_POST["submit"])) {  //patikrinti ar pasubmitintas
     if (isset($_FILES["file"])) { //patikrinti ar failas
          if ($_FILES["file"]["error"] > 0) { //patikrinti ar turi failas erroru
              echo "File returns errors, please try again.";
          }
          else { //jei checkai praejo - judam toliau
                $file = fopen($_FILES["file"]["tmp_name"], 'r'); //atidarom faila, readonly
                $athletes = [];
                while(!feof($file)){ //po kol failas nesibaige, darom dalykus
                  $line = fgets($file); //imam eilute
                  $linearray = explode(';', $line); //darom masyva is eilutes, padalinta kabliataskiu
                  $athlete = new Athlete($linearray[0], $linearray[1], $linearray[2], $linearray[3], $linearray[4], $linearray[5], $linearray[6], $linearray[7], $linearray[8], $linearray[9], $linearray[10]); //kuriam atleto klase, metam eilutes masyva
                  array_push($athletes, $athlete); //dedam eilutes masyva i objektu masyva
                }
                fclose($file); //uzdarom faila
                echo '<p>File uploaded successfully!</p>';

                function compare($a, $b){ //funkcija panaudot i usort, kuri palygina 2 stringus
                  return strcmp($b->total_score, $a->total_score);
                }

                usort($athletes, "compare"); //susortinti objektus pagal funkcija compare

                for ($i=0; $i < count($athletes); $i++) { //ciklas irasyti vieta kaip nauja masyvo nari pagal indeksa
                  $athletes[$i]->place = $i+1;
                }

                $fp = fopen('results.json', 'w'); //kuriam nauja json faila
                fwrite($fp, json_encode($athletes)); //rasom atletus, sudarom json struktura
                fclose($fp); //uzdarom faila
          }
       }
       else {
         echo "No file selected.";
       }
    }
 ?>
