<?php include 'includes/header.php';?>
<?php 
if(isset($_POST['submit'])){
	die('The submit button was pressed');
}

?>
<?php 


// Create DB Object
$db = new DataBase ();

// create query
$query = "SELECT * FROM categories";

// Run query
$categories = $db->select ( $query );


?>
<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Titles</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
   <select name = "category" class="form-control">
    	<?php while ($row = $categories->fetch_assoc()):?>
    	<?php if($row['id']==$post['category']){
    	
    		$selected = 'selected';
    		
    	}else {
    		$selected = '';
    		
    	}
    	
    	
    	?>
    	
	  <option <?php echo $selected?>><?php echo $row['name']?></option>
	  
	  <?php endwhile;?>

	
</select>
  </div>
  <div class="form-group">
    <label>Post Titles</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author">
  </div>
 <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
  
	
	<a href="index.php" class="btn btn-default">Cancel</a>
	</div>
	<br>
  </form>
<?php include 'includes/footer.php';?>