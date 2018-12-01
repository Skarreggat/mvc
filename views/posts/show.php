	<table class='table table-hover table-responsive table-bordered'>
		<tr>
			<td>Post #</td>
			<td><input type='text' name='id' class='form-control' value="<?php echo $post->id; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Author</td>
			<td><input type='text' name='author' class='form-control' value="<?php echo $post->author; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><input type='text' name='content' class='form-control' value="<?php echo $post->content; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Título</td>
			<td><input type='text' name='titulo' class='form-control' value="<?php echo $post->titulo; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Image</td>
			<?php $yee = constant('URL')."/uploads/".$post->image;?>
			<td><?php echo $post->image ? "<img src='$yee' style='width:150px;' />" : "No image found."; ?></td>
		</tr>
	</table>
