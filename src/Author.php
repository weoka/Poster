<?php

namespace App;

class Author extends User
{
    function __construct($name)
    {
        $this->name = $name;
    }
}