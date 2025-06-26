<?php  include("Db.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form Car Rental System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="" method="post">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="phone">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="text" class="form-control" placeholder="Usertype" name="usertype">
					</div>
					<input type="submit" value="Register" name="register">
					<p class="paraLogin" style="margin-top:22px; margin-left: 66px; font-size:16px">Already Register then <a href="Login.php" style="border-bottom:2px solid purple;">LOGIN</a> </p>
				</form>
				
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


<?php
        
        if(isset($_POST['register'])){
            $Pname=$_POST['username'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $usertype=$_POST['usertype'];
			if ($password === $cpassword) {
            $query="insert into registration(username,phone,email,password,cpassword,usertype) values('$Pname','$phone','$email','$password','$cpassword','$usertype') ";
            $data=mysqli_query($conn,$query);
            if($data){
               echo "success";
                
            }else{
           echo "failed";
        }
			}else{
				echo "<script>alert('Registration successful! Because Password does not match');</script>";
			}
        }
        ?>