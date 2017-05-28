<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 20:32
 */

namespace App\Support;


class Collection
{
    private $items = [];

    /**
     * Collection constructor.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function get() : array
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }
}