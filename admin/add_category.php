<?php include 'includes/header.php';?>
<?php 

// Create DB Object
$db = new DataBase ();

if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db->link, $_POST['name']);

	//Simple validation
	if ($name == ''){
		//Set error
		$error = 'Please fill out all required field';
		
	}else {
		
		$query = "INSERT INTO categories
				 (name)
				VALUES('$name')";
				}
		
		$insert_row = $db->insert($query);
}

?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
 <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
 	
	<a href="index.php" class="btn btn-default">Cancel</a>
	</div>
	<br>
  </form>
<?php include 'includes/footer.php';?>