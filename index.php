<?php

require_once 'src/rss/Item.php';
require_once 'src/rss/Reader.php';

$filename = "http://web.developpez.com/index/rss";

$reader = new \src\rss\Reader($filename);

$items = $reader->getItems();

include_once 'views/home.php';

//print "<pre>"; print_r($items); print"</pre>";
