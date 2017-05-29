<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 21:28
 */

namespace App\Calculator;


class Addition implements OperationInterface
{
    private $operands;

    /**
     * Addition constructor.
     */
    public function __construct()
    {
    }

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
       return array_sum($this->operands);
    }


}