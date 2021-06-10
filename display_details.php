<?php
include 'config.php';
?>
<?php
	$details=mysqli_query($conn,"SELECT * FROM users_details");
	// $data=mysqli_fetch_array($details);
	$val=1;
	while($rows=$details->fetch_assoc()){
?>
	<ol type="A" > USER:<?php echo $val;$val++;?><br>
		<a href="update.php?id=<?php echo $rows['id']?>"><input type="button" value="UPDATE"></a>
		<!-- <a href="update.php?id=<?php echo $rows['id']?>">
                <input type="button" value="Edit"></a> -->
		<a href="delete.php?id=<?php echo $rows['id']?>"><input type="button" value="DELETE" onclick="return confirm('EKK AUR BAAR SOCH LO');"></a>
		<li>Username:<?php echo $rows['username'];?></li>
		<li>Email:<?php echo $rows['useremail'];?></li>
		<li>Phone:<?php echo $rows['userphone'];?></li>
		<li>Gender:<?php echo $rows['usergender'];?></li>
	</ol>

<?php
}?>	
