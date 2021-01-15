<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Customer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;




class CustomerController
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository,ValidatorInterface $validator)
    {
        $this->customerRepository = $customerRepository;
        $this->validator = $validator;
        $this->encoders = $encoders = [new XmlEncoder(), new JsonEncoder()];
        $this->normalizers = $normalizers = [new ObjectNormalizer()];
        $this->serializer  = $serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @Route("/customer/add", name="add_customer", methods={"POST"})
     */
    public function add(Request $request)
    {

        $data = json_decode($request->getContent(), true);

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $phoneNumber = $data['phoneNumber'];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        //creating assert in order to check entered values
        $emailCheck = new Assert\Email();
        $emailCheck->message = 'Invalid email address';

        $errors = $this->validator->validate(
            $email,
            $emailCheck
        );

        if (0 === count($errors)) {
            // ... this IS a valid email address, do something
            $this->customerRepository->saveCustomer($firstName, $lastName, $email, $phoneNumber);
            $customer = new Customer();
            $customer->setFirstName($firstName);
            $customer->setLastName($lastName);
            $customer->setEmail($email);
            $customer->setPhoneNumber($phoneNumber);
            $jsonContent = $this->serializer->serialize($customer, 'json');
            return new Response($jsonContent, Response::HTTP_OK);
        } else {
            // this is *not* a valid email address
            $errorMessage = $errors[0]->getMessage();
            $jsonContent = $this->serializer->serialize($errorMessage, 'json');
            return new Response($jsonContent, Response::HTTP_OK);
            // ... do something with the error
        }
    }

    /**
     * @Route("/customer/{id}", name="get_one_customer", methods={"GET"})
     */
    public function get($id)
    {

        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString);
        }
        $errors = $this->validator->validate($customer);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new Response($errorsString);
        }
        $jsonContent = $this->serializer->serialize($customer, 'json');
        return new Response($jsonContent, Response::HTTP_OK);
    }

    /**
    //     * @Route("/customer/", name="get_all_customers", methods={"GET"})
    //     */
    public function getAll()
    {

        $customers = $this->customerRepository->findAll();
        foreach ($customers as $customer) {
            $errors = $this->validator->validate($customer);
            if (count($errors) > 0) {
                $errorsString = (string) $errors;
                return new Response($errorsString);
            }
        }
        $jsonContent = $this->serializer->serialize($customers, 'json');
        return new Response($jsonContent, Response::HTTP_OK);
    }


    /**
     * @Route("/customer/update/{id}", name="update_customer", methods={"PUT"})
     */
    public function update($id, Request $request)
    {

        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString);
        }
        $data = json_decode($request->getContent(), true);

        empty($data['firstName']) ? true : $customer->setFirstName($data['firstName']);
        empty($data['lastName']) ? true : $customer->setLastName($data['lastName']);
        empty($data['email']) ? true : $customer->setEmail($data['email']);
        empty($data['phoneNumber']) ? true : $customer->setPhoneNumber($data['phoneNumber']);
        $errors = $this->validator->validate($customer);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new Response($errorsString);
        }else{
            $this->customerRepository->updateCustomer($customer);
            $jsonContent = $this->serializer->serialize($customer, 'json');
            return new Response($jsonContent, Response::HTTP_OK);
        }

    }


    /**
     * @Route("/customer/delete/{id}", name="delete_customer", methods={"DELETE"})
     */
    public function delete($id)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        //if customer is not found
        if($customer === null ){
            $errorsString = (string) "Customer not found with a certain id";
            return new Response($errorsString);
        }else{
            $this->customerRepository->removeCustomer($customer);
            $jsonContent = $serializer->serialize($customer, 'json');
            return new Response($jsonContent, Response::HTTP_OK);
        }
    }
}
