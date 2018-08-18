<?php session_start();
	require_once("db_config.php");
    if(!isset($_SESSION["s_username"])){
    	header("location:index.php");
    }
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to contact book</title>
  <link rel="icon" href="../../../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'];?>">Contact <span class="book">BOOK</span></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=1">Add Contact </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="home.php?page=2">View Contact</a>
          </li>
           <!--li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="home.php?page=1">Add User</a>
              <a class="dropdown-item" href="home.php?page=2">Manag User</a>
              <a class="dropdown-item" href="home.php?page=3">View User</a>
            </div>
          </li-->
        </ul>
		<ul class="navbar-nav"
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>">
			<?php echo $_SESSION["s_username"];
				//echo $_SESSION["s_id"];
			?>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>
	<div class="container">
    	<?php
			include("placeholder.php");
        ?>
    </div>

	<footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>



  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>