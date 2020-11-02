<?php

namespace App;

class Category
{
    public $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}