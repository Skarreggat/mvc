
<?php
echo "<table id='tabla' class='table table-hover table-responsive table-bordered'>";
echo "<tr>";
echo "<th onclick='sortTable(0)'>Author</th>";
echo "<th onclick='sortTable(1)'>Content</th>";
echo "<th onclick='sortTable(2)'>Title</th>";
echo "<th>Actions</th>";
//el script del sort esta en layout.php
echo "</tr>";

foreach($posts as $post) { 

		echo "<tr>";
		echo "<td>$post->author</td>";
		echo "<td>$post->content</td>";
		echo "<td>$post->titulo</td>";
		echo "<td>";

				// read product button
		?><a href='<?php echo constant('URL'); ?>/posts/show/<?php echo $post->id;?>' class='btn btn-primary left-margin'><?php
		echo "<span class='glyphicon glyphicon-list'></span> Read";
		echo "</a>";

				// edit product button
		?><a href='<?php echo constant('URL'); ?>/posts/formUpdate/<?php echo $post->id;?>' class='btn btn-info left-margin'><?php
		echo "<span class='glyphicon glyphicon-edit'></span> Edit";
		echo "</a>";

				// delete product button
		?><a href='<?php echo constant('URL'); ?>/posts/delete/<?php echo $post->id;?>' class='btn btn-danger'><?php
		echo "<span class='glyphicon glyphicon-remove'></span> Delete";
		echo "</a>";

		echo "</td>";

		echo "</tr>";
}

echo "</table>";
?>