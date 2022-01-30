<?php
require_once "../config/config.php";
function getFiles(): array
{
    return array_splice(scandir(BIG_IMG_DIR), 2);
}