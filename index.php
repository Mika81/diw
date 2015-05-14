<?php

require_once 'model/rss/Item.php';
require_once 'model/rss/Reader.php';

$filename = "http://com.clubic.feedsportal.com/c/33464/f/581985/index.rss";

$reader = new \model\rss\Reader($filename);

$items = $reader->getItems();

include_once 'views/home.php';
