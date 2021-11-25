<?php

use yii\helpers\Url;

class Last10Cest
{
    public function ensureThatAboutWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/arsec/index'));        
        $I->see('Articles', 'h1');
        $I->see('8899', 'th');
        $I->see('8658', 'th');
    }
}
