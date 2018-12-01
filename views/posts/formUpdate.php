<h3>Modificación de post.</h3>
<form action="<?php echo constant('URL') ?>/posts/update" method="post" enctype="multipart/form-data">
	<input type='hidden' name='id' value="<?php echo $post->id; ?>" class='form-control'  />
	<table class='table table-hover table-responsive table-bordered'>
		<tr>
			<td>Author</td>
			<td><input type='text' name='author' value="<?php echo $post->author; ?>" class='form-control'  /></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><input type='text' name='content' class='form-control' value="<?php echo $post->content; ?>" /></td>
		</tr>
		<tr>
            <td>Actual Image</td>
            <?php $yee = constant('URL')."/uploads/".$post->image;?>
			<td><?php echo $post->image ? "<img src='$yee' style='width:150px;' />" : "No image found."; ?></td>
        </tr>
        <tr>
            <td>New Image</td>
            <td><input type="file" name="image" value="<?php echo $post->image;?>" /></td>
            <td><input type="hidden" name="imageHidden" value="<?php echo $post->image;?>" /></td>
        </tr>
		<tr>
			<td>Título</td>
			<td><input type='text' name='titulo' class='form-control' value="<?php echo $post->titulo; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Update</button>
			</td>
		</tr>

	</table>
</form>