<?php

require_once 'vendor/autoload.php';
use Contentful\Core\Api\Exception;
use Contentful\Management\Resource\Entry;
use Contentful\Management\Client;

  $email=$_POST['emails'];
  $name=$_POST['names'];
  $mascot=$_POST['mascotname'];
  $des=$_POST['description'];
  $link=$_POST['link'];

  $client = new Client('');
  $environmentId='';
  $spaceId='';
//  $entry = new Entry('submissions');
  $environmentProxy = $client->getEnvironmentProxy($spaceId, $environmentId);
  $query = new Contentful\Management\Query();
  $query->setContentType('applications');
  $query->setLimit(30);
  //CFPAT-bkpwrnDQtsc7Akpe7MEJw8woX-nQZfysx_-2pREXJFM
  $entries = $environmentProxy->getEntries($query);
  foreach($entries as $entry){
    $registeredemail=$entry->getField('memberEmail','en-US');
    $verified=$entry->getField('verified','en-US');
    if($registeredemail[0]==$email && $verified=='verified'){
      $flag=12;
      break;
    }
  }

  if($flag==12){
    $entry = new Entry('submissions');
    $entry->setField('emailID', 'en-US', $email);
    $entry->setField('name', 'en-US', $name);
    $entry->setField('mascot','en-US',$mascot);
    $entry->setField('description','en-US',$des);
    $entry->setField('drivelink','en-US',$link);
    $entry->setField('verified','en-US','verified submission');
    // Let's call the API to persist the entry
    try {
        $environmentProxy->create($entry);
    } catch (Exception $exception) {
        echo $exception->getMessage();
        $flag=0;
    }

    $id=$entry->getId();
    require("sendgrid-php/sendgrid-php.php");
    $mail = new \SendGrid\Mail\Mail();
    $mail->setFrom("from@example.com", "name");
    $mail->setSubject("");
    $mail->addTo($email, $name);
    $mail->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $mail->addContent(
        "text/html", "<h2>Submission Details</h2>
                      <h3>Mascot Name: $mascot</h3>
                      <h3>Description: $des</h3>
                      <h3>Link: $link</h3>
                      <h3>Submission ID: $id</h3>"
    );
    $key='';
    $sendgrid = new \SendGrid($key);
    try {
        $response = $sendgrid->send($mail);
      //  print $response->statusCode() . "\n";
        //print_r($response->headers());
        //print $response->body() . "\n";
        //$i=$i+1;
    } catch (Exception $e) {
        //$i=1;
      //  echo 'Caught exception: '. $e->getMessage() ."\n";
    }
  if($flag!=0){
    echo "<script>alert('Data submitted Successfully. Submission Id:$id.We have send a copy of your submissionn details to the given mail ID');</script>";
    header('Refresh:1;index.php');}
  }
else{
    $flag=10;
      $entry = new Entry('submissions');
      $entry->setField('emailID', 'en-US', $email);
      $entry->setField('name', 'en-US', $name);
      $entry->setField('mascot','en-US',$mascot);
      $entry->setField('description','en-US',$des);
      $entry->setField('drivelink','en-US',$link);
      $entry->setField('verified','en-US','not verified');
      // Let's call the API to persist the entry
      try {
          $environmentProxy->create($entry);
      } catch (Exception $exception) {
          echo $exception->getMessage();
          $flag=0;
      }
      if($flag!=0){
        echo "<script>alert('Please Register your team before submitting. If registered,please make sure you have verified your account');</script>";
      header('Refresh:1;index.php#submission');}
}
 ?>
