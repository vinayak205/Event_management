<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/events/register/1');

        //If not logged in and tries to register, redirects to login page.
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        
    }
}
