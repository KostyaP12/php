<?php

require "../config/config.php";

$page = 'index';
$uploadAnswer = "";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [];

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        break;

    case 'catalog_ssr':
        $params['title'] = 'Каталог';
        $params['catalog'] = getCatalog()['catalog'];
        break;

    case 'catalog_spa':
        $params['title'] = 'Каталог spa';
        break;

    case 'about':
        $params['title'] = 'about';
        $params['phone'] = 444333;
        break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();

    case 'gallery':
        if(!empty($_FILES))upLoad();
        $params['title'] = 'Галлерея';
        $params['files'] = getFiles();
        break;

    default:
        die("404");
}



echo render($page, $params);

