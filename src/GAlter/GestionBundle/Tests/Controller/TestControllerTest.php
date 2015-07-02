<?php

namespace GAlter\GestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    public function testTestannee()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/testannee');
    }

}
