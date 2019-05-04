<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/' . $item["slug"]  ); ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo($item["title"]); ?>" /><br />
<!--
    <label for="slug">slug</label>
    <input type="input" name="slug" value="<?php echo($item["slug"]); ?>" /><br />
    -->
    <label for="text">Text</label>
    <textarea name="text"><?php echo($item["text"]); ?></textarea><br />

    <input type="submit" name="submit" value="Update item" />

</form>
	