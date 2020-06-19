<?php

namespace DmitriiKoziuk\travisStudy\AppOne\tests\unit;

use DmitriiKoziuk\travisStudy\AppOne\tests;

class SomeAppTest extends \Codeception\Test\Unit
{
    protected tests\UnitTester $tester;


    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(true);
    }

    public function testIsPHPModulesLoaded()
    {
        $this->assertTrue(extension_loaded('intl'), 'intl not loaded');
        $this->assertTrue(extension_loaded('imagick'), 'imagick not loaded');
        $this->assertTrue(extension_loaded('mbstring'), 'mbstring not loaded');
        $this->assertTrue(extension_loaded('PDO'), 'PDO not loaded');
        $this->assertTrue(extension_loaded('redis'), 'redis not loaded');
    }
}
