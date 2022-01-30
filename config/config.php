<?php
const TEMPLATES_DIR = '../templates/';
const LAYOUTS_DIR = 'layouts/';
const BIG_IMG_DIR = '../public/img/gallery_img/big/';
const SMALL_IMG_DIR = '../public/img/gallery_img/small/';
const Types = array('image/gif', 'image/png', 'image/jpeg');
const MaxSize = 5024000;

require "../engine/functions.php";
require "../engine/catalog.php";
require "../engine/files.php";
require "../engine/log.php";
require "../engine/classSimpleImage.php";
require "../engine/upload.php";
