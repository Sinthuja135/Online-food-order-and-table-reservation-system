<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

<script type="text/javascript">
					 function valid()
{


 var x = confirm("Invalid table reservation staffname");


 if(x) {


 	window.location.replace("../view_reservations.php");

 }

}


</script>
</body>
</html>





<?php
include 'dbh.inc.php';
//$val=$_POST["$row['order_no']"];

$val = $_POST['input'];

$id = $_POST['id'];

$sql = "UPDATE reservations SET reservation_staff='$val' where cus_id='$id'";

include 'dbh.inc.php';
$sql3 = "SELECT * from staff where type='table'";
$result = $conn->query($sql3);

$exit = false;

if ($result->num_rows > 0) {

	$i = 0;
	while ($row = $result->fetch_assoc()) {

		$i++;

		if ($row['username'] == $val) {

			$exit = true;

		}

	}

	if ($exit) {

		if ($conn->query($sql)) {

			include 'dbh.inc.php';
			$sql = "UPDATE reservations SET reservation_status='Accepted' where cus_id='$id'";

			if ($conn->query($sql)) {

				echo "<script>window.open('../view_reservations.php?mes=Staff Assigned','_self')</script>";

			}

		}

	} else {
		echo '<script type="text/javascript"> valid(); </script>';

	}
}
?>
