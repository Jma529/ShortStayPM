<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//  try {
  require_once "Mail.php";
 
// } 
// catch (Exception $ex) {
//   echo $ex->getMessage();
// }

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

    $recipient="jma529@gmail.com";
    $subject="Find my Short-let Value";
    $senderAddress=test_input($_POST["address"]);
    $senderEmail=test_input($_POST["email"]);
    $senderBedrooms=test_input($_POST["bedrooms"]);

    // Validate form
    if(empty($senderAddress)||empty($senderEmail)||empty($senderBedrooms)) {
        echo "Please fill in in all fields";
        exit;
    }
    $mailBody='Email: '.$senderEmail.'\nAddress: '.$senderAddress.'\nNumber of Bedrooms: '.$senderBedrooms.'\n\n';

    
    $headers = array ('From' => $senderEmail, 'To' => $recipient, 'Subject' => $subject);
    $smtp = Mail::factory('smtp', array ('debug'=>true,'host' => $host, 'auth' => true, 'username' => $username, 'password' => $password));
    $mail = $smtp->send($recipient, $headers, $mailBody);
 
    if (PEAR::isError($mail)) {
      $thankYou="Your email has not been sent, try again.";
    } else {
      $thankYou="<p>Thank you! Your message has been sent and I will follow up with you as soon as possible.</p>";
    }

    echo $thankYou; 
  }

?>