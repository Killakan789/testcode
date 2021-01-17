<?php


namespace App\Dto;

use App\Entity\Customer;
use Symfony\Component\HttpFoundation\Request;


final class CustomerDTO
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $phoneNumber;

    public function __construct()
    {
        return $this;
    }
    public function getId(): string
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}