<?php 
$pageTitle = "";
$validation_album = $message = $image = "";
?>
<?php
include ('inc/header.php');
include ('./preparedStatements.php');
include "./partials/image_functions.php"
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

	$image = $_POST['image'];
	echo $image;




	$form_good = TRUE;
	//VALIDATION
	if ($album_name == "") {
		$validation_album = "<p class='error'>album Cannot be Blank</p>";
		$form_good = FALSE;          
	}
	if (strlen($album_name)< 2) {
		$validation_album .= "<p class='error'>album must be 2 characters or more</p>";
		$form_good = FALSE; 
	}

	//IMAGE VALIDATION
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$type = $_FILES['image']['type'];
	$temp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];
	
	$file_ext = explode('.', $file_name);
	$file_actual_ext = strtolower(end($file_ext));
	if($file_size > 2097152){
		$form_good = FALSE;
		$messsage = "<p>Sorry, max size exceeded</p>";
	}
	 //Validation - Only valid file types
	$allowed_file_types = array('image/jpeg','image/pjpeg','image/png','image/webp');
	if($file_name) {
		if(!in_array($type, $allowed_file_types)){
			$form_good = FALSE;
			$message = "<p>Sorry, only images allowed</p>";
		}
		if($error > 0){
			$form_good = FALSE;
			$message = "<p>There was a problem with the file</p>";
		}   
		$unique_file_name = uniqid('', true).".".$file_actual_ext;
	}

	 //Upload succesful message
	if(move_uploaded_file($temp_name, "./uploaded_files/$unique_file_name")) {
		//Resize images to thumbnails
		switch ($file_actual_ext) {
			case 'jpg':
				resize_image("./uploaded_files/$unique_file_name", "./thumbs/", $type, 200);
				resize_image("./uploaded_files/$unique_file_name", "./display/", $type, 1000);
				break;
			case 'webp':
				resize_image_webp("./uploaded_files/$unique_file_name", "./thumbs/", $type, 200);
				resize_image_webp("./uploaded_files/$unique_file_name", "./display/", $type, 1000);
				break;
			case 'png':
				resize_image_png("./uploaded_files/$unique_file_name", "./thumbs/", $type, 200);
				resize_image_png("./uploaded_files/$unique_file_name", "./display/", $type, 1000);
		}
	}

	//IF VALIDATION IS GOOD, SEND SQL
	if ($form_good == TRUE) {
		$add_album->bind_param("siiisis", $album_name, $album_genre, $album_label, $album_artist, $album_description, $album_year, $unique_file_name);
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
<div class="inner-container form-container">
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" class="form" enctype="multipart/form-data" class="form form-album">
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

	<label for="image">Upload Image</label>
    <input type="file" name="image" id="image">
		

   <input type="submit" value="Add album" name="add_album" id="add_album">
</form>
</div>


