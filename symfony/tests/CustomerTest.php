<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerTest extends WebTestCase
{
    public function testMain()
    {
	    $client = static::createClient([], [
		    'PHP_AUTH_USER' => 'testmanager21@gmail.com',
		    'PHP_AUTH_PW'   => '123456',
	    ]);
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

	public function getCustomers()
	{
		$client = static::createClient([], [
			'PHP_AUTH_USER' => 'testmanager21@gmail.com',
			'PHP_AUTH_PW'   => '123456',
		]);
		$client->request('GET', '/customer');
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
	}

	public function getCustomerCertain()
	{
		$client = static::createClient([], [
			'PHP_AUTH_USER' => 'testmanager21@gmail.com',
			'PHP_AUTH_PW'   => '123456',
		]);
		$client->request('GET', '/customer/2');
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
	}
}
