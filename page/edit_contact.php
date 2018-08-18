<?php
	if(isset($_POST["btnUpdate"])){
		$user_id=$_POST["txtId"];
		$role_id=$_POST["cmbRole"];
		$username=$_POST["txtUsername"];
		$password=md5(trim($_POST["txtPassword"]));
		$repassword=md5(trim($_POST["txtRePassword"]));
		echo "$user_id";
		if($password==$repassword){
			$db->query("update  mr_contact_book set username='$username',role_id='$role_id' where id='$user_id'");
			echo "Successfully Updated!";
		}else{
			echo "Password Doesn't match!!!";
		}
	}
	
	
	if(isset($_POST["btnEdit"])){
		$id=$_POST["txtId"];
		$contact_table = $db->query("select name,phone,email,address,category_id from mr_contact_book where id='$id'");
		list($name,$phone,$email,$address,$category)=$contact_table->fetch_row();
	}

?>

<body>
	<form action="home.php?page=1" method="post">
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Category</label>
        <div class="col-md-3">
        <select class="form-control" name="cmbCategory">
            <?php
                //$db=new mysqli("localhost","root","","mizan");
                $category_table=$db->query("select id,name from mr_category");
                
                while(list($id,$name)=$category_table->fetch_row()){
                    
                    echo "<option value='$id'>$name</option>";
                }
                
                
            ?>
        </select>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Name</label>
        <div class="col-md-3">
        <input type="text" class="form-control" value="<?php echo isset($name)?$name:''?>" name="txtName">
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Phone</label>
        <div class="col-md-3">
        <input type="text" class="form-control" value="<?php echo isset($phone)?$phone:''?>" name="txtPhone">
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Email</label>
        <div class="col-md-3">
        <input type="text" class="form-control" value="<?php echo isset($email)?$email:''?>" name="txtEmail">
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Address</label>
        <div class="col-md-3">
        <input type="text" class="form-control" value="<?php echo isset($address)?$address:''?>" name="txtAddress">
        </div>
      </div>
    
      <div class="form-group row justify-content-center">
        <label class="col-md-2"></label>
        <div class="col-md-3" align="right">
      	<input type="submit" class="btn btn-primary" name="save" value="Save" />
        </div>
      </div>
	</form>

</body>
