
<div style="height: 450px;">

<?php
	require_once("pagination.php");
	if (isset($_POST["btnDelete"])){
		$id = $_POST["txtId"];
		$db->query("delete from mr_contact_book where id='$id'");

		echo "Successfully Deleted!";
	}


	$perpage = 10;
	$pg = (isset($_GET['pg'])) ? (int)$_GET['pg']: 1;
	$start_at = $perpage * ($pg - 1);

	$rows = $db->query("select count(*) from mr_user");
	list($total)=$rows->fetch_row();
	$totalPages = ceil($total / $perpage);

	$user_id=$_SESSION["s_id"];


	$user_table=$db->query("select c.id,c.name,c.phone,c.email,c.address,c.added_on,ct.name from mr_contact_book c,mr_category ct where ct.id=c.category_id and user_id='$user_id' limit $start_at, $perpage");
	
			
		echo "<table class='table table-striped table-sm'>";
		echo "<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Added Date</th>
				<th>Action</th>
			  </tr>";
	while(list($id,$name,$phone,$email,$address,$added_on)=$user_table->fetch_row()){
	
		//$status=$inactive==0?"<ul class='book'><li></li></ul>":"Inactive";
		
		echo "<tr>
				<td>$id</td>
				<td>$name</td>
				<td>$phone</td>
				<td>$email</td>
				<td>$address</td>
				<td>$added_on</td>
				<td><form action='home.php?page=3' method='post' style='display:inline'>
						<input type='hidden' name='txtId' value='$id' />
						<input type='submit' name='btnEdit' class='material-icons red600' value='edit' />
					</form>
					<form action='home.php?page=2' method='post' onsubmit='return confirm(\"Are you sure?\")' style='display:inline'>
						<input type='hidden' name='txtId' value='$id' />
						<input type='submit' name='btnDelete' class='material-icons' style='color:red;' value='delete' />
					</form>
				</td>
			  </tr>";
		
	}
		echo "</table>";

	
?>
</div>
<div>
	<?php
		echo pagination($pg,$totalPages,2);
	?>
</div>