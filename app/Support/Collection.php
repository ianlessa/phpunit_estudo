<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 20:32
 */

namespace App\Support;


use Traversable;

class Collection implements \IteratorAggregate, \JsonSerializable
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

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    public function merge(Collection $collection)
    {
        return $this->add($collection->get());
    }

    public function add(array $items)
    {
        $this->items = array_merge($this->items,$items);
    }

    public function toJson() : string
    {
        return json_encode($this->items);
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return $this->items;
    }
}