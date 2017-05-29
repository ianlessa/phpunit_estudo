<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 21:58
 */

namespace App\Calculator;


abstract class OperationAbstract implements OperationInterface
{

    protected $operands;

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }
}