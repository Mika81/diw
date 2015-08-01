<?php

if($_POST['source']): $post_source = (string) $_POST['source']; 
else: $post_source = "http://www.journaldunet.com/web-tech/developpeur/rss/";
endif;

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

