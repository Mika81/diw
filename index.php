<?php

require_once 'src/rss/Item.php';
require_once 'src/rss/Reader.php';
require_once 'src/rss/filename.php';

$reader = new \src\rss\Reader($filename);
$source = $reader->reader();
$items = $reader->getItems();

include_once 'views/home.php';
