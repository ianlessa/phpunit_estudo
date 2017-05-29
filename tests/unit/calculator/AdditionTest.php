<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 21:25
 */

class AdditionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function adds_up_given_operands() {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5,10]);

        $this->assertEquals(15,$addition->calculate());

    }
}