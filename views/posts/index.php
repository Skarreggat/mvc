<?php
//__________________________________________________________________________________
echo "<form role='search' action='search.php'>";
echo "<div class='input-group col-md-3 pull-left margin-right-1em'>";
$search_value=isset($search_term) ? "value='{$search_term}'" : "";
echo "<input type='text' class='form-control' placeholder='Type product name or description...' name='s' id='srch-term' required {$search_value} />";
echo "<div class='input-group-btn'>";
echo "<button class='btn btn-primary' type='submit'><i class='glyphicon glyphicon-search'></i></button>";
echo "</div>";
echo "</div>";
echo "</form>";
//_____________________________________________________________________________________
echo "<table id='tabla' class='table table-hover table-responsive table-bordered'>";
echo "<tr>";
echo "<th onclick='sortTable(0)'>Author</th>";
echo "<th onclick='sortTable(1)'>Content</th>";
echo "<th onclick='sortTable(2)'>Title</th>";
echo "<th>Actions</th>";
//el script del sort esta en layout.php
echo "</tr>";
//loop que recorre cada entrada del objeto(tabla)
foreach($posts as $post) { 

		echo "<tr>";
		echo "<td>$post->author</td>";//asignamos cada valor correspondiente
		echo "<td>$post->content</td>";
		echo "<td>$post->titulo</td>";
		echo "<td>";

				// read product button
		?><a href='<?php echo constant('URL'); ?>/posts/show/<?php echo $post->id;?>' class='btn btn-primary left-margin'><?php
		echo "<span class='glyphicon glyphicon-list'></span> Read";//le pasamos la url amigable al boton junto con la id de la entrada
		echo "</a>";

				// edit product button
		?><a href='<?php echo constant('URL'); ?>/posts/formUpdate/<?php echo $post->id;?>' class='btn btn-info left-margin'><?php
		echo "<span class='glyphicon glyphicon-edit'></span> Edit";//le pasamos la url amigable al boton junto con la id de la entrada
		echo "</a>";

				// delete product button
		?><a href='<?php echo constant('URL'); ?>/posts/delete/<?php echo $post->id;?>' class='btn btn-danger'><?php
		echo "<span class='glyphicon glyphicon-remove'></span> Delete";//le pasamos la url amigable al boton junto con la id de la entrada
		echo "</a>";

		echo "</td>";

		echo "</tr>";
}

echo "</table>";
?>
