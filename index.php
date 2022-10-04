<?php 
$pageTitle = "";
include ('inc/header.php');
include ('./preparedStatements.php');
$get_all_albums->execute();
$get_result = $get_all_albums->get_result();

?>
<section class="catalog inner-container">

<?php 
if($get_result->num_rows>0) : ?>
	<?php while ($row = $get_result->fetch_assoc()) :  ?>
		<?php  
			extract($row);
			$name = $row['name'];
			$year = $row['year'];
			$artistName = $row['ArtistName'];
			$genreName = $row['GenreName'];
			$recordName = $row['RecordName'];
			$description = $row['description'];
			$image = $row['image'];
		?>
		<div class="card" style="background-image: url(./thumbs/<?php echo $image ?>); background-size: cover">
			<div class="opacity">
				<h2><?php echo $name ?></h2>
				<div class="card-year">
					<h3>Year</h3>
					<p><p><?php echo $year ?></p></p>
				</div>
				<div class="card-artist">
					<h3>Artist</h3>
					<p><?php echo  $artistName ?></p>
				</div>
				<div class="card-genre">
					<h3>Genre</h3>
					<p><?php echo  $genreName ?></p>
				</div>
				<div class="card-label">
					<h3>Label</h3>
					<p><?php echo  $recordName ?></p>
				</div>
			</div>
	
		</div>
	<?php  endwhile ?>
<?php endif;  ?>
<?php 
include ('inc/footer.php');
?>  
</section>
