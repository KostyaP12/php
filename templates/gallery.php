<h2>Файлы</h2>

<?php foreach ($files as $file):?>
    <a rel="gallery" class="photo" href="../img/gallery_img/big/<?= $file ?>"><img
        src="../img/gallery_img/small/<?= $file ?>" width="150" height="100"/></a>
<?php endforeach; ?>
<br>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myPhoto">
    <input type="submit" value="upLoad">
</form>