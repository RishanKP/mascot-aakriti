<?php
require_once '../vendor/autoload.php';
use Contentful\Core\Api\Exception;
use Contentful\Management\Resource\Entry;
use Contentful\Management\Client;


$client = new Client('');
$environmentId='';
$spaceId='';
$environmentProxy = $client->getEnvironmentProxy($spaceId, $environmentId);

$query = new Contentful\Management\Query();
$query->setContentType('submissions');
$query->setLimit(100);
$entries = $environmentProxy->getEntries($query);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="applications.css">
<head>
	<title>table2</title>
	<a id="page" href="applications.php">Applications</a>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Sl. NO.</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Mascot name</th>
				<th>Description</th>
				<th>Drive link</th>
				<th>Verified</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=1;
			foreach ($entries as $entry) {
				// code...
				$email=$entry->getField('emailID','en-US');
				$name=$entry->getField('name','en-US');
				$mascot=$entry->getField('mascot','en-US');
				$des=$entry->getField('description','en-US');
				$drive=$entry->getField('drivelink','en-US');
				$status=$entry->getField('verified','en-US');
					echo "<tr>
						<td>$i</td>
						<td>$name</td>
						<td>$email</td>
						<td>$mascot</td>
						<td>$des</td>
						<td><a target='_blank' href=".$drive.">$drive<a></td>
						<td>$status</td>
						</tr>";
						$i=$i+1;
			}?>
		</tbody>
	</table>
</body>
</html>
