<?php

  function validateData($data){

    $validData = trim(stripslashes(htmlspecialchars($data)));

    return $validData;
  }

  if(isset($_POST['nameInput'])){
    $to = 'camp@druminthewoods.com';
    $name = validateData($_POST['nameInput']);
    $subject = 'Enquiry from ' . $name;
    $email = validateData($_POST['emailInput']);
    $message = validateData($_POST['messageInput']);
    $headers = "From: $email" . "\r\n" .
   "Reply-To: $to" . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
    $errors = false;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors = true;
    }else if(empty($name) || empty($email)){
      $errors = true;
    }

    if (!$errors) {
      mail($to, $subject, $message, $headers);
      header('Location: ../index.html');
      exit;
    }else{
      header('Location: ../index.html');
    }
  }



?>
