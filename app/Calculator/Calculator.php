<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 22:11
 */

namespace App\Calculator;


class Calculator
{

    protected $operations = [];

    public function setOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;
    }

    public function getOperations()
    {
        return $this->operations;
    }

    public function setOperations(array $operations)
    {
        $this->operations = array_merge(
            $this->operations,array_filter($operations,function($operation) {
            return $operation instanceof OperationInterface;
        }));
    }

    public function calculate()
    {
        if(count($this->operations) > 1) {
            return array_map(function($operation){
                return $operation->calculate();
            },$this->operations);
        }
        return $this->operations[0]->calculate();
    }


}