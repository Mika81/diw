<?php

require_once 'src/functions/functions.php';
require_once 'src/rss/Item.class.php';
require_once 'src/rss/Reader.class.php';
require_once 'src/rss/Filename.class.php';

$set_post_source = set_Post_Source();
$post_source_object = new \src\rss\Filename($set_post_source);
$post_source = $post_source_object->post_source;

$filename = $post_source_object->switch_post_source($post_source);
$reader = new \src\rss\Reader($filename);
$source = $reader->reader();
$items = $reader->getItems();

include_once 'views/home.php';
