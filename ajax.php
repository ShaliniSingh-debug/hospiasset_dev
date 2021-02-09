<?php
$name=$_POST['name'];
$conn= new mysqli("localhost","root","","mydearshalu");

$sql = "INSERT INTO `record`( `message`) 
	VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
		echo $name;
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
