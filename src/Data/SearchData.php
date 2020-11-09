<?php

namespace App\Data;

class SearchData
{

    /**
    * @var string
    */
    public $q= '';

    /**
    * @var Category[]
    */
    public $category = [];


    /**
    * @var null||integer
    */
    public $max;

    /**
    * @var null||integer
    */
    public $min;
}