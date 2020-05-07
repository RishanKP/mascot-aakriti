<?php
require_once 'vendor/autoload.php';
use Contentful\Core\Api\Exception;
use Contentful\Management\Resource\Entry;
use Contentful\Management\Client;

  $email1=$_POST['email1'];
  $name1=$_POST['name1'];
  $mobile1=(string)$_POST['mobile1'];
  $dob=(string)$_POST['dob'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];

  $email2=$_POST['email2'];
  $name2=$_POST['name2'];
  $mobile2=(string)$_POST['mobile2'];
  $email3=$_POST['email3'];
  $name3=$_POST['name3'];
  $mobile3=(string)$_POST['mobile3'];

  $members=array($name2,$name3,$dob);
  $emailIDs=array($email1,$email2,$email3);
  $numbers=array($mobile1,$mobile2,$mobile3);
  $place=array($country,$state,$city);
  $verified='0';
  $source=$_POST['where'];

$client = new Client('');
$environmentId='';
$spaceId='';
$entry = new Entry('applications');
$environmentProxy = $client->getEnvironmentProxy($spaceId, $environmentId);
$entry->setField('teamLeader', 'en-US', $name1);
$entry->setField('teamMembers', 'en-US', $members);
$entry->setField('memberEmail','en-US',$emailIDs);
$entry->setField('memberNumbers','en-US',$numbers);
$entry->setField('place','en-US',$place);
$entry->setField('verified','en-US',$verified);
$entry->setField('source','en-US',$source);
// Let's call the API to persist the entry
  $i=1;
try {
    $environmentProxy->create($entry);
} catch (Exception $exception) {
    echo $exception->getMessage();
    $i=0;
}

$id=$entry->getId();

if($i==1)
{
  require("sendgrid-php/sendgrid-php.php");

  $file_encoded = base64_encode(file_get_contents('mascot_competition_brief.pdf'));
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("from address","name");
  $email->setSubject("");
  $email->addTo($email1, $name1);
  $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
  $email->addContent(
      "text/html", "<h2>Thank you for Registering</h2>
                    <h3>Please verify and confirm your account registration for further procedures</h3>
                    <p>VERIFY:<a href='mascot-aakriti.herokuapp.com/confirmation.php?id=$id'>mascot-aakriti.herokuapp.com/confirmation.php?id=$id</a></p>"
  );
  $email->addAttachment(
      $file_encoded,
      "application/pdf",
      "mascot_competition_brief.pdf",
      "attachment"
  );
  $key='YOUR_SENDGRID_KEY';
  $sendgrid = new \SendGrid($key);
  try {
      $response = $sendgrid->send($email);
    //  print $response->statusCode() . "\n";
      //print_r($response->headers());
      //print $response->body() . "\n";
      $i=$i+1;
  } catch (Exception $e) {
      $i=1;
    //  echo 'Caught exception: '. $e->getMessage() ."\n";
  }

  }
  if($i==2){
    echo "<script>alert('A verification mail has been send to the provided mail ID of Team Member 1. Please verify your mail for further procedures');</script>";
    header('Refresh:1;index.php#submit-user');
  }
  else{
    echo "<script>alert('Your registration was unsuccessfull. please contact the organizers or try again later');</script>";
      header('Refresh:1;index.php#newuser');
  }
?>
