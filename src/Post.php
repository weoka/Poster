<?php

namespace App;

class Post
{
    public $title;
    public $content;
    public $author;
    public $category;

    function __construct(string $title, string $content, Author $author, Category $category)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->category = $category;
    }
}