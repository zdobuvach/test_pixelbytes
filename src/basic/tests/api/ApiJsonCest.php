<?php

class ApiJsonCest {
    
    public $responseJsonKeyTypeValue = [
        'users' => [
            'id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
        ],
        'users/118' => [
            'id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
            'albums' => 'array',
        ],
        'albums' => [
            'id' => 'integer',            
            'title' => 'string',                      
        ],
        'albums/204' => [
            'id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
            'photos' => 'array',            
        ]
        ];

    public function _before(ApiTester $I) {
        
    }

    // tests
    public function tryToTest(ApiTester $I) {
        foreach ($this->responseJsonKeyTypeValue as $key => $value) {
            $I->sendGet($key);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $I->seeResponseMatchesJsonType($value);
            
        }

        
    }

}

class JsonKeyValue {

    public static function users() {
        return [
            'id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
        ];
    }

}
