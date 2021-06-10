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
				mysqli_query($conn,"INSERT INTO users_details(USERNAME,USEREMAIL,USERPHONE,USERGENDER) values('$name','$email','$phone','$gender')");

			// }
		}
	?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		NAME:<input type="text" name="name" placeholder="Enter your name"><br>
		
		Email:<input type="text" name="email" placeholder="Enter your Email"><br>
		
		Phone:<input type="text" name="phone" placeholder="Enter your number"><br>
		<br>
		Gender:<input type="radio" name="gen" value="Male">
			   <input type="radio" name="gen" value="Female">
		<br>
			   <input type="submit" name="submit" value="submit" >

	</form>
</body>
</html>