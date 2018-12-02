	<table class='table table-hover table-responsive table-bordered'>
		<tr>
			<td>Web #</td>
			<td><input type='text' name='id' class='form-control' value="<?php echo $web->id; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Author</td>
			<td><input type='text' name='author_id' class='form-control' value="<?php echo $web->author_id; ?>" disabled/></td>
			<!--$posts->id=$web->author_id;
            $posts->readName();
            echo $posts->author;-->
		</tr>
		<tr>
			<td>Section</td>
			<td><input type='text' name='section' class='form-control' value="<?php echo $web->section; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Colaborator</td>
			<td><input type='text' name='colaborator' class='form-control' value="<?php echo $web->colaborator; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Colaborator Date</td>
			<td><input type='text' name='colaboratorDate' class='form-control' value="<?php echo $web->colaboratorDate; ?>" disabled/></td>
		</tr>
	</table>
