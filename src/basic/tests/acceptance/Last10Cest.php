<?php

use yii\helpers\Url;

class Last10Cest
{
    public function ensureThatAboutWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/arsec/index'));        
        $I->see('Articles', 'h1');
        $I->see('19112', 'th');
        $I->see('10318 ', 'th');
    }
}
