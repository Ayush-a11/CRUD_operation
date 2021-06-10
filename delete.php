<?php
include 'config.php';
?>
<?php

	$id=$_GET["id"];

	mysqli_query($conn,"DELETE FROM users_details where id=$id");
	header("Location:display_details.php");

?>