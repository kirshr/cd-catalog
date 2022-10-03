<?php 
$pageTitle = "";
$validation_album = $message = "";
?>
<?php
include ('inc/header.php');
include ('./preparedStatements.php');
?>
<?php
//SQL REQUESTS

if(isset($_POST['add_album'])){
	$album_name = trim($_POST['album_name']);
	$album_name = filter_var($album_name, FILTER_SANITIZE_STRING);

	$album_genre = trim($_POST['album_genre']);
	$album_genre = filter_var($album_genre, FILTER_SANITIZE_STRING);

	$album_label = trim($_POST['album_label']);
	$album_artist = trim($_POST['album_artist']);

	$album_description = trim($_POST['album_description']);
	$album_year = trim($_POST['album_year']);




	$form_good = TRUE;

	if ($album_name == "") {
		$validation_album = "<p class='error'>album Cannot be Blank</p>";
		$form_good = FALSE;          
	}
	if (strlen($album_name)< 2) {
		$validation_album .= "<p class='error'>album must be 2 characters or more</p>";
		$form_good = FALSE; 
	}

	if ($form_good == TRUE) {
		$add_album->bind_param("siiisi", $album_name, $album_genre, $album_label, $album_artist, $album_description, $album_year);
		$add_album->execute();
		if($add_album-> error) {
			$message = "Error: " . $add_album->error;
		}
		else {
			$message = "<h2>ADDED album</h2>";
		}
		$add_album->close();
	}
	
}
?>
<!-- GET ALL ALBUMS -->
<?php
	$get_all_albums->execute();
	$get_result = $get_all_albums->get_result();

	if($get_result->num_rows>0) : ?>
		<?php while ($row = $get_result->fetch_assoc()) :  ?>
			<?php  
				extract($row);
				$name = $row['name'];
			?>
		<?php  endwhile ?>
<?php endif;  ?>

<!-- FORM -->
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" class="form" enctype="multipart/form-data" class="form">
<?php
		echo $message;
	?>
	<!-- Add Name -->
	<label for="album_name">Add album</label>
	<input type="text" name="album_name">

	<!-- Add Genre -->
	<label for="album_genre">Genre</label>
	<select name="album_genre" id="">
		<?php
			$get_all_genres->execute();
			$get_result = $get_all_genres->get_result();
			if($get_result->num_rows>0) : ?>
				<?php while ($row = $get_result->fetch_assoc()) :  ?>
					<?php  
						extract($row);
						$genre_id = $row['genre_id'];
						$name = $row['name'];
					?>
				<option value="<?php  echo $genre_id ?>"><?php  echo $name ?></option>
				<?php  endwhile ?>
		<?php endif;  ?>
	</select>
		<!-- Add Label -->
        <label for="album_label">Label</label>
	<select name="album_label" id="">
		<?php
			$get_all_labels->execute();
			$get_result = $get_all_labels->get_result();
			if($get_result->num_rows>0) : ?>
				<?php while ($row = $get_result->fetch_assoc()) :  ?>
					<?php  
						extract($row);
						$label_id = $row['label_id'];
						$name = $row['name'];
					?>
				<option value="<?php  echo $label_id ?>"><?php  echo $name ?></option>
				<?php  endwhile ?>
		<?php endif;  ?>
	</select>

	<!-- Add Artist -->
	<label for="album_artist">Artist</label>
	<select name="album_artist" id="">
		<?php
			$get_all_artists->execute();
			$get_result = $get_all_artists->get_result();
			if($get_result->num_rows>0) : ?>
				<?php while ($row = $get_result->fetch_assoc()) :  ?>
					<?php  
						extract($row);
						$artist_id = $row['artist_id'];
						$name = $row['name'];
					?>
				<option value="<?php  echo $artist_id ?>"><?php  echo $name ?></option>
				<?php  endwhile ?>
		<?php endif;  ?>
	</select>

	<label for="album_description">Description</label>
	<textarea name="album_description"></textarea>

	<label for="album_year">Year</label>
	<input type="text" name="album_year" id="album_year">
		

   <input type="submit" value="Add album" name="add_album" id="add_album">
</form>

