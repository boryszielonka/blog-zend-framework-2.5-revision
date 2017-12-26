<?php
namespace Blog\Entity;

class Post
{

    private $title;
    private $slug;
    private $content;
    private $category;

    function setTitle($title)
    {
        $this->title = $title;
    }

    function setSlug($slug)
    {
        $this->slug = $slug;
    }

    function setContent($content)
    {
        $this->content = $content;
    }

    function setCategory($category)
    {
        $this->category = $category;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getSlug()
    {
        return $this->slug;
    }

    function getContent()
    {
        return $this->content;
    }

    function getCategory()
    {
        return $this->category;
    }
}
