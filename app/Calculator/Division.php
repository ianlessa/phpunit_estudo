<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 21:56
 */

namespace App\Calculator;


use App\Calculator\Exeptions\NoOperandsException;

class Division extends OperationAbstract
{

    public function calculate()
    {
        if(count($this->operands) === 0) {
            throw new NoOperandsException();
        }

        return array_reduce(array_filter($this->operands),function($a,$b){
            if($a !== null && $b !== null) {
                return $a/$b;
            }
            return $b;
        });
    }

}