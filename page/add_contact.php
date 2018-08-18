<?php
	
	//require_once("db_config.php");
	if(isset($_POST["save"])){
		$user_id=$_SESSION["s_id"];
		$category=$_POST["cmbCategory"];
		$name=$_POST["txtName"];
		$phone=$_POST["txtPhone"];
		$email=$_POST["txtEmail"];
		$address=$_POST["txtAddress"];
		$added_on=date("Y-m-d H:i:s");

		$db->query("insert into mr_contact_book(user_id,category_id,name,phone,email,address,added_on)values('$user_id','$category','$name','$phone','$email','$address','$added_on')");
			echo "Successfully Added!";
		
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
        <input type="text" class="form-control" placeholder="Enter Username" name="txtName" required>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Phone</label>
        <div class="col-md-3">
        <input type="text" class="form-control"  placeholder="Phone" name="txtPhone" required>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Email</label>
        <div class="col-md-3">
        <input type="text" class="form-control"  placeholder="Email" name="txtEmail" required>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-md-2">Address</label>
        <div class="col-md-3">
        <input type="text" class="form-control"  placeholder="Address" name="txtAddress" required>
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
