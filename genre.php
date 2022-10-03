<?php 
$pageTitle = "";
$validation_genre = $message = "";
?>

<?php
include ('inc/header.php');
include ('./preparedStatements.php');
?>

<?php
//SQL REQUESTS

if(isset($_POST['add_genre'])){
	$genre = trim($_POST['genre']);
	$genre = filter_var($genre, FILTER_SANITIZE_STRING);
	$form_good = TRUE;

	if ($genre == "") {
		$validation_genre = "<p class='error'>genre Cannot be Blank</p>";
		$form_good = FALSE;          
	}
	if (strlen($genre)< 2) {
		$validation_genre .= "<p class='error'>genre must be 2 characters or more</p>";
		$form_good = FALSE; 
	}

	if ($form_good == TRUE) {
		$add_genre->bind_param("s", $genre);
		$add_genre->execute();
		if($add_genre-> error) {
			$message = "Error: " . $add_genre->error;
		}
		else {
			$message = "<h2>ADDED GENRE</h2>";
		}
		$add_genre->close();
	}
	
}
?>
<?php
	$get_all_genres->execute();
	$get_result = $get_all_genres->get_result();

	if($get_result->num_rows>0) : ?>
		<?php while ($row = $get_result->fetch_assoc()) :  ?>
			<?php  
				extract($row);
				$id = $row['genre_id'];
				$name = $row['name'];
			?>
			<div>
				<h3><?php echo $name;  ?></h3>
				<h3><?php echo $id;  ?></h3>
			
			</div>		
		<?php  endwhile ?>
<?php endif;  ?>
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" class="form" enctype="multipart/form-data">
<?php
		echo $message;
	?>
	<!-- Add Genre -->
	<label for="genre">Add Genre</label>
	<input type="text" name="genre">
   <input type="submit" value="Add Genre" name="add_genre" id="add_genre">
</form>