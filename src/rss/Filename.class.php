<?php

namespace src\rss;

/**
 * Description of Filename
 *
 * @author mika
 */
class Filename {

    public $filename;
    public $post_source;

    function __construct($post_source) {
        $this->post_source = (string) $post_source;
    }

    public function switch_post_source($post_source) {
        switch ($post_source) {
            case "Journal du net":
                $filename = "http://www.journaldunet.com/web-tech/developpeur/rss/";
                break;

            case "Développez.com":
                $filename = "http://web.developpez.com/index/rss";
                break;

            case "Internet Actu":
                $filename = "http://feeds.feedburner.com/internetactu/bcmJ";
                break;

            case "ZDnet.fr":
                $filename = "http://www.zdnet.fr/feeds/rss/actualites/internet/";
                break;

            default:
                $filename = "http://www.journaldunet.com/web-tech/developpeur/rss/";
                break;
        }
        return $filename;
    }
}