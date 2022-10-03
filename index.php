<?php 
$pageTitle = "";
include ('inc/header.php');

if (isset($_GET['displayBy'])) {
	$displayBy = $_GET['displayBy'];
} else {
	// $displayBy = "";
}
if (isset($_GET['displayValue'])) {
	$displayValue = $_GET['displayValue'];
} else {
	// $displayValue = "";
}

$sql = "SELECT artist, title, year, artwork, label, cd_id from cd_catalog_class";

if (isset($displayBy) && isset($displayValue)) 
{
	$sql .= " WHERE $displayBy = '$displayValue'";
}

$result = mysqli_query($conn, $sql);
if (!$result) 
{
	echo '<p>Bad query mysqli_error($conn)</p>';
}
else
{
	if (mysqli_num_rows($result) == 0) 
	{
		echo '<p>No results returned</p>';
	}
	else
	{
		echo "<div class=\"gallery\">";
		while ($row = mysqli_fetch_assoc($result)) 
		{
			extract($row);
			?>
			<div>
				<img src="img/thumbs100/<?php echo $artwork; ?>" alt="<?php echo $artist . ' - ' . $title ?>">
				<div>
					<p><b>Title: </b> <?php echo $title; ?></p>
					<p><b>Artist: </b> <?php echo $artist; ?></p>
					<p><b>Year: </b> <?php echo $year; ?></p>
					<p><b>Label: </b> <?php echo $label; ?></p>
				</div>
				<!-- create a detail page for a single view of the CD - show all info -->
				<a href="detail.php?id=<?php echo $cd_id; ?>">More info...</a>
			</div>
			<?php
		}
		echo "</div>";
	}
}
?>
<?php 
include ('inc/footer.php');
?>  