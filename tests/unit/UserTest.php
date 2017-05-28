<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 19:45
 */

class UserTest extends \PHPUnit\Framework\TestCase
{
   public function testThatWeCanGetTheFirstName(){
       $user = new \App\Models\User;

       $user->setFirstName('Billy');

       $this->assertEquals($user->getFirstName(),'Billy');

   }

    public function testThatWeCanGetTheLastName(){
        $user = new \App\Models\User;

        $user->setLastName('Billy');

        $this->assertEquals($user->getLastName(),'Billy');

    }
}