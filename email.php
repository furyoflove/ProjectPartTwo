<!--
  This is an edited version of freecontactform.com's email_form.php
  Original version found at http://www.freecontactform.com/email_form.php

  To run this. Use XAMPP and load pages on localhost
-->

<?php

  if(isset($_POST['email'])) {

      // My email and specified subject line
      $email_to = "fransterx123@gmail.com";
      $email_subject = "Website message";

      function died($error) {

          //Error message
          echo "We are very sorry, but there were error(s) found with the form you submitted. ";
          echo "These errors appear below.<br /><br />";
          echo $error."<br /><br />";
          echo "Please go back and fix these errors.<br /><br />";
          die();

      }

      // validation expected data exists
      if(!isset($_POST['name']) ||
          !isset($_POST['email']) ||
          !isset($_POST['message'])) {

          died('We are sorry, but there appears to be a problem with the form you submitted.');

      }

       // required fields
      $name = $_POST['name'];
      $email_from = $_POST['email'];
      $message =  $_POST['message'];

      $error_message = "";
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

      /* field checking */

      if(!preg_match($email_exp,$email_from)) {

        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

      }

      $string_exp = "/^[A-Za-z .'-]+$/";

      if(!preg_match($string_exp,$name)) {

        $error_message .= 'The name you entered does not appear to be valid.<br />';

      }

      if(strlen($message) < 2) {

        $error_message .= 'The Comments you entered do not appear to be valid.<br />';

      }

      if(strlen($error_message) > 0) {

        died($error_message);

      }

      $email_message = "Form details below.\n\n";

      // clean up headers and message to fit email format
      function clean_string($string) {

        $bad = array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);

      }

      $email_message .= "Name: ".clean_string($name)."\n";
      $email_message .= "Email: ".clean_string($email_from)."\n";
      $email_message .= "Message: ".clean_string($message)."\n";

      // create email headers
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();

      // send email
      @mail($email_to, $email_subject, $email_message, $headers);

      ?>

      <!-- Success message -->
      Thank you for contacting me. I will be in touch with you very soon.

      <?php

      // store messages into microsoft access database
      $connection_string =
      'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};' .
      'Dbq=C:\\xampp\\htdocs\\ProjectPartTwo\\messages.accdb;';

      // create database connection handler
      $database_handler = new PDO($connection_string);
      $database_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql =
      "INSERT INTO emails ( ID, [Headers], [Receiver], [Subject], [Message] ) " .
      "VALUES (" . $email_from . ", " . $headers . ", " . $email_to . ", " . $email_subject . ", " . $email_message .  " )";

      // pass the SQL query
      $database_handler->query($sql);


  }

?>
