
<html>
<head>
    <title>index</title>

</head>

<body>
<!--
    <h1>News -index</h1>
-->
<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('news/create' ); ?>">[ create ]</a>
<hr />
<br />
<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <p>id=<?php echo $news_item['id']; ?></p>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
        <p><a href="<?php echo site_url('news/edit/'.$news_item['slug']); ?>">[ edit ]</a></p>
        
<?php endforeach; ?>

</body>
</html>
