<?php

namespace tests\unit\models;

use app\models\Arsec;

class ArsecTest extends \Codeception\Test\Unit
{
    public function testFindById()
    {
        expect_that($ar = Arsec::findOne(8899));
        
        expect($ar->section_id)->equals(11);
        expect($ar->section_name)->equals('Health');

        
    }
}