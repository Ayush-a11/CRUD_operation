<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<?php
			
			$id=$_GET['id'];
			
			$result=mysqli_query($conn,"SELECT * FROM users_details where id=$id");

			while($row=$result->fetch_assoc()){

				$name=$row['username'];
				$email=$row['useremail'];
				$phone=$row['userphone'];
				$gender=$row['usergender'];
		}
			?>
		<?php
		if(isset($_POST['submit'])){

			if(empty($_POST['name']))
				echo "Please enter name";
			else{
				$name =$_POST['name'];
			}
			if(empty($_POST['email']))
				echo "Please enter  emil name";
			else{
				$email =$_POST['email'];
			}
			if(empty($_POST['phone']))
				echo "Please enter correct number";
			else{
				$phone =$_POST['phone'];
			}
			if(empty($_POST['gen']))
				echo "Please enter Gender";
			else	
				$gender=$_POST['gen'];
			
			// if(!(empty($name)&&empty($email)&&empty($phone)&&empty($gender)))
			// {
				mysqli_query($conn,"UPDATE users_details SET username='$name',useremail='$email',userphone='$phone',usergender='$gender' where id='$id'");
				//header("Location:./update.php?id=$id");

			// }
		}
		
		
	?>
		<form method="post" >
		NAME:<input type="text" name="name" placeholder="Enter your name" value="<?php echo $name;?>"><br>
			
		Email:<input type="text" name="email" placeholder="Enter your Email" value="<?php echo $email;?>"><br> <br>
		
		Phone:<input type="text" name="phone" placeholder="Enter your number" value="<?php echo $phone;?>"><br>
		
		<br>
		Gender:	<?php echo $gender;?>
			
		<input type="radio" name="gen" value="Male">

			   <input type="radio" name="gen" value="Female">
		<br>
			   <input type="submit" name="submit" value="submit" >

	</form>

</body>
</html>