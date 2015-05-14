<?php

namespace model\rss;

/**
 * Description of Reader
 *
 * @author mika
 */
class Reader {

    private $filename;
    private $xml;

    function __construct($filename)
    {
        $this->filename = (string) $filename;
        /* simplexml_load_file => Convertsxml file to an object */
        $this->xml = simplexml_load_file($filename);
    }
    
    public function getItems()
    {
        $items = [];
        foreach($this->xml->channel->item as $xmlItem)
        {
            $item = new Item();
            $item->setTitle($xmlItem->title)
                ->setDescription($xmlItem->description)
                ->setLink($xmlItem->link)
                ->setDate(new \Datetime($xmlItem->pubDate))
                ->setPicture($xmlItem->thumbnail['url'])
                ->setAuthor($xmlItem->author);
            array_push($items, $item);
        }
        return $items;
    }

}
