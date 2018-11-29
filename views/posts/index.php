
<?php
echo "<table id='tabla' class='table table-hover table-responsive table-bordered'>";
echo "<tr>";
echo "<th>Author</th>";
echo "<th>Content</th>";
echo "<th>Title</th>";
echo "<th>Actions</th>";

echo "</tr>";

foreach($posts as $post) { 

		echo "<tr>";
		echo "<td>$post->author</td>";
		echo "<td>$post->content</td>";
		echo "<td>$post->titulo</td>";
		echo "<td>";

				// read product button
		echo "<a href='?controller=posts&action=show&id=$post->id' class='btn btn-primary left-margin'>";
		echo "<span class='glyphicon glyphicon-list'></span> Read";
		echo "</a>";

				// edit product button
		echo "<a href='?controller=posts&action=formUpdate&id=$post->id' class='btn btn-info left-margin'>";
		echo "<span class='glyphicon glyphicon-edit'></span> Edit";
		echo "</a>";

				// delete product button
		echo "<a href='?controller=posts&action=delete&id=$post->id' delete-id='{$post->id}' class='btn btn-danger delete-post'>";
		echo "<span class='glyphicon glyphicon-remove'></span> Delete";
		echo "</a>";

		echo "</td>";

		echo "</tr>";
}

echo "</table>";
?>