<?php
require("sendgrid-php/sendgrid-php.php");

$emailq=$_POST['emailq'];
$query=$_POST['query'];

$email = new \SendGrid\Mail\Mail();
$email->setFrom($emailq, $emailq);
$email->setSubject("");
$email->addTo("from address", "name");
$email->addContent("text/plain", $query);

$key='';
$sendgrid = new \SendGrid($key);
try {
    $response = $sendgrid->send($email);
    $i=1;
} catch (Exception $e) {
  $i=0;
  //  echo 'Caught exception: '. $e->getMessage() ."\n";
}
if($i!=0){
  echo "<script>alert('Your query was sent successfully. Please wait for a reply');</script>";
  header('Refresh:1;index.php');
  }
else {
    echo "<script>alert('We were unable to send your query. Please try again later or contact the organizers');</script>";
      header('Refresh:1;index.php');
  }
?>
