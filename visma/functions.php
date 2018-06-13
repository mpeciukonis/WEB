<?php
function registerClient(){
  $firstName = readline("Your first name: \n");
  $lastName = readline("Your last name: \n");
  $email = readline("Your email: \n");
  $phoneNumber1 = readline("Your first phone number: \n");
  $phoneNumber2 = readline("Your second phone number: \n");
  $comment = readline("Your comment about yourself: \n");

  if (empty($firstName) || empty($lastName) || empty($email)) {
    echo "First Name, Last Name or Email are empty. Please repeat registration.\n";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email is invalid. Please repeat registration.\n";
  } elseif (!ctype_digit($phoneNumber1) || !ctype_digit($phoneNumber2)) {
      echo "First or second phone numbers are invalid. Please repeat registration.\n";
  } else {
      $client = array($firstName, $lastName, $email, $phoneNumber1, $phoneNumber2, $comment);
      return $client;
  }
}

function printClients($array){
  foreach ($array as $var) {
      print_r($var);
  }
}

function deleteClient($array){
  $condition = true;
  while ($condition) {
    $selection = readline("Do you want me to list all clients first? Yes/No: \n");
    if ($selection == "No") {
      $clientToDelete = readline("Please input standing number of client you wish to delete: \n");
      $clientToDelete = $clientToDelete+1;
      echo "Are you sure you want to delete this client?";
      if (readline("Yes/No: \n") == "Yes") {
        unset($array[$clientToDelete]);
        $condition = false;
      }
    } else {
      printClients($array);
    };
  }
}
