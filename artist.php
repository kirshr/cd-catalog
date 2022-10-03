<?php 
$pageTitle = "";
$validation_artist = $message = "";
?>
<?php
include ('inc/header.php');
include ('./preparedStatements.php');
?>
<?php
//SQL REQUESTS

if(isset($_POST['add_artist'])){
	$artist = trim($_POST['artist']);
	$artist = filter_var($artist, FILTER_SANITIZE_STRING);
	$form_good = TRUE;

	if ($artist == "") {
		$validation_artist = "<p class='error'>artist Cannot be Blank</p>";
		$form_good = FALSE;          
	}
	if (strlen($artist)< 2) {
		$validation_artist .= "<p class='error'>artist must be 2 characters or more</p>";
		$form_good = FALSE; 
	}

	if ($form_good == TRUE) {
		$add_artist->bind_param("s", $artist);
		$add_artist->execute();
		if($add_artist-> error) {
			$message = "Error: " . $add_artist->error;
		}
		else {
			$message = "<h2>ADDED artist</h2>";
		}
		$add_artist->close();
	}
	
}
?>
<?php
	$get_all_artists->execute();
	$get_result = $get_all_artists->get_result();

	if($get_result->num_rows>0) : ?>
		<?php while ($row = $get_result->fetch_assoc()) :  ?>
			<?php  
				extract($row);
				$id = $row['artist_id'];
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
	<!-- Add artist -->
	<artist for="artist">Add artist</artist>
	<input type="text" name="artist">
   <input type="submit" value="Add artist" name="add_artist" id="add_artist">
</form>