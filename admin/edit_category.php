<?php include 'includes/header.php';?>
<?php

$id = $_GET['id'];
// Create DB Object
$db = new DataBase ();

// create query
$query = "SELECT * FROM categories WHERE id =".$id;;

// Run query
$categories = $db->select ( $query )->fetch_assoc();;

?>
<form role="form" method="post" action="edit_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $categories['name'];?>">
  </div>
 <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
 	
	<a href="index.php" class="btn btn-default">Cancel</a>
	 <input name="submit" type="submit" class="btn btn-danger" value="Delete"/>
	</div>
	<br>
  </form>
<?php include 'includes/footer.php';?>