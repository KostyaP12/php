<?php
require_once "../config/config.php";


function upLoad(): string
{
    if (!in_array($_FILES['myPhoto']['type'], Types) || $_FILES['myPhoto']['size'] > MaxSize) {
        _log("Неверный тип данных или превышен размер файла", "upload");
    } else {
        $path = BIG_IMG_DIR . $_FILES['myPhoto']['name'];
        move_uploaded_file($_FILES['myPhoto']['tmp_name'], $path);
        $image = new SimpleImage();
        $image->load($path);
        $image->resizeToWidth(150);
        $image->save(SMALL_IMG_DIR . $_FILES['myPhoto']['name']);
    }
    header("Location: ?page=gallery");
    die();
}