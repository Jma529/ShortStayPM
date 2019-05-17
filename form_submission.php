<?php
  require_once "form.php"; 

  $host = "email-smtp.us-west-2.amazonaws.com"; 
  $username = "AKIA2FPQZOR6QHBKGTXN"; 
  $password = "BKWh5fGed8ZtIAKmCHTPeKK8ywCx+KlzNG77QYNKcifu"; 

  // Sanitise fields 
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if(isset($_POST["submit"])) {

    $recipient="hello@danielboterhoven.tech";
    $subject="CV message";
    $senderName=test_input($_POST["senderName"]);
    $senderCompany=test_input($_POST["senderCompany"]);
    $senderEmail=test_input($_POST["senderEmail"]);
    $senderBedrooms=test_input($_POST["senderPhone"]);
    $message=test_input($_POST["message"]);

    // Validate form
    if(empty($senderName)||empty($senderCompany)||empty($senderEmail)||empty($senderPhone)||empty($message)) {
        echo "Your name, company, email, contact number and message are required";
        exit;
    }
    $mailBody='Name: '.$senderName.'\nCompany: '.$senderCompany.'\nEmail: '.$senderEmail.'\nPhone: '.$senderPhone.'\n\n'.$message;

    
    $headers = array ('From' => $senderEmail, 'To' => $recipient, 'Subject' => $subject);
    $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true, 'username' => $username, 'password' => $password));
    $mail = $smtp->send($recipient, $headers, $mailBody);

    if (PEAR::isError($mail)) {
      $thankYou="Your email has not been sent, try again.";
    } else {
      $thankYou="<p>Thank you! Your message has been sent and I will follow up with you as soon as possible.</p>";
    }

    echo $thankYou; 
  }

?>