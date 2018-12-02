<h3>Creación de web.</h3>
<form action="<?php echo constant('URL') ?>/web/insertar" method="post"><!--Pasamos por post los valores del formulario-->
	<table class='table table-hover table-responsive table-bordered'>
		<tr>
			<td>Author</td>
			<td><input type='text' name='author_id' class='form-control'/></td>
		</tr>
		<tr>
			<td>Section</td>
			<td><input type='text' name='section' class='form-control'/></td>
		</tr>
		<tr>
			<td>Colaborator</td>
			<td>
				<select class='form-control' name='colaborator'><!--Le damos los valores posibles al select-->
					<option>Select colaborator...</option>
					<option>alex</option>
					<option>dani</option>
					<option>adrian</option>
					<option>xavi</option>
				</select>
			</td>
		</tr>
				<tr>
			<td>Colaborator Date</td>
			<td><input type='date' name='colaboratorDate' class='form-control'/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Create</button>
			</td>
		</tr>
	</table>
</form>