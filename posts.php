<?php include 'includes/header.php'; ?>

<?php

// Create DB Object
$db = new DataBase ();


//Check URL for category

if(isset($_GET['category'])){
	$category = $_GET['category'];
	
	// Create Query
	$query = "SELECT * FROM posts WHERE category = ".$category;
	
	// Run Query
	$posts = $db->select ( $query );
	
}else {
	
	// Create Query
	$query = "SELECT * FROM posts";
	
	// Run Query
	$posts = $db->select ( $query );
}






// create query
$query = "SELECT * FROM categories";

// Run query
$categories = $db->select ( $query );

?>
<?php if($posts):?>
<?php while($row = $posts->fetch_assoc()):?>

<div class="blog-post">
	<p><?php echo $row['date'];?></p>
	<h2 class="blog-post-title"><?php echo $row['title'];?></h2>
	<p class="blog-post-meta"><?php echo formatDate($row['date']);?> by <a
			href="#"><?php echo $row['author']?></a>
	</p>
            <?php echo shortenText($row['body']);?>
			<a class="readmore"
		href="post.php?id=<?php echo urlencode($row['id']);?>">Read More</a>
</div>
<!-- /.blog-post -->
<?php endwhile;?>
          
      
          <?php else:?>
<p>There are no posts yet</p>
<?php endif;?>
          <?php include 'includes/footer.php'; ?>

          

         
