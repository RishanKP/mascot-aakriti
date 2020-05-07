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
$query->setContentType('applications');
$query->setLimit(500);
$entries = $environmentProxy->getEntries($query);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="applications.css">
<head>
	<title>table1</title>
	<a id="page" href="submissions.php">Submisions</a>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Sl. NO.</th>
				<th>Name</th>
				<th>Team mates</th>
				<th>E-mail</th>
				<th>Phone number</th>
				<th>DOB</th>
				<th>Place</th>
				<th>Source</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i=1;
			foreach ($entries as $entry) {
				// code...
				$leader=$entry->getField('teamLeader','en-US');
				$members=$entry->getField('teamMembers','en-US');
				$phone=$entry->getField('memberNumbers','en-US');
				$ids=$entry->getField('memberEmail','en-US');
				$place=$entry->getField('place','en-US');
				$status=$entry->getField('verified','en-US');
				$source=$entry->getField('source','en-US');
					echo "<tr>
						<td>$i</td>
						<td>$leader</td>
						<td>$members[0] <br> $members[1]</td>
						<td>$ids[0]<br> $ids[1] <br>$ids[2]</td>
						<td>$phone[0] <br>$phone[1]<br> $phone[2]</td>
						<td>$members[2]</td>
						<td>$place[0]<br> $place[1]<br> $place[2]</td>
						<td>$source</td>
						<td>$status</td>
					</tr>";
					$i=$i+1;
			}
		?>
			</tbody>
	</table>
</body>
</html>
