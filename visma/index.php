<?php
include_once 'functions.php';

$clients = array();
$continue = true;

while ($continue) {
  $selection = readline("What do you want to do? Create client - C/Print existing clients - P/Delete client - D/Exit - E: ");
  if ($selection == "C") {
    $anotherClient = true;
    while ($anotherClient) {
      $oneClient = registerClient();
      array_push($clients, $oneClient);
      if (readline("Do you want to create another client? Yes/No: ") == "No") {
        $anotherClient = false;
      }
    }
  } elseif ($selection == "P") {
    if (empty($clients)) {
      echo "There is no clients created yet.\n";
    } else {
      printClients($clients);
    }
  } elseif ($selection == "D") {
    deleteClient($clients);
  } elseif ($selection == "E") {
    echo "Quitting application.";
    $continue = false;
  } else {
    echo "Please choose valid selection or input letter from example.\n";
  }
}
