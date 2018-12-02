<h3>Creación de web.</h3>
<form action="<?php echo constant('URL') ?>/web/update" method="post">
	<input type='hidden' name='id' value="<?php echo $web->id; ?>" class='form-control'/>
	<table class='table table-hover table-responsive table-bordered'>
		<tr>
			<td>Author</td>
			<td><input type='text' name='author_id' class='form-control' value="<?php echo $web->author_id; ?>"/></td>
		</tr>
		<tr>
			<td>Section</td>
			<td><input type='text' name='section' class='form-control' value="<?php echo $web->section; ?>"/></td>
		</tr>
		<tr>
			<!--<td>Colaborator</td> DE ESTA MANERA ME PONE EN SELECCION MUCHOS REPETIDOS SI HAY COLABORADORES REPETIDOS EN LA TABLA
			<td>
				<select class='form-control' name='colaborator'>
					<option><?php //echo $web->colaborator; ?></option>
					<?php //foreach($web2 as $webb2){ ?>
					<option><?php //echo $webb2->colaborator;?></option>
					<?php //} ?>
				</select>
			</td>-->
			<td>Colaborator</td>
			<td>
				<select class='form-control' name='colaborator'>
					<option><?php echo "Selected: ".$web->colaborator; ?></option>
					<option>alex</option>
					<option>dani</option>
					<option>adrian</option>
					<option>xavi</option>
				</select>
			</td>
		</tr>
				<tr>
			<td>Colaborator Date</td>
			<td><input type='date' name='colaboratorDate' class='form-control' value="<?php echo $web->colaboratorDate; ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Update</button>
			</td>
		</tr>
	</table>
</form>