<?php


namespace App\Dto;

use App\Entity\Customer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\EmailValidator;

final class CustomerDTO
{
    /**
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    public $id;
    /**
     * @Assert\Type (
     *     type="string",
     *     message = "The firstName property '{{ value }}' should be a string type",
     * )
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    public $firstName;
    /**
     * @Assert\Type("string")
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    public $lastName;
    /**
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     * )
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    public $email;
    /**
     * @Assert\Type("string")
     * @Assert\Length(min = 8, max = 20, minMessage = "minimal length is 8 numbers in a string", maxMessage = "maximal length is 20 numbers in a string")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="this should contain only numbers")
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
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