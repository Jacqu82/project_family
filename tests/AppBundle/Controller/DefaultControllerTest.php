<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
        $this->assertContains('What\'s next?', $crawler->filter('#container h2')->text());
        $this->assertContains('Your application is now ready. You can start working on it at:', $crawler->filter('#container p')->text());
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/family/list');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('UTF-8', $client->getResponse()->getCharset());
        $this->assertEquals(false, $client->getResponse()->isRedirect());
        $this->assertEquals(false, $client->getResponse()->isForbidden());
        $this->assertEquals(false, $client->getResponse()->isNotFound());
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertFalse($client->getResponse()->isCacheable());

        // Przyjęcie, że treść odpowiedzi zawiera łańcuch tekstowy
        $this->assertContains('Families', $crawler->filter('.container h2')->text());
        $this->assertContains('Hello World', $client->getResponse()->getContent());
        // Przyjecie, że istnieje co najmniej jeden znacznik h2 z klasa "subtitle"
        $this->assertGreaterThan(0, $crawler->filter('h2')->count());

        // Przyjęcie, że na stronie istnieją dokładnie 4 znaczniki h2
        $this->assertCount(1, $crawler->filter('h2'));

        // Przyjecie, że nagłówek "Content-Type", to "application/json"
        $this->assertFalse($client->getResponse()->headers->contains('Content-Type', 'application/json'));

        // ...or matches a regex
        //$this->assertRegExp('/foo(bar)?/', $client->getResponse()->getContent());

        // Przyjecie, że kod stanu odpowiedzi, to 2xx
        $this->assertTrue($client->getResponse()->isSuccessful());
        // Przyjecie, że kod stanu odpowiedzi, to 404
        $this->assertFalse($client->getResponse()->isNotFound());
        // Przejęcie, ze stan kodu wynosi 200
        $this->assertEquals(
            200, // or Symfony\Component\HttpFoundation\Response::HTTP_OK
            $client->getResponse()->getStatusCode()
        );

        // Przyjęcie, że odpowiedź jest przekierowywana do /demo/contact
        $this->assertFalse($client->getResponse()->isRedirect('/demo/contact'));
        // ...lub po prostu sparwdzenie, ze odpowiedź jest przekierowywana na jakiś adres URL
        $this->assertFalse($client->getResponse()->isRedirect());

    }
}
