<?php

require_once 'vendor/autoload.php';
use Contentful\Core\Api\Exception;
use Contentful\Management\Resource\Entry;
use Contentful\Management\Client;


$client = new Client('Client_ID');
$environmentId='ENV_ID';
$spaceId='SPACE_ID';
$entry = new Entry('applications');
$environmentProxy = $client->getEnvironmentProxy($spaceId, $environmentId);

$id=$_GET['id'];
$entry=$environmentProxy->getEntry($id);
$entry->setField('verified','en-US','verified');
$entry->update();

$verified=$entry->getField('verified','en-US');

  if($verified=='verified'){
    echo "<script>alert('Your account verification was Successfull.Proceed to Submission');</script>";
    header('Refresh:1;index.php');
  }
  else{
    echo "<script>alert('There was a problem verifying your account. Please contact the organisers')</script>";
      header('Refresh:1;index.php');
  }
?>
