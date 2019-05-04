<?php
echo '<h2>'.$tasks_item['title'].'</h2>';
echo $tasks_item['content'];
?>
<hr />
<a href="<?php echo site_url('tasks/' ); ?>">[ List ]</a>
