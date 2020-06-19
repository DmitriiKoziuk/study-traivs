<?php

namespace DmitriiKoziuk\travisStudy\AppOne\tests\acceptance;

use DmitriiKoziuk\travisStudy\AppOne\tests\AcceptanceTester;

class HelloCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnUrl('http://localhost:8003/index.php');
        $I->see('App 1');
    }
}
