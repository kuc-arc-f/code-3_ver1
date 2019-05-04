<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<hr />
<a href="<?php echo site_url('news/' ); ?>">[ List ]</a>
