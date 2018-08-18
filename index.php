<?php session_start();
	date_default_timezone_set("asia/dhaka");
	if(isset($_POST["btnLogin"])){
		$username=trim($_POST["txtUsername"]);
		$password=md5(trim($_POST["txtPassword"]));
		
		$db=new mysqli("localhost","root","","mizan");
		
		$user_table=$db->query("select id,username,password,full_name,user_id from mr_user where username='$username' and password='$password'");

			list($id,$_username,$_password,$_fullname,$_user_id)=$user_table->fetch_row();
			
			if(isset($id)){
				$_SESSION["s_user_id"]=$_user_id;
				$_SESSION["s_id"]=$id;
				$_SESSION["s_username"]=$_username;
				$_SESSION["s_fullname"]=$_fullname;

				header("location:home.php");
		}else{
			$error="<span>Incorrect user name or password</span>";
		}
	}

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome to login</title>
      <link rel="stylesheet" href="home/css/style.css">

  
</head>

<body>
<div class="head">
  <h1>WELCOME TO LOGIN</h1>
</div>
<!-- Form Module-->
<div class="login">
  <form action="" method="post">
	  <input type="text" name="txtUsername" placeholder="Username" id="username" required>  
	  <input type="password" name="txtPassword" placeholder="password" id="password" required>  
	  <span><?php echo isset($error)?$error:"";?></span>
	  <input type="submit" value="Sign In" name="btnLogin"> <br>
      <button class="forgot"><a href="sign.php">Don't have an account? Sign Up</a></button>
  </form>
</div>
<div class="shadow"></div>

    <script  src="home/js/index.js"></script>

</body>
</html>
