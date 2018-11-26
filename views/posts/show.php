<p><strong>Post #<?php echo $post->id; ?></strong></p>
<p><strong>Autor: </strong><?php echo $post->author; ?></p>
<p><strong>Post: </strong><?php echo $post->content; ?></p>
<p><strong>Image: </strong><?php echo $post->image ? "<img src='uploads/{$post->image}' style='width:300px;' />" : "No image found."; ?></p>
<p><strong>Titulo: </strong><?php echo $post->titulo; ?></p>