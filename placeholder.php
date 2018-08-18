<?php
		$wc=$_SESSION["s_fullname"];
	if(isset($_GET["page"])){
		$page=$_GET["page"];
		
		if($page=="1"){
			include("page/add_contact.php");
		}elseif($page=="2"){
			include("page/view_contact.php");
		}elseif($page=="3"){
			include("page/edit_contact.php");
		}

	}else{
			echo "WELCOME TO <h1 style='color:lightgreen;'>$wc</h1>";
	}



?>