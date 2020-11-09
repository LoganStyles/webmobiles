<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: contact.php');
    die;
}
 

$contact_message = $_POST['comment'];
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['subject'];

require_once "./vendor/autoload.php";

// Create the Transport
$transport = (new Swift_SmtpTransport('mail.webmobiles.com.ng', 465, 'ssl'))
// $transport = (new Swift_SmtpTransport('smtp host', smtp port))

  ->setUsername('noreply@webmobiles.com.ng')
// username and password of smtp account
  ->setPassword('ICheckMailsOften(2020)')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('New Message From Your contact Page'))
  ->setFrom([$contact_email => $contact_name])
  ->setTo(['noreply@webmobiles.com.ng' ])
  ->setBody(

    '<html>' .
    ' <body>' .
    '  Here is an image <img src="' . // Embed the file
         $message->embed(new Swift_Image($img_data, 'image.jpg', 'images/logo.png')) .
       '" alt="Image" />' .

       $contact_message .
      ' <br>'.
      '<br>'.

      $contact_name .

    ' </body>' .
    '</html>',
      'text/html' // Mark the content-type as HTML

  )
  ;
 
// try {

// Send the message
// $result = $mailer->send($message);

// echo $result;

// } catch (Swift_TransportException $e) {
//     die($e->getMessage());
// }




// MAIL_DRIVER=smtp
// MAIL_HOST=smtp.eu.mailgun.org
// MAIL_PORT=465
// MAIL_USERNAME=postmaster@mail.washryte.com.ng
// MAIL_PASSWORD=93b79d37f4bbe96f674baab89d0d25f0-ea44b6dc-0062a0d5