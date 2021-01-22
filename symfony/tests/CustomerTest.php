<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerTest extends WebTestCase
{
    public function testMain()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


    public function testCustomerAll()
    {
        $client = static::createClient();

        $client->request('GET', '/customer/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
