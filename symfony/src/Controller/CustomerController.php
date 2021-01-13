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




class CustomerController
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @Route("/customer/add", name="add_customer", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $phoneNumber = $data['phoneNumber'];

        $arrayofData = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phoneNumber' => $phoneNumber
        ];


        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }


        $this->customerRepository->saveCustomer($firstName, $lastName, $email, $phoneNumber);

        return new JsonResponse(['status' => 'Customer created!','data' => $jsonContent], Response::HTTP_CREATED);
    }

    /**
     * @Route("/customer/{id}", name="get_one_customer", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $customer->getId(),
            'firstName' => $customer->getFirstName(),
            'lastName' => $customer->getLastName(),
            'email' => $customer->getEmail(),
            'phoneNumber' => $customer->getPhoneNumber(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
    //     * @Route("/customer/", name="get_all_customers", methods={"GET"})
    //     */
    public function getAll(ValidatorInterface $validator)
    {


        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $customers = $this->customerRepository->findAll();
        $data = $customers;
        foreach ($customers as $customer) {
            $data[] = [
                'id' => $customer->getId(),
                'firstName' => $customer->getFirstName(),
                'lastName' => $customer->getLastName(),
                'email' => $customer->getEmail(),
                'phoneNumber' => $customer->getPhoneNumber(),
            ];
            $errors = $validator->validate($customer);
            if (count($errors) > 0) {
                 /*
                   * Uses a __toString method on the $errors variable which is a
                   * ConstraintViolationList object. This gives us a nice string
                   * for debugging.
                   */
                $errorsString = (string) $errors;
                return new Response($errorsString);
            }
        }
        $jsonContent = $serializer->serialize($customers, 'json');
        return new Response($jsonContent, Response::HTTP_OK);



    }

//    /**
//     * @Route("/customer/", name="get_all_customers", methods={"GET"})
//     */
//    public function getAll(): JsonResponse
//    {
//        $customers = $this->customerRepository->findAll();
//        $data = $customers;
//
//        return $customers;
//
////        foreach ($customers as $customer) {
////            $data[] = [
////                'id' => $customer->getId(),
////                'firstName' => $customer->getFirstName(),
////                'lastName' => $customer->getLastName(),
////                'email' => $customer->getEmail(),
////                'phoneNumber' => $customer->getPhoneNumber(),
////            ];
////        }
////
////
////        return new JsonResponse($data, Response::HTTP_OK);
//    }


    /**
     * @Route("/customer/update/{id}", name="update_customer", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['firstName']) ? true : $customer->setFirstName($data['firstName']);
        empty($data['lastName']) ? true : $customer->setLastName($data['lastName']);
        empty($data['email']) ? true : $customer->setEmail($data['email']);
        empty($data['phoneNumber']) ? true : $customer->setPhoneNumber($data['phoneNumber']);

        $updatedCostumer = $this->customerRepository->updateCustomer($customer);

        return new JsonResponse($updatedCostumer->toArray(), Response::HTTP_OK);
    }


    /**
     * @Route("/customer/delete/{id}", name="delete_customer", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $customer = $this->customerRepository->findOneBy(['id' => $id]);

        $this->customerRepository->removeCustomer($customer);

        return new JsonResponse(['status' => 'Customer deleted'], Response::HTTP_NO_CONTENT);
    }
}
