<?php

namespace App\Controller;

use App\Dto\CustomerDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;




class CustomerController
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository,ValidatorInterface $validator,SerializerInterface $serializer)
    {
        $this->customerRepository = $customerRepository;
        $this->validator = $validator;
        $this->serializer  =  $serializer;
    }

    /**
     * @Route("/customer/add", name="add_customer", methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     */

    public function add(Request $request)
    {
        $dto = $this->serializer->deserialize($request->getContent(), CustomerDTO::class, 'json');
        //validate fields
        $errors = $this->validator->validate($dto);
        if (0 === count($errors)) {
            // ... if validation is ok
            $customer = $this->customerRepository->saveCustomer($dto->firstName, $dto->lastName, $dto->email, $dto->phoneNumber);
            $jsonContent = $this->serializer->serialize($customer,'json');
            return new Response($jsonContent, Response::HTTP_OK);
        }else{
            $jsonContent = $this->serializer->serialize($errors,'json');
            return new Response($jsonContent, Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @Route("/customer/{id}", name="get_one_customer", methods={"GET"})
     * @IsGranted("ROLE_MANAGER")
     */
    public function get($id)
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString);
        }
        $jsonContent = $this->serializer->serialize($customer, 'json');
        $dto = $this->serializer->deserialize($jsonContent, CustomerDTO::class, 'json');
        //validate fields
        $errors = $this->validator->validate($dto);
        if (0 === count($errors)) {
            return new Response($jsonContent, Response::HTTP_OK);
        }else{
            $jsonContent = $this->serializer->serialize($errors,'json');
            return new Response($jsonContent, Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @Route("/customer/", name="get_all_customers", methods={"GET"})
     * @IsGranted("ROLE_MANAGER")
    */
    public function getAll()
    {
        $customers = $this->customerRepository->findAll();
        foreach ($customers as $customer) {
            $jsonContent = $this->serializer->serialize($customer, 'json');
            $dto = $this->serializer->deserialize($jsonContent, CustomerDTO::class, 'json');
            //validate fields
            $errors = $this->validator->validate($customer);
            if (count($errors) > 0) {
                $errorsString = (string) $errors;
                return new Response($errorsString,Response::HTTP_BAD_REQUEST);
            }
        }
        $jsonContent = $this->serializer->serialize($customers, 'json');
        return new Response($jsonContent, Response::HTTP_OK);
    }


    /**
     * @Route("/customer/update/{id}", name="update_customer", methods={"PUT"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function update($id, Request $request)
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString);
        }else{
            $dto = $this->serializer->deserialize($request->getContent(), CustomerDTO::class, 'json');
            //validate fields
            $errors = $this->validator->validate($dto);
            if (0 === count($errors)) {
                $customer->setFirstName($dto->getFirstName());
                $customer->setLastName($dto->getLastName());
                $customer->setEmail($dto->getEmail());
                $customer->setPhoneNumber($dto->get());
                $this->customerRepository->updateCustomer($customer);
                $jsonContent = $this->serializer->serialize($dto, 'json');
                return new Response($jsonContent, Response::HTTP_OK);
            }else{
                $errorsString = (string) $errors;
                return new Response($errorsString,Response::HTTP_BAD_REQUEST);
            }
        }


    }



    /**
     * @Route("/customer/delete/{id}", name="delete_customer", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete($id)
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString,Response::HTTP_BAD_REQUEST);
        }else{
            $this->customerRepository->removeCustomer($customer);
            $jsonContent = $this->serializer->serialize($customer, 'json');
            return new Response($jsonContent, Response::HTTP_OK);
        }
    }

}
