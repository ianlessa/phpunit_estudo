<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 21:28
 */

namespace App\Calculator;


use App\Calculator\Exeptions\NoOperandsException;

class Addition extends OperationAbstract
{
    public function calculate()
    {
        if(count($this->operands) === 0) {
            throw new NoOperandsException();
        }
       return array_sum($this->operands);
    }
}