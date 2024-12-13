<!DOCTYPE html>
<html>
<head>
    <title>Upload Banner</title>
</head>
<body>

<h2>Upload a Banner</h2>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<form action="/banner/upload" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <label for="title">Banner Title:</label>
    <input type="text" name="title" id="title" value="<?= old('title') ?>" required><br>

    <label for="caption">Banner Caption:</label>
    <textarea name="caption" id="caption"><?= old('caption') ?></textarea><br>

    <label for="image">Banner Image:</label>
    <input type="file" name="image" id="image" required><br>

    <label for="hyperlink">Hyperlink (optional):</label>
    <input type="text" name="hyperlink" id="hyperlink" value="<?= old('hyperlink') ?>"><br>

    <label for="sort_order">Sort Order (optional):</label>
    <input type="number" name="sort_order" id="sort_order" value="<?= old('sort_order') ?>"><br>

    <label for="is_published">Publish Now?</label>
    <select name="is_published" id="is_published">
        <option value="1" <?= old('is_published') == 1 ? 'selected' : '' ?>>Yes</option>
        <option value="0" <?= old('is_published') == 0 ? 'selected' : '' ?>>No</option>
    </select><br>

    <button type="submit">Upload Banner</button>
</form>

</body>
</html>
