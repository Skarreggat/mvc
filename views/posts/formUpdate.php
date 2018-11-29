<h3>Modificación de post.</h3>
<form action="?controller=posts&action=update&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
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
            <td><?php echo $post->image ? "<img src='uploads/{$post->image}' style='width:300px;' />" : "No image found."; ?></td>
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