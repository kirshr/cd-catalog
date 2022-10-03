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
				<option value=""><?php  echo $name ?></option>
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
				<option value=""><?php  echo $name ?></option>
				<?php  endwhile ?>
		<?php endif;  ?>
	</select>