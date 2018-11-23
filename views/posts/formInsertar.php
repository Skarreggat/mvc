<h3>Creación de post.</h3>
<form action="insertar" method="post" enctype="multipart/form-data">
	<table class='table table-hover table-responsive table-bordered' style="border: solid; border-color: blue;">

		<tr>
			<td>Author</td>
			<td><input type='text' name='author' class='form-control' placeholder="Alexito" /></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><input type='text' name='content' class='form-control' placeholder="Me debe un frankfurt" /></td>
		</tr>
		<tr>
            <td>Image</td>
            <td><input type="file" name="image" /></td>
        </tr>
		<tr>
			<td>Título</td>
			<td><input type='text' name='titulo' class='form-control' placeholder="Yeee" /></td>
		</tr>
		<tr>
			<td>Data de creación</td>
			<td><input type='date' name='dCreacion' class='form-control' /></td>
		</tr>
		<tr>
			<td>Data de modificación</td>
			<td><input type='date' name='dModificacion' class='form-control' /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Create</button>
			</td>
		</tr>

	</table>
</form>