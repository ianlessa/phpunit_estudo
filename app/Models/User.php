<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 28/05/2017
 * Time: 19:49
 */

namespace App\Models;


class User
{

    private $firstName;
    private $lastName;
    private $email;

    /**
     * User constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName) {
        $this->firstName = trim($firstName);
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = trim($lastName);
    }


    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

    }


    public function getEmail() : string
    {
        return $this->email;
    }

    public function getEmailVariables() : array
    {

        return [
            'fullName' => $this->getFullName(),
            'email' => $this->getEmail()
        ];
    }


}