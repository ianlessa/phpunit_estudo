<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 19:45
 */

class UserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \App\Models\User
     */
   protected $user;

   public function setUp() {
       $this->user = new \App\Models\User;
   }

   /** @test */
   public function that_we_can_get_the_first_name(){

       $this->user->setFirstName('Billy');

       $this->assertEquals($this->user->getFirstName(),'Billy');

   }

    public function testThatWeCanGetTheLastName(){

        $this->user->setLastName('Garrett');

        $this->assertEquals($this->user->getLastName(),'Garrett');

    }

    public function testFullNameIsReturned() {

        $this->user->setFirstName('Billy');
        $this->user->setLastName('Garrett');

        $this->assertEquals($this->user->getFullName(), "Billy Garrett");

    }

    public function testFirstAndLastNameAreTrimmed(){


        $this->user->setFirstName('   Billy        ');
        $this->user->setLastName('          Garrett');

        $this->assertEquals($this->user->getFirstName(),'Billy');
        $this->assertEquals($this->user->getLastName(),'Garrett');
    }


    public function testEmailAddressCanBeSet() {


        $this->user->setEmail('billy@codecourse.com');

        $this->assertEquals($this->user->getEmail(),'billy@codecourse.com' );

    }

    public function testEmailVariablesContainCorrectValues(){
        

        $this->user->setFirstName('Billy');
        $this->user->setLastName('Garrett');
        $this->user->setEmail('billy@codecourse.com');
        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('fullName', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['fullName'],"Billy Garrett");
        $this->assertEquals($emailVariables['email'],"billy@codecourse.com");

    }


}