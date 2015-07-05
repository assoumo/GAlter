<?php

namespace GAlter\GestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ImportControllerTest extends WebTestCase
{
    public function testEtudiant()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/uploadetudiant');
    }

    public function testTuteur()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/uploadtuteur');
    }

}
