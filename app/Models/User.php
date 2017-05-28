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

    protected $firstName;

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
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }


}