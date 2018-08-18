<?php

	if(isset($_POST["btnSignup"])){
		$fullname=$_POST["txtFullname"];
		$email=$_POST["txtEmail"];
		$username=trim($_POST["txtUsername"]);
		$password=md5(trim($_POST["txtPassword"]));
		
		$db=new mysqli("localhost","root","","mizan");
		
		$db->query("insert into mr_user(full_name,email,username,password)values('$fullname','$email','$username','$password')");
			
			if(isset($id)){

				$_SESSION["s_id"]=$id;
				$_SESSION["s_username"]=$_username;
				$_SESSION["s_fullname"]=$_fullname;
				header("location:home.php");
		}
	}

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
      <link rel="stylesheet" href="home/css/style.css">

  
</head>

<body>
<div class="head">
  <h1>PLEASE SIGN UP For LOGIN</h1>
</div>
<!-- Form Module-->
<div class="sign">
  <form action="" method="post">
	  <input type="text" name="txtFullname" placeholder="Name" id="txtFullname" required>  
	  <input type="text" name="txtEmail" placeholder="Email" id="txtEmail" required>  
	  <input type="text" name="txtUsername" placeholder="Username" id="username" required>  
	  <input type="password" name="txtPassword" placeholder="password" id="password" required>  
	  <span><?php echo isset($error)?$error:"";?></span>
	  <input type="submit" value="Sign Up" name="btnSignup"><br>
      <button class="forgot"> 
	  <a href="index.php?page=login">Already sign up click here to LOGIN</a>
      </button>
  </form>
</div>
<div class="shadow"></div>

    <script  src="home/js/index.js"></script>

</body>
</html>
