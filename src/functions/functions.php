<?php

function d($param){
    print"<pre>";print_r($param);print"</pre>";
}

function set_Post_Source(){
    if($_POST['source']): $post_source = (string) $_POST['source']; 
    else: $post_source = "http://www.journaldunet.com/web-tech/developpeur/rss/";
    endif;
    return $post_source;
}