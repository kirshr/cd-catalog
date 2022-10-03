<?php 
$pageTitle = "";
$validation_label = $message = "";
?>

<?php
include ('inc/header.php');
include ('./preparedStatements.php');
?>

<?php
//SQL REQUESTS (Add Label)
if(isset($_POST['add_label'])){
	$label = trim($_POST['label']);
	$label = filter_var($label, FILTER_SANITIZE_STRING);
	$form_good = TRUE;

	if ($label == "") {
		$validation_label = "<p class='error'>label Cannot be Blank</p>";
		$form_good = FALSE;          
	}
	if (strlen($label)< 2) {
		$validation_label .= "<p class='error'>label must be 2 characters or more</p>";
		$form_good = FALSE; 
	}
//SEND SQL
	if ($form_good == TRUE) {
		$add_label->bind_param("s", $label);
		$add_label->execute();
		if($add_label-> error) {
			$message = "Error: " . $add_label->error;
		}
		else {
			$message = "<h2>ADDED label</h2>";
		}
		$add_label->close();
	}
	
}
?>
<?php
	$get_all_labels->execute();
	$get_result = $get_all_labels->get_result();

	if($get_result->num_rows>0) : ?>
		<?php while ($row = $get_result->fetch_assoc()) :  ?>
			<?php  
				extract($row);
				$id = $row['label_id'];
				$name = $row['name'];
			?>
			<div>
				<h3><?php echo $name;  ?></h3>
				<h3><?php echo $id;  ?></h3>
			
			</div>
			
		<?php  endwhile ?>
		
		


<?php endif;  ?>
<div>
	<h2>Our Labels</h2>
</div>
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" class="form" enctype="multipart/form-data">
<?php
		echo $message;
	?>
	<!-- Add label -->
	<label for="label">Add label</label>
	<input type="text" name="label">
   <input type="submit" value="Add label" name="add_label" id="add_label">
</form>