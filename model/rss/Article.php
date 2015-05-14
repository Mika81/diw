<?php

namespace model\rss;

/**
 * Description of Article
 *
 * @author mika
 */
class Article {
    private $title;
    private $description;
    private $content;
    private $author;
    private $date;
    private $picture;
    private $link;
    
    /* |SETTERS| */
    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }
    
    public function setDescription($description)
    {
        $this->description = (string) $description;
        return $this;
    }
    
    public function setContent($content)
    {
        $this->content = (string) $content;
        return $this;
    }
    
    public function setAuthor($author)
    {
        $this->author = (string) $author;
        return $this;
    }
    
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }
    
    public function setPicture($picture)
    {
        $this->picture = (string) $picture;
        return $this;
    }
    
    public function setLink($link)
    {
        $this->link = (string) $link;
        return $this;
    }
    
    /* |GETTERS| */
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getContent()
    {
        return $this->content;
    }
    
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function getPicture()
    {
        return $this->picture;
    }
    
    public function getLink()
    {
        return $this->link;
    }
}